FROM nginx:latest

WORKDIR /usr/share/nginx/html

COPY . .

# FROM ubuntu:18.04  
# LABEL maintainer="contact@devopscube.com" 
# RUN  apt-get -y update && apt-get -y install nginx
# COPY /index.html /usr/share/nginx/html/index.html
# EXPOSE 80
# CMD ["/usr/sbin/nginx", "-g", "daemon off;"]