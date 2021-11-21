#!bin/sh
wp core download --allow-root --path=/var/www/wordpress
wp config create --dbhost=$DB_HOST --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --skip-check --allow-root
wp config set WP_HOME \'http://$DOMAIN_NAME\' --raw --allow-root
wp config set WP_SITEURL \'http://$DOMAIN_NAME\' --raw --allow-root