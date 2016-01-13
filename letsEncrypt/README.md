# Let's Encrypt: Free Automated TLS certificate
By Jason Yao - [letsencrypt](https://letsencrypt.org/)

## Description
We will use the Let's Encrypt service to automate the generation and deployment of each of our TLS certs, 
such that automatic generation and deployment will occur.

## Running the program
To generate and deploy the certifications, simply run the command below.

```sh
./letsencrypt-auto --config /etc/letsencrypt/cli.ini --agree-tos certonly
```

## Cron job
The `cron` job is already on the server, and will just do one thing: run the above program once every 60 days,
then send an email about it to the omega email address. TODO make cron job.

## Configuration file
The [configuration file](cli.ini) for LE will be symlinked to /etc/letsencrypt/cli.ini.
