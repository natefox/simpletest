FROM ubuntu:14.04
MAINTAINER Nate Fox nfox@corpinfo.com

RUN apt-get update && apt-get install redis-server

EXPOSE 6379

ENTRYPOINT ["/usr/bin/redis-server"]