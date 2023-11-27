FROM php:8-fpm-alpine as php

ARG UID

RUN set -ex \
  && apk --no-cache add \
  postgresql-dev \
  && docker-php-ext-install -j$(nproc) pdo_pgsql

RUN adduser -G root -u $UID -h /home/$UID -S $UID
USER $UID
