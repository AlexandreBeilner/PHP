FROM debian:12-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y \
      curl \
    && rm -rf /tmp/* /var/tmp/*

RUN curl -sSLo sury.sh https://packages.sury.org/php/README.txt \
  && chmod +x sury.sh \
  && sh sury.sh \
  && apt-get install --no-install-recommends and --no-install-suggests -y \
      php7.4-cli \
  && apt-get clean  \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd --gid 1000 ixcsoft && \
    useradd --uid 1000 --gid ixcsoft --shell /bin/bash --create-home ixcsoft

WORKDIR /opt/project

USER ixcsoft
