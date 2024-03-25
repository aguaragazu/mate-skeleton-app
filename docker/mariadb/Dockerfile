FROM arm64v8/mariadb:10.11.2

RUN apt-get install ca-certificates

COPY mariadb.conf /etc/mysql/conf.d/my.cnf

ENV MYSQL_ROOT_PASSWORD root

EXPOSE 3306