## Teste do processo seletivo

- Nome: Wanderson Santos
- E-mail: wanderson.santos01@gmail.com

## Pré-requisitos

- Docker 19+
- Google Chrome 85+

## Preparando ambiente

1- Após baixar o projeto no repositório do GitHub, acessar a pasta e executar o comando:
```shell script
$ docker-compose up -d
```

4- Será necessário executar a migration das tabelas, para isso, execute o comando:
```shell script
$ docker exec -it boa_vista_laravel01_1 php artisan make:migration create_pessoas_table
```

3- Após iniciar os containers (Laravel e MySQL), basta acessar a página http://localhost:8080

#### Acesso ao Banco de Dados

O acesso ao banco de dados pode ser feito através de qualquer ferramenta (Workbench, HeidiSQL, PHPMyAdmin, etc)

Abaixo os dados de autenticação:
- Host: host.docker.internal
- Porta: 3306
- Usuário: root
- Senha: password