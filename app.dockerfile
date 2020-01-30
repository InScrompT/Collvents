FROM composer:latest AS composer

COPY . .
RUN composer install

FROM abiosoft/caddy:latest

COPY --from=composer /app/ /srv
COPY Caddyfile /etc/Caddyfile
