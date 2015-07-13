# Components

Every component has a dedicated directory which includes:

* `Dockerfile`
* `.dockerignore`
* .`gitignore`

* **WARNING**:  don't use 2 envars with the same key (but it's ok in .yaml of uWSGI?!?)

## Tests

Integration and e2e tests should be done outside the "app containers", and should interact towards the proxy in order to emulate a real behaviour.

This includes a single container, or a set of containers (see Selenium + browsers..).

## Reverse Proxy, Web Server

Something who expose to the out world.

* NGiNX by default
* named `proxy` in `docker-compose.yml`
* usually serve (cached) static files

* proxy exposes to external, at `8080` and/or `8443` (`= 8000 + real_port`)
* run in their default user
* should provide HTTPS (HTTP/1.1+TLS, SPDY/3.1+TLS, HTTP/2.0+TLS)

## Application Server(s)

* if mono-component, named `app` in `docker-compose.yml` (e.g. Wordpress)
* if dual-components, named `back` and `front` in `docker-compose.yml` (e.g. Django + Angular)
* static files could be served directly from NGiNX

### Dockerfile

Conventions:

* use `deps/` for Debian/APT, PyPI/PIP or other package manager dependencies
* `app` Unix user/group for serving the application
* exposes `5000` port

Base containers:

* Python:  `kobe25/uwsgi-python`
* Python2:  `kobe25/uwsgi-python2`
* PHP:  `kobe25/uwsgi-php`
* NodeJS/iojs: `iojs:2.3` (`npm install harp..`)

For settings use **environment variables** with default to a development environment:

* `DJANGO_SETTINGS` should be in container (read `DJANGO_SETTINGS` var), not only in uWSGI (read `UWSGI_*` vars)
* `PYTHONPATH` should be set in container (read `PYTHONPATH` var), not only in uWSGI (read `UWSGI_PYTHONPATH` var)

### Logs

    /dev/stdout
    /dev/stderr
    /tmp

### Configuration

Use an optional `app.yaml`:

    id: my_app
    server_name: myapp.example.org
    env: prod
    admin_email: admin@example.com
    admin_password: admin
    default_email: admin@example.com

### Offloading tasks

Formerly `/usr/local/bin/do_something`, `/etc/cron.d/app_cron`

## Database Server(s)

* named `db` in `docker-compose.yml`
* stateful component
* generally use as it's
* it could be `postgres`, `mariadb`, `mongo`, `redis` or others
* expose their default port
* run in their default user

### Backup

* script?  (formerly in `/usr/local/bin/`)
* directory?  (formerly in `/var/backups/`)

## Examples

A static compiled site (e.g. portfolio):
* `proxy`

Stateless app:
* `proxy`
* `app`

Stateful app (e.g. Wordpress):
* `proxy`
* `app`
* `db`

Another stateful app (e.g. Gasista Felice):
* `proxy`
* `front`
* `back`
* `db`

Optionally, there could be 1+ container for testing:
* `test` for e2e and integration tests
