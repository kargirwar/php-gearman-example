git clone https://github.com/kargirwar/php-gearman-example.git
cd php-gearman-example.git
composer update
php tests/test-client.php
php tests/test-worker.php &
