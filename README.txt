____CREDITOS:____________________________________________________________________
https://www.linkedin.com/in/lucas-oliveira-963260249/
https://github.com/LucasPerolive


____LINK DE DOWNLOAD DO DOCKER:__________________________________________________
link para baixar o .exe do docker no windows.
https://docs.docker.com/desktop/install/windows-install/



___COMANDOS DE NAVEGACAO WIN:___
# Use estes comandos para chegar no diretorio desejado onde esta o site e dockerfile

dir - lista conteudo do diretorio
cd - entra no diretorio
cd .. - volta para o diretorio acima


____CODIGO DO "Dockerfile"(aquivo que ira gerar a imagem):_______________________
# Escolhe imagem de referencia do  dockerhub - Neste caso eh o debian na ultima versao;
FROM debian:latest

# Comandos que serao executos na inicializacao do container;
# Atualiza o DEBIAN, instala o apache 2, php e o editor de texto nano;
RUN apt-get update -y
RUN apt-get install -y apache2 php
RUN apt-get install -y nano

# Arquivos de copia;
COPY apache-conf /etc/apache2/apache2.conf
COPY pagina /var/www/html 
# Expose Apache - Faz com que a porta do container possa ser acessivel;
EXPOSE 80

# Faz com que o container nao seja excluido quando voce sair dele;
# O CMD define o comando padrao que irá ser executado toda vez que iniciar o container quaso nao seja definido o parametro do "ENTRYPOINT";
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]



____TUTORIAL:_____________________________________________________________________

#1 - Instale o docker normalmente no pc;

#2 - Abra o cmd e digite o seguinte comando: 
>wsl install

#3 - Substitua o conteudo na pasta pagina do projeto, caso nao substitua ira ter uma caculadora na pagina web;

#4 - Ainda no cmd digite o seguinte comando:
>docker run hello-world
#A saída deve ser: "Hello from Docker";

#5 - Hora de criar sua imagem, iremos usar a versão mais recente do DEBIAN. Para criar a imagem digite o seguinte comando:
> docker build -t <nomedaimagem>:<versao> <diretorio>
#Caso voce esteja no diretorio da imagem coloque um ponto (.) no lugar do diretorio ou o caminho absoluto, o nome da imagem fica a sua escolha;
#EX: "  > docker build -t lucas/docker-webserver:1.0 .  "

#6 - Crie um container apartir da imagem e configure a porta local:
> docker container run --name <nomedocontainer> -d -it -p 8080:80 <nomedaimagem>:<versao>
# "<nomedocontiner>" voce pode colocar o que desejar;
#"-d" faz com que o container pare apenas quando desejar;
#"-it" para usar o modo interativo;
#"-p" configura a porta;

#7 - entre no browser de sua preferencia e digite na URL:
localhost:8080

#8 Exclua seu container:
> docker ps -a
# Para listar todos os containers, pegue o ID do container desejado;
> docker rm <ID> --force





