FROM wordpress:latest

COPY wp-content/themes/mon-theme /var/www/html/wp-content/themes/mon-theme

EXPOSE 80