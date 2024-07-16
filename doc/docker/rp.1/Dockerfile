FROM ubuntu:24.04

ENV DEBIAN_FRONTEND=noninteractive

##nginx & php
RUN apt-get update && apt-get -y install \
	#composer \
	#curl \
	php8.3 php8.3-fpm php8.3-cli \
	php8.3-mysql mysql-client \
	php8.3-bcmath php8.3-curl php8.3-gd php8.3-mbstring php8.3-zip php8.3-xml \
	php8.3-redis \
	nginx logrotate \
  # php8.3-dev php-pear \
	&& apt-get clean

RUN rm /etc/nginx/sites-available/default
ADD default /etc/nginx/sites-available/default
# ADD default.ssl /etc/nginx/sites-available/default

##timezone KST
WORKDIR /etc/php/8.3/fpm
RUN sed -i "s/;date.timezone =/date.timezone = Asia\/Seoul/g" php.ini

##upload size
WORKDIR /etc/php/8.3/fpm
RUN sed -i "s/upload_max_filesize = 2M/upload_max_filesize = 11M/g" php.ini
RUN sed -i "s/post_max_size = 8M/post_max_size = 60M/g" php.ini
RUN sed -i "s/max_execution_time = 30/max_execution_time = 300/g" php.ini

## nginx: GET url length limit: upstream sent too big header while reading
WORKDIR /etc/nginx
RUN sed -i "/^http {/a fastcgi_buffers 16 16k;" nginx.conf
RUN sed -i "/^fastcgi_buffers 16 16k;/a fastcgi_buffer_size 32k;" nginx.conf

CMD ["/bin/bash", "-c", "/usr/sbin/service php8.3-fpm start && nginx -g 'daemon off;'"]

EXPOSE 80
# EXPOSE 443


# d build -t test/rp:1 doc/docker/rp.1
