FROM debian:12-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install --no-install-recomends --no-install-suggests -y curl \
    && rm -rf /tmp/* /var/tmp/*

RUN curl -sL -o sury.sh https://packages.sury.org/php/README.txt \
    && chmod +x sury.sh \
    && sh sury.sh \
    && apt-get install -y php7.4-cli \
    && rm -rf /tmp /var/lib/apt/lists/*

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

WORKDIR /opt/project

RUN gruppadd --gid 1000 ixsoft && \
    useradd --uid 1000 --gid ixcsoft --shell bin/bash --create-home ixcsoft

USER ixcsoft
