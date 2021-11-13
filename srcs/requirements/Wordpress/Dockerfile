FROM	debian:buster

RUN		apt-get update
RUN		apt-get upgrade -y
RUN		apt-get install -y php php-mysqli php-fpm curl wget

# RUN sed -i "s/127.0.0.1/wordpress/" /etc/php/php-fpm7.3/www.conf


# RUN		wget https://wordpress.org/latest.tar.gz && tar -xf latest.tar.gz && rm latest.tar.gz

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

WORKDIR	/var/www/wordpress
RUN wp core download --allow-root --path=/var/www/wordpress
RUN wp config create --dbhost=$DB_HOST --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --skip-check --allow-root
# RUN cat wp-config.php && sleep 5


CMD		/usr/sbin/php-fpm7.3 -F