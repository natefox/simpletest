#!/bin/bash

docker rm -f es > /dev/null 2>&1
time docker run -d -p 9200:9200 --name es natefoxcorpinfo/elasticsearch
