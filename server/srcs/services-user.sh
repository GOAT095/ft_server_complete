#!/bin/bash
#start services
service nginx start
service php7.3-fpm start
#give mysal right so it starts quikely
chown -R mysql:mysql /var/lib/mysql
service mysql start
#create a user and grant him privileges
mysql -u root -e "CREATE DATABASE wordpress"
mysql -u root -e "CREATE DATABASE phpmyadmin"
mysql -u root -e "CREATE USER 'pma'@'localhost' IDENTIFIED BY 'pmapass'"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'pma'@'localhost'"
mysql -u root -e "FLUSH PRIVILEGES"
mysql -u pma -ppmapass wordpress < /var/wordpress.sql
mysql -u pma -ppmapass phpmyadmin < /var/www/html/phpmyadmin/sql/create_tables.sql
#to get shell
/bin/bash