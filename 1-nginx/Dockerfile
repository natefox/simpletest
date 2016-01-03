FROM        ubuntu:14.04
RUN         apt-get update && apt-get install -y nginx
EXPOSE      80
ADD index.html /usr/share/nginx/html/index.html
CMD         ["nginx", "-g", "daemon off;"]

