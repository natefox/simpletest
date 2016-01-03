#!/bin/bash

docker rm -f nginx >/dev/null 2>&1
time docker run -d -p 80:80 --name nginx --link es:elasticsearch natefoxcorpinfo/nginx
