# CREDITOS:
> https://www.linkedin.com/in/lucas-oliveira-963260249/ <br>
> https://github.com/LucasPerolive


# LINK DE DOWNLOAD DO DOCKER:
## link para baixar o .exe do docker no windows.
> https://docs.docker.com/desktop/install/windows-install/



# COMANDOS DE NAVEGACAO WIN:
## Use estes comandos para chegar no diretorio desejado onde esta o site e dockerfile
```
dir - lista conteudo do diretorio
cd - entra no diretorio
cd .. - volta para o diretorio acima
```


# CODIGO DO "Dockerfile"(aquivo que ira gerar a imagem):
<hr>

```
# Escolhe imagem de referencia do  dockerhub - Neste caso eh o debian na ultima versao;
FROM debian:latest

# Comandos que serao executos na inicializacao do container;
# Atualiza o DEBIAN, instala o apache 2, php, editor de texto nano, e o comado systemctl;
# Renicia o apache2
RUN apt-get update -y
RUN apt-get install -y apache2 php
RUN apt-get install -y nano
RUN apt-get -y install systemctl
RUN systemctl stop apache2
RUN systemctl start apache2

# Arquivos de copia e remocao do html padrao;
COPY apache-conf /etc/apache2/apache2.conf
COPY pagina /var/www/html
RUN rm /var/www/html/index.html

# Expose Apache - Faz com que a porta do container possa ser acessivel;
EXPOSE 80

# Faz com que o container nao seja excluido quando voce sair dele;
# O CMD define o comando padrao que irá ser executado toda vez que iniciar o container quaso nao seja definido o parametro do "ENTRYPOINT";
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]
```

# TUTORIAL:

##1 - Instale o docker normalmente no pc;
#### --- CRIE UMA CONTA NO DOCKERHUB E FAÇA LOGIN --- 

##2 - Abra o <b>cmd</b> e digite o seguinte comando: 
```
wsl install
```

##3 - Substitua o conteudo na pasta pagina do projeto, caso nao substitua ira ter uma caculadora na pagina web;

##4 - Ainda no cmd digite o seguinte comando:
```
docker run hello-world
```
>A saída deve ser: "Hello from Docker";

##5 - Hora de criar sua imagem, iremos usar a versao mais recente do DEBIAN. Para criar a imagem digite o seguinte comando:
```
docker build -t <nomedousuariododockerhub>/<nomedaimagem>:<versao> <diretorio>
```
>Caso voce esteja no diretorio da imagem coloque um ponto (.) no lugar do diretorio ou o caminho absoluto, o nome da imagem fica a sua escolha;
##EX: 
```
docker build -t lucasperolive/calculadora:1.1 .
```

##6 - Faça upload da usa imagem para sua conta do DockerHub:
```
docker push <nomedousuariododockerhub>/<nomedaimagem>:<versao>
```

##EX:
```
docker push lucasperolive/calculadora:1.1
```

##7 - Crie/Modifique o compose.yml:
> Mude o que esta entre os "<>", de acordo com as estapas anteriores;

<hr>
##EX:

```
# Versão do compose
version: "<versao>"
services:
  calculadora:
    # Imagem que foi feita o push
    image: <nomedousuariododockerhub>/<nomedaimagem>:<versao>
    container_name: <nomedocontainer>
    # Porta para acesso
    ports:
      - "<portadeacesso>:<portadoprotocolo>"
```

<hr>

##8 - Use o compose.yml para criar os containers:
> Use esse comando no diretorio em que esta o compose;
```
docker compose up -d
```

##9 - Entre no browser de sua preferencia e digite na URL:
```
localhost:8080
```
##10 - Abortar o docker compose:
```
docker compose down
```
> Faz com que os conteiner parem e seja excluidos.
