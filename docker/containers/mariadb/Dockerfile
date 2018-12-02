FROM mariadb:10.2

ENV MYSQL_ROOT_PASSWORD fileService
ENV MYSQL_DATABASE fileService
ENV MYSQL_USER fileService
ENV MYSQL_PASSWORD fileService
ENV MYSQL_ROOT_HOST "%"

COPY ./docker/containers/mariadb/local.cnf /etc/mysql/conf.d/local.cnf
RUN chmod 644 /etc/mysql/conf.d/local.cnf
