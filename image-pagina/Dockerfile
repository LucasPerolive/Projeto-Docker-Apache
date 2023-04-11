# Escolhe imagem de referencia do  dockerhub - Neste caso eh o debian na ultima versao;
FROM debian:latest

# Comandos que serao executos na inicializacao do container;
# Atualiza o DEBIAN, instala o apache 2, php, editor de texto nano, e o comado systemctl;
# Renicia o apache2;
RUN apt-get update -y
RUN apt-get install -y apache2 php
RUN apt-get install -y nano
RUN apt-get -y install systemctl
RUN systemctl stop apache2
RUN systemctl start apache2

# Arquivos de copia e remove o html padrao;
COPY apache-conf /etc/apache2/apache2.conf
COPY pagina /var/www/html
RUN rm /var/www/html/index.html

# Expose Apache - Faz com que a porta do container possa ser acessivel;
EXPOSE 80

# Faz com que o container nao seja excluido quando voce sair dele;
# O CMD define o comando padrao que irá ser executado toda vez que iniciar o container quaso nao seja definido o parametro do "ENTRYPOINT";
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]
