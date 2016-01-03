FROM ubuntu:14.04
MAINTAINER Nate Fox nfox@corpinfo.com

# install nginx
RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install nginx
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN mv /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak
ADD default /etc/nginx/sites-available/default

# install PHP
RUN apt-get -y install php5-fpm php5-curl
RUN sed -i s/\;cgi\.fix_pathinfo\s*\=\s*1/cgi.fix_pathinfo\=0/ /etc/php5/fpm/php.ini

# prepare php test scripts
RUN echo "<?php phpinfo(); ?>" > /usr/share/nginx/html/info.php
ADD index.php /usr/share/nginx/html/index.php
ADD es.php /usr/share/nginx/html/es.php

EXPOSE 80

CMD /etc/init.d/php5-fpm start && nginx
