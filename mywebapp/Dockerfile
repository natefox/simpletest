
FROM ubuntu:14.04

MAINTAINER Nate Fox nfox@corpinfo.com

# install nginx
RUN apt-get update && apt-get -y install nginx
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

EXPOSE 80

ADD index.html /usr/share/nginx/html/index.html

CMD ["nginx"]
