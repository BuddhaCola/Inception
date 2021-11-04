FROM	alpine:3.12

RUN		apk update

RUN		apk add php7 php7-mysqli php7-fpm

RUN sed -i "s/127.0.0.1/wordpress/" /etc/php7/php-fpm.d/www.conf

WORKDIR	/var/www/

RUN		wget https://wordpress.org/latest.tar.gz && tar -xf latest.tar.gz && rm latest.tar.gz

COPY	./wtaylor.conf /etc/php7/php-fpm.d/wtaylor.conf

CMD		/usr/sbin/php-fpm7 -F 