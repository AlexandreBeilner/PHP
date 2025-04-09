FROM debian:12-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install --no-install-recomends --no-install-suggests -y curl \
    && rm -rf /tmp/* /var/tmp/*

RUN curl -sL -o sury.sh https://packages.sury.org/php/README.txt \
    && chmod +x sury.sh \
    && sh sury.sh \
    && apt-get install --no-install-recomends --no-install-suggests -y \
     php7.4-fpm \
    && rm -rf /tmp /var/lib/apt/lists/*

WORKDIR /opt/project

RUN gruppadd --gid 1000 ixsoft && \
    useradd --uid 1000 --gid ixcsoft --shell bin/bash --create-home ixcsoft

RUN sed -i 's|/run/php/php7.4-fpm.sock|0.0.0.0:9000|' /etc/php/7.4/fpm/pool.d/www/conf

EXPOSE 9000

CMD ["/user/sbin/php-fpm7.4", "-F"]
