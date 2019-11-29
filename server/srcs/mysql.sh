export DEBIAN_FRONTEND=noninteractive
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections
dpkg --install mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get -y install mysql-server