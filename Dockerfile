FROM ubuntu
ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install php php-sqlite3 apache2 net-tools -y

RUN rm -rf /var/www/*
COPY . /var/www/
RUN mv /var/www/public /var/www/html
RUN chown www-data:www-data -R /var/www/

RUN a2ensite default-ssl
RUN a2enmod ssl
RUN a2enmod rewrite
RUN printf "<Directory /var/www/>\n AllowOverride all\n</Directory>\n" >> /etc/apache2/apache2.conf
RUN echo 'ifconfig | grep "inet"| cut -d " " -f  10| grep -v "127.0.0.1";apachectl start && tail -f /var/log/apache2/access.log' > /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT /entrypoint.sh
