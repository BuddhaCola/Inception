FROM alpine:3.12

RUN apk update && apk add nginx openssl

COPY default.conf /etc/nginx/conf.d/

COPY tools/generate_ssl.sh .

RUN mkdir /run/nginx/

RUN sh ./generate_ssl.sh

CMD nginx -g 'daemon off;'