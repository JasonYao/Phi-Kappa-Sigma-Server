import requests
import secrets
import os
import datetime
import subprocess

__author__ = 'Jason Yao'


def setup_logging():
    log = "logs"

    if not os.path.exists(log):
        os.makedirs(log)

    date = datetime.datetime.now()
    log_file_name = "logs/" + date.strftime('%Y-%m-%d') + ".log"
    return open(log_file_name, 'w')


def generate_tls_certificates(log_file):
    log_file.write("Letsencrypt TLS Generator: START\n")

    # Calls the bash command to generate the TLS certificates
    echo_command = [
        "echo", "2"
    ]
    letsencrypt_command = [
        "./letsencrypt-auto", "--config", "/etc/letsencrypt/cli.ini", "--agree-tos", "certonly"
    ]

    letsencrypt_output = ""

    try:
        # We do it this way to feed in the integer "2" into stdin, so it hits the interactive prompt
        echo_output = subprocess.Popen(echo_command, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
        letsencrypt_output_raw = subprocess.check_output(letsencrypt_command, stdin=echo_output.stdout, cwd="build")
        echo_output.stdout.close()

        letsencrypt_output = bytes(letsencrypt_output_raw).decode()
    except subprocess.CalledProcessError:
        # Something went wrong with the certificate generation, sends an email to the omega
        log_file.write("Error: unable to generate the TLS certificate. Sending an email to the omega.")
        email_omega(False, log_file)

    log_file.write(letsencrypt_output)
    log_file.write("TLS certificates successfully generated for this month.\nSending notification email to omega.")
    email_omega(True, log_file)
    return


def email_omega(success, log_file):
    if success:
        message = "Letsencrypt has successfully generated TLS certificates for this month."
        subject = "Letsencrypt: Success"
    else:
        message = "Error: letsencrypt has run into an error during TLS certificate generation. " \
                  "Omega please check the server."
        subject = "Letsencrypt: Failed"

    # Send the notification email to the omega
    requests.post(
        "https://api.mailgun.net/v3/skullhouse.nyc/messages",
        auth=("api", secrets.api_key),
        data={"from": "Samuel Brown Wylie Mitchell <Samuel@skullhouse.nyc>",
              "to": secrets.omega_email,
              "subject": subject,
              "text": message
              })
    log_file.write("Email to omega successfully sent.\n")
    return


def main():
    log_file = setup_logging()
    generate_tls_certificates(log_file)
    log_file.close()
    return


# Standard boilerplate to call the main() function to begin the program.
if __name__ == '__main__':
    main()
