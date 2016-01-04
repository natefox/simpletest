#FROM ubuntu:14.04
FROM debian:jessie
MAINTAINER Nate Fox nfox@corpinfo.com

RUN apt-get update && apt-get install -y openjdk-7-jre-headless curl
# RUN curl -Ls -o /tmp/elasticsearch-2.1.1.deb https://download.elasticsearch.org/elasticsearch/release/org/elasticsearch/distribution/deb/elasticsearch/2.1.1/elasticsearch-2.1.1.deb && \
#    dpkg -i /tmp/elasticsearch-2.1.1.deb

RUN curl -Ls -o /tmp/elasticsearch-2.1.1.tar.gz https://download.elasticsearch.org/elasticsearch/release/org/elasticsearch/distribution/tar/elasticsearch/2.1.1/elasticsearch-2.1.1.tar.gz
RUN mkdir -p /data/elasticsearch/{data,logs}
RUN tar zxvf /tmp/elasticsearch-2.1.1.tar.gz -C /data/elasticsearch --strip 1
RUN echo "path.data: /data/elasticsearch/data" >> /data/elasticsearch/config/elasticsearch.yml
RUN echo "path.logs: /data/elasticsearch/logs" >> /data/elasticsearch/config/elasticsearch.yml
RUN echo "http.cors.enabled: true" >> /data/elasticsearch/config/elasticsearch.yml
RUN echo "network.host: 0.0.0.0" >> /data/elasticsearch/config/elasticsearch.yml
RUN useradd elasticsearch
RUN chown elasticsearch:elasticsearch /data/elasticsearch/ -R
EXPOSE 9200

USER elasticsearch
CMD ["/data/elasticsearch/bin/elasticsearch"]
