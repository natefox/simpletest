#!/bin/bash

docker rm -f nginx
time docker run -d -p 80:80 --name nginx --link es:elasticsearch natefoxcorpinfo/nginx
