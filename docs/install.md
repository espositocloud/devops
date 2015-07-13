# Install

Prerequisites:

* [**Docker Engine**](https://www.docker.com/) (>=1.6.2), il container runtime
* [**Docker Compose**](https://docs.docker.com/compose/) (>=1.2), il container orchestrator, con cui gestiremo l'applicazione multi container
* `localhost:8080` and/or `localhost:8443` available
* at least 10-20G of free space

A seconda della propria distro:

    $ make debian8
    $ make debian9
    $ make arch

Aggiungere il proprio utente al gruppo `docker` per evitare `sudo` nell'uso della CLI (sostituire `username` con il proprio username):

    # gpasswd -a username docker

Lanciare il demone `docker` (*Docker Engine*):

    # systemctl start docker
