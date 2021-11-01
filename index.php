<?php
echo 'hello world';

/*
 * Run jmeter for load testing
 *  sudo apt install openjdk-11-jdk
 * go to https://jmeter.apache.org/download_jmeter.cgi and download binary
 * then sudo tar -xf apache-jmeter-5.4.1.tgz
 * cd apache-jmeter-5.4.1
 * sudo ./bin/jmeter
*/

/*
To kill process that are listening to 80
sudo lsof -t -i tcp:80 -s tcp:listen | sudo xargs kill
*/

/*
To run server and specify the path
sudo php -S 127.0.0.1:80 -t /var/www/html/testsite.com
*/

/*
 sudo ln -s /etc/nginx/sites-available/testsite.com.conf /etc/nginx/sites-enabled/testsite.com.conf
 sudo service nginx restart
 sudo systemctl status nginx.service
 sudo nginx -t

 etc/nginx/sites-available/testsite.com.conf

upstream testsite {
    server 127.0.0.1:80 weight=3;
    server 127.0.0.2:81;
}

server {
    listen 82; // 82 for my case as apache was running on 80

     server_name testsite.com;

    root /var/www/html/testsite.com;

    location / {
        try_files $uri /index.php?$args;
    }

    location ~ \.php$ {
    try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }
}
*/
