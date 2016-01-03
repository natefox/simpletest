#!/bin/bash

docker run -it -p 80:80 --name nginx --link es:elasticsearch natefoxcorpinfo/nginx
