# readme

## host
127.0.0.1 junior.mbp

## nginx vhost conf
/usr/local/etc/nginx/servers/junior_framework.conf
 
 ``` conf
 server {
     
     server_name junior.mbp;
     root /Users/cbd/vm/learn/app_framework/junior_framework;
     access_log /Users/cbd/vm/learn/app_framework/junior_framework/access.log;
     
 
     listen 80;
     index index.php;
 
     location / {
         rewrite ".+" "/index.php" last;
     }
 
     location ~ \.php$ {
             fastcgi_pass   127.0.0.1:9000;
             fastcgi_index  index.php;
             fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
             include        fastcgi_params;
         }
     location ~ .*\.(map|html|woff|ttf|ico|css|js|gif|jpg|jpeg|png|bmp|swf)$ {
         expires 90d;
     }
 }

 ```