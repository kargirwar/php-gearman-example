//install gearman-job-server  
//install php-gearman  
//Refer https://www.patreon.com/posts/gearman-now-in-14627464  
gearmand -d  
git clone https://github.com/kargirwar/php-gearman-example  
cd php-gearman-example  
composer update  
php run tests/test-client.php  
php run tests/test-worker.php & //note the "&"
