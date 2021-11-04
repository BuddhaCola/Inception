FROM alpine:3.12

RUN apk update && apk add nginx openssl

COPY default.conf /etc/nginx/conf.d/

COPY generate_ssl.sh .

RUN mkdir /run/nginx/

RUN sh ./generate_ssl.sh

ARG DB_NAME

RUN echo $DB_NAME $DB_USER $DB_HOST $DB_PASSWORD $DB_ROOT_PASS $CUSTOM_URL $ADM_EMAIL $USR_EMAIL $WP_ADMIN $WP_USER $WP_ADM_PASS $WP_USR_PASS

CMD nginx -g 'daemon off;'