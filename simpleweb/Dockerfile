
FROM ubuntu:14.04

MAINTAINER Nate Fox nfox@corpinfo.com

# install nginx
RUN apt-get update && apt-get -y install nginx
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

ADD index.html /usr/share/nginx/html/index.html

EXPOSE 80

CMD ["nginx"]
