FROM debian:buster

RUN apt update && apt install -y mariadb-server vim

ARG DB_NAME
ARG DB_HOST
ARG DB_PASSWORD
ARG DB_USER

COPY ./tools/setup.sh .
COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
Copy ./tools/site.sql .

RUN chmod +x ./setup.sh

RUN sh setup.sh

CMD ["mysqld", "-u", "root"]