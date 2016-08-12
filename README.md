server {
    server_name www.starter.com;

    root /Users/lufangyu1217/htdocs/user-manage-system/web;

    location / {
        try_files $uri /app_dev.php$is_args$args;
    }

    location ~ ^/(app_dev|config)\.php(/|$) {
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }

    location ~ \.php$ {
      return 404;
    }

    error_log /var/log/nginx/www.starter.com.error.log;
    access_log /var/log/nginx/www.starter.com.access.log;
}