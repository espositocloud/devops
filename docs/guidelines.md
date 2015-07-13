# Guidelines

## Workflow

* development via *Docker Compose*
* CI on *Travis CI* and/or *Drone* (>=0.4)
* container images should be built automatically on *Docker Hub*
* deployment via *OpenShift* PaaS

## Environments

Mandatory environments:

* `dev` for development (default)
* `prod` for production

Optional environments:

* `stage` for staging
* `qa` for quality-assurance
* ..

Production:
* target:  production
* users:  all
* ENV `prod`
* branch `stable`
* weekly rolling updates
* daily backups

Staging:
* target:  new features testing, db compatibility testing
* users:  developers, beta tester..
* ENV:  `stage`
* branch:  `beta`
* daily rolling updates
* daily backups

Development:
* target:  development
* users:  developers
* ENV:  `dev`
* branch:  `master`

## Code

* `Makefile` with some common commands:
  * `up` for bootstrapping in background
  * `test` for running all tests
  * `shell` (like `django-admin shell`)
  * `dbshell` (like `django-admin dbshell`)
* the root of every image is `/code` or a subdirectory
* **convention over configuration**:  for every environment, all settings **must** have a default value and could be customized via *environment variables* or *settings.yaml* file.
