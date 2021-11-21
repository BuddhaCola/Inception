#!bin/sh
if [ ! -d /var/lib/mysql/wordpress ] ; then
service mysql start
echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;"| mysql -u root
echo "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';"| mysql -u root
echo "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%' WITH GRANT OPTION;"| mysql -u root
echo "FLUSH PRIVILEGES;"| mysql -u root

mysql < site.sql ; rm site.sql
service mysql stop
fi