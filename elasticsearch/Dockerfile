FROM ubuntu:14.04
MAINTAINER Nate Fox nfox@corpinfo.com

RUN apt-get update && apt-get install -y elasticsearch openjdk-7-jre-headless

EXPOSE 9200

ENTRYPOINT ["/usr/bin/elasticsearch"]
