FROM debian:buster

# Updating and intalling all services

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y nginx
RUN apt-get install -y mariadb-server
RUN apt-get install -y wget
RUN apt-get install -y php-fpm php-mysql
RUN apt-get install -y openssl
RUN apt-get install -y vim 

# Ngnix config

RUN mkdir /var/www/wordpress
RUN chmod -R 755 /var/www/*
COPY srcs/autoindex.sh ./
RUN chmod +x autoindex.sh
COPY srcs/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

# MySQL config

COPY srcs/database.sh ./
RUN sh database.sh

# Wordpress installation and configuration

COPY srcs/wp-config.php /var/www/wordpress/
RUN cd /tmp && wget https://wordpress.org/latest.tar.gz && tar xzvf latest.tar.gz 
RUN mv /tmp/wordpress/* /var/www/wordpress/
RUN rm /tmp/latest.tar.gz
RUN chown -R www-data:www-data /var/www/*

# PhpMyAdmin configuration

RUN mkdir /var/www/phpmyadmin
RUN cd /tmp && wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz  && tar xzf phpMyAdmin-5.0.2-english.tar.gz --strip-components=1 -C /var/www/phpmyadmin
COPY srcs/config.inc.php /var/www/phpmyadmin

# SSL keys
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -newkey rsa:4096 -sha256 -nodes -keyout /etc/nginx/ssl/localhost_key.pem -out /etc/nginx/ssl/localhost.pem -days 3650 -subj "/C=RF/ST=Kazan/L=Kazan/O=21 School/OU=mspyke/CN=superproject"

ENTRYPOINT service nginx start && service mysql restart && service php7.3-fpm start && /bin/bash
