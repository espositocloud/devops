help:
	@echo 'Help'

u update:
	@echo 'TODO'

debian8 jessie:
	@sudo apt install python
	@sudo apt install -t jessie-backports docker.io
	@sudo pip2 install docker-compose

debian9 stretch:
	@sudo apt install python docker.io docker-compose

arch:
	@sudo pacman -S python2 docker
	@sudo pip2 install docker-compose
