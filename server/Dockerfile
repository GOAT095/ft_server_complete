#version
FROM debian:buster

#update needed
RUN apt-get update

#install tools and needs
RUN apt-get install -y nginx php-fpm wget php-mysql unzip lsb-release gnupg php7.3-mbstring vim

#downloads
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-all-languages.zip &&\
    wget https://wordpress.org/latest.zip

#MySql
COPY srcs/mysql.sh /
RUN sh mysql.sh
#copy default config
COPY srcs/default /
RUN mv default /etc/nginx/sites-available/
#runs
RUN unzip phpMyAdmin-4.9.2-all-languages.zip &&\
    mkdir var/www/html/phpmyadmin &&\
    mv phpMyAdmin-4.9.2-all-languages/* var/www/html/phpmyadmin && \
    unzip latest.zip -d /var/www/html/ && \
    mv /var/www/html/wordpress/* /var/www/html/
    # mv /var/www/html/wordpress/.* /var/www/html/

#copy new config.inc.php for blowfish warning
COPY srcs/config.inc.php /var/www/html/phpmyadmin/

#tmp warning
RUN mkdir var/www/html/phpmyadmin/tmp &&\
    chmod 777 var/www/html/phpmyadmin/tmp

#openssl
COPY srcs/domain.crt /etc/ssl/certs/
COPY srcs/domain.key /etc/ssl/private/

#wordpress config and database
COPY srcs/wordpress.sql /var/wordpress.sql
COPY srcs/wp-config.php /var/www/html/

#start services and give privileges
COPY srcs/services-user.sh /
RUN chmod +x services-user.sh
ENTRYPOINT [ "./services-user.sh" ] 
#[ "bash", "services-user.sh" ]