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
    log_file.write("Letsencrypt TLS Generator: START")

    # Calls the bash command to generate the TLS certificates
    letsencrypt_command = [
        "./letsencrypt-auto", "--config", "/etc/letsencrypt/cli.ini", "--agree-tos", "certonly"
    ]

    letsencrypt_output = ""

    try:
        # Note: unknown if cwb can take relative paths, we'll give it a try to see.
        letsencrypt_output_raw = subprocess.Popen(letsencrypt_command, stdout=subprocess.PIPE, stderr=subprocess.PIPE,
                                                  cwd="build")
        letsencrypt_output = bytes(letsencrypt_output_raw.stdout.read()).decode()
    except subprocess.CalledProcessError:
        # Something went wrong with the certificate generation, sends an email to the omega
        log_file.write("Error: unable to generate the TLS certificate. Sending an email to the omega.")
        email_omega(False, log_file)

    log_file.write(letsencrypt_output)
    log_file.write("TLS certificates successfully generated for this month. Sending notification email to omega.")
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
    log_file.write("Email to omega successfully sent.")
    return


def main():
    log_file = setup_logging()
    generate_tls_certificates(log_file)
    log_file.close()
    return


# Standard boilerplate to call the main() function to begin the program.
if __name__ == '__main__':
    main()
