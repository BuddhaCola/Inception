#!bin/sh

# openrc default

# /etc/init.d/mariadb setup

# sed -i "s|\[mysqld]|\[mysqld]\nskip-networking=false\nbind-address=0.0.0.0|g" /etc/my.cnf

# sed -i "s|.*bind-address\s*=.*|bind-address=0.0.0.0|g" /etc/my.cnf.d/mariadb-server.cnf

# sed -i "s|.*skip-networking.*|skip-networking=false|g" /etc/my.cnf.d/mariadb-server.cnf
if [ ! -d /var/lib/mysql/wordpress ] ; then
service mysql start
echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;"| mysql -u root
echo "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';"| mysql -u root
echo "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%' WITH GRANT OPTION;"| mysql -u root
echo "FLUSH PRIVILEGES;"| mysql -u root

service mysql stop
fi
service mysql start

mysql < site.sql ; rm site.sql

service mysql stop