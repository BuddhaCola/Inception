all:
	mkdir -p ~/data/db/
	mkdir -p ~/data/wp/
	docker-compose -f ./srcs/docker-compose.yml build
	docker-compose -f ./srcs/docker-compose.yml up -d

up:
	docker-compose -f ./srcs/docker-compose.yml up -d --build

down:
	docker-compose -f ./srcs/docker-compose.yml down -v
	
rm:
	sudo rm -rf ~/data/db/*
	sudo rm -rf ~/data/wp/*
	
clear: rm
	docker rmi $$(docker images -aq)