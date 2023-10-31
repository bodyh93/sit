FROM php:fpm-alpine

COPY --from=mlocati/php-extension-installer:latest --link /usr/bin/install-php-extensions /usr/local/bin/

RUN apk add --no-cache \
		acl \
		fcgi \
		file \
		gettext \
		git \
	;

RUN set -eux; \
    install-php-extensions \
		apcu \
		intl \
		opcache \
		zip \
        mbstring \
        pdo \
        pdo_mysql \
    ;

CMD ["php-fpm"]

COPY docker/php/php.ini "$PHP_INI_DIR/php.ini"

COPY --link . ./
RUN rm -Rf docker/

WORKDIR /var/www/sit
