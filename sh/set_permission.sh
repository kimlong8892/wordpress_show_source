sudo chown -R www-data:www-data *
sudo find -type d -exec chmod 755 {} \;
sudo find -type f -exec chmod 644 {} \;
sudo chmod 600 wp-config.php
sudo chmod -R 775 wp-content/uploads
sudo chown -R :www-data wp-content/uploads