# Escolhe imagem de referencia do  dockerhub - Neste caso eh o debian na ultima versao
FROM debian:latest

# Comandos que serao executos na inicializacao do container
RUN apt-get update -y
RUN apt-get install -y apache2 php
RUN apt-get install -y nano

# Arquivos de copia
COPY apache-conf /etc/apache2/apache2.conf
COPY pagina /var/www/html 
# Expose Apache - Faz com que a porta do container possa ser acessivel
EXPOSE 80

# Faz com que o container nao seja excluido quando voce sair dele
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]
