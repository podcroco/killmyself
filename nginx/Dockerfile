FROM alpine:3.11

RUN set -xe \
    && apk add tzdata && cat /usr/share/zoneinfo/Asia/Tokyo > /etc/localtime \
    && apk --update add --no-cache \
        php7 \
        php7-fpm \
        supervisor \
        nginx
ADD conf /conf
ADD public /app/public
RUN mkdir /var/run/php-fpm7 \
    && chown nginx:nginx /var/run/php-fpm7 \
    && mkdir -p /var/lib/nginx/logs && chown nginx:nginx /var/lib/nginx/logs \
    && chown nginx:nginx /app
WORKDIR /app
EXPOSE 80
USER nginx
CMD ["supervisord", "-c", "/conf/supervisord.conf"]
