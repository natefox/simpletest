FROM ubuntu:14.04
MAINTAINER Nate Fox nfox@corpinfo.com

RUN apt-get update && apt-get install -y openjdk-7-jre-headless curl
RUN curl -Ls -o /tmp/elasticsearch-2.1.1.deb https://download.elasticsearch.org/elasticsearch/release/org/elasticsearch/distribution/deb/elasticsearch/2.1.1/elasticsearch-2.1.1.deb && \
    dpkg -i /tmp/elasticsearch-2.1.1.deb

EXPOSE 9200

ENTRYPOINT ["/usr/bin/elasticsearch"]
