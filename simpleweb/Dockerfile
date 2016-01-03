
FROM ubuntu:14.04

MAINTAINER Nate Fox nfox@corpinfo.com

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80

RUN apt-get update && apt-get install -y apache2

ADD index.html /var/www/index.html

CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]
