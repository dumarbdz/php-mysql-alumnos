FROM php:8.2-cli
RUN apt-get update -y && apt-get install -y libsqlite3-dev && docker-php-ext-install pdo pdo_sqlite
COPY src/ /app/
WORKDIR /app
EXPOSE 10000
CMD ["php", "-S", "0.0.0.0:10000"]