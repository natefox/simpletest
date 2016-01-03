# Pull base image.
FROM ubuntu:14.04

# Install Nginx.
RUN \
  apt-get update && \
  apt-get install -y nginx && \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf

# Define default command.
CMD ["nginx"]

# Expose ports.
EXPOSE 80
