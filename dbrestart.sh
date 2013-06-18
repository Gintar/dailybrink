sudo service mysqld restart;
sudo varnishd -f /etc/httpd/conf/ryo.vcl -a 0.0.0.0:80
