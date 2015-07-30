# Install

Prerequisites:

* [**Docker Engine**](https://www.docker.com/) (>=1.6.2), il container runtime
* [**Docker Compose**](https://docs.docker.com/compose/) (>=1.2), il container orchestrator, con cui gestiremo l'applicazione multi container
* `localhost:8080` and/or `localhost:8443` available
* at least 10-20G of free space

For APT/YUM-based distros, you can install the *Docker Engine* via the [official repository](https://blog.docker.com/2015/07/new-apt-and-yum-repos/)!

A seconda della propria distro:

    $ make debian8
    $ make debian9
    $ make arch

Aggiungere il proprio utente al gruppo `docker` per evitare `sudo` nell'uso della CLI (sostituire `username` con il proprio username):

    # gpasswd -a username docker

Lanciare il demone `docker` (*Docker Engine*):

    # systemctl start docker
