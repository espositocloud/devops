# Usage

**Operazioni fuori dai container**

* *code editing*
* *git commands*

Entrambe le operazioni si fanno comodamente con il proprio editor e/o la propria shell preferita.

**Operazioni dentro i container?**

Per installare pacchetti Python:

    $ make back
    # pip install..

Per installare pacchetti con Bower:

    $ make front
    # bower install --allow-root ..

Per usare la shell Python direttamente:

    $ make shell

Per usare il client del db:

    $ make dbshell

Serve altro?

Nota:  non serve `sudo` perche' si e' gia' `root`.  Anzi, evitare del tutto l'uso di `sudo` (se proprio necessario andare di `su`).

Per approfondire:

* [Docker Engine CLI Reference](https://docs.docker.com/docker/reference/commandline/cli/)
* [Docker Compose CLI Reference](https://docs.docker.com/compose/cli/)

## Tricks

Quando si riavvia un container, riavviare anche quelli che dipendono da questo.  Ad esempio:

* se riavvio `proxy`, devo riavviare `test` (se presente)
* se riavvio `back`, devo riavviare `proxy` e `test`
* se riavvio `db`, devo riavviare `back`, `proxy` e `test`
* se riavvio `front`, devo riavviare `proxy` e `test`

Per semplicita' si puo' semplicemente riavviare tutto  :)
