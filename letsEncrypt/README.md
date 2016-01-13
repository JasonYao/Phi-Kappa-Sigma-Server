# Let's Encrypt: Free Automated TLS certificate
By Jason Yao - [letsencrypt](https://letsencrypt.org/)

## Description
We will use the Let's Encrypt service to automate the generation and deployment of each of our TLS certs, 
such that automatic generation and deployment will occur.

## Running the program

### Using the [run](run.sh) script
```sh
./run.sh
```

### Using the [manual run](run-manually.sh) script
```sh
./run-manually.sh
```

### The really manual way
```sh
cd build
./letsencrypt-auto --config /etc/letsencrypt/cli.ini --agree-tos certonly
```

## `Cron` job
To have the server automatically run the `cron` job once a month, simply run the [time](time.sh) script to have the job be added.

## Configuration file
The [configuration file](cli.ini) for LE will be symlinked to /etc/letsencrypt/cli.ini.
