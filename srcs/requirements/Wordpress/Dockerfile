FROM	debian:buster

RUN		apt-get update
RUN		apt-get upgrade -y
RUN		apt-get install -y php php-mysqli php-fpm curl wget

COPY	./wtaylor.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN php wp-cli.phar --info
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /run/php/

ARG DB_NAME
ARG DB_HOST
ARG DB_PASSWORD
ARG DB_USER
ARG DOMAIN_NAME

WORKDIR	/var/www/wordpress
COPY	tools/setup.sh .
RUN		sh setup.sh && rm setup.sh

CMD		/usr/sbin/php-fpm7.3 -F