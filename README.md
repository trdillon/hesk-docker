# hesk-docker

Docker container for the HESK help desk v3.4.5 (2024-06-09).

## Dependencies

- MySQL/MariaDB instance to connect to

## How to use

### Docker Compose

There is an example `docker-compose.yml` file in the repository you can use to get started.

### HESK Settings

This container uses environment variables to configure the `hesk_settings.inc.php` file. This to allow more
flexibility in the configuration and deployment of the container.

All settings should be
prefixed with `HESK_` and be in uppercase. For example, the `hesk_settings.inc.php` setting `$hesk_settings['db_host']` would be set as `HESK_DB_HOST`.

All settings are optional and have default values.

### Updating HESK

There's no guarantee that this container will work with future versions of HESK. Update at your own risk and ensure
you have a backup of your database.

### Backing up

A simple way to perform a backup of the database is to use `mariadb-dump` on the DB container and commit that file to a repository or save in storage. You can write a shell script to automate this process and run it as a cron job.

## About

This is a fork of https://github.com/luketainton/hesk-docker.

I've just updated the HESK version and modified the `hesk_settings.inc.php` file to allow the use of environment variables for everything.

##

**Support HESK by [buying a licence](https://www.hesk.com/buy.php).**
