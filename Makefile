all:
	mkdir -p home/wtaylor/data/db/
	mkdir -p home/wtaylor/data/wp/
	docker-compose -f ./srcs/docker-compose.yml build
	docker-compose -f ./srcs/docker-compose.yml up -d

up:
	docker-compose -f ./srcs/docker-compose.yml up -d --build

down:
	docker-compose -f ./srcs/docker-compose.yml down -v
	
rm:
	sudo rm -rf home/wtaylor/data/db/*
	sudo rm -rf home/wtaylor/data/wp/*
	
clear: rm
	docker rmi $$(docker images -aq)