FROM httpd:latest
RUN apt update; \
    apt upgrade;

# Copy apache vhost file to proxy php requests to php-fpm container
COPY site.conf /usr/local/apache2/conf/site.conf
RUN echo "Include /usr/local/apache2/conf/site.conf" \
    >> /usr/local/apache2/conf/httpd.conf

RUN mkdir /var/logs