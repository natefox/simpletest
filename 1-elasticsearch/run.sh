#!/bin/bash

docker rm -f es
time docker run -d -p 9200:9200 --name es natefoxcorpinfo/elasticsearch
