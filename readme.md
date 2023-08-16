#wordpress_show_source

sudo chown -R www-data:www-data * <br>
sudo find -type d -exec chmod 755 {} \; <br>
sudo find -type f -exec chmod 644 {} \; <br>
sudo chmod 600 wp-config.php <br>
sudo chmod -R 775 wp-content/uploads <br>
sudo chown -R :www-data wp-content/uploads <br>