!#bin/bash
#start services
service nginx start
service php7.3-fpm start
#give mysal right so it starts quikely
chown -R mysql:mysql /var/lib/mysql
service mysql start
#create a user and grant him privileges
mysql -u root -e "CREATE DATABASE wordpress"
mysql -u root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin'"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost'"
mysql -u root -e "FLUSH PRIVILEGES"
mysql -u admin -padmin wordpress < /var/wordpress.sql
#to get shell
/bin/bash