____CREDITOS:____________________________________________________________________
https://www.linkedin.com/in/lucas-oliveira-963260249/
https://github.com/mxmotta/docker-apache-php


____LINK DE DOWNLOAD DO DOCKER:__________________________________________________
link para baixar o .exe do docker no windows.
https://docs.docker.com/desktop/install/windows-install/


____TUTORIAL:_____________________________________________________________________

#1 - Instale o docker normalmente no pc

#2 - Abra o cmd e digite o seguinte comando: 
>wsl install

#3 - Substitua o conteudo na pasta pagina do projeto, caso nao substitua ira ter uma caculadora na pagina web.

#4 - Ainda no cmd digite o seguinte comando:
>docker run hello-world
#A saída deve ser: "Hello from Docker"

#5 - Hora de criar sua imagem, iremos usar a versão mais recente do DEBIAN. Para criar a imagem digite o seguinte comando:
> docker build -t <nomedaimagem>:<versao> <diretorio>
#Caso voce esteja no diretorio da imagem coloque um ponto (.) no lugar do diretorio (nome da imagem fica a sua escolha).
#EX: > docker build -t lucas/docker-webserver:1.0 .

#6 - Criar um container apartir da imagem e configura a porta local:
> docker container run --name <nomedocontainer> -d -it -p 8080:80 <nomedaimagem>:<versao>
# "<nomedocontiner>" voce pode colocar o que desejar
#"-d" faz com que o container pare apenas quando desejar
#"-it" para usar o modo interativo
#"-p" configura a porta

#7 - entre no browser de sua preferencia e digite na URL:
localhost:8080
#caso tenha subtituido o conteudo da pasta coloque o nome de usa pagina web no lugar de "index.html"

#8 Exclua seu container:
> docker ps -a
# Para listar todos os containers, pegue o ID do container desejado
> docker rm <ID> --force

 



