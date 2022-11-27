
# Projeto final PI:WEB 
Seguindo as orientações, desenvolvemos um controle escolar em laravel, o projeto está incompleto pois um dos integrantes deste grupo não cumpriu com o as obrigações e acabou sendo removido, como foi de ultima hora, não houve tempo para a conclusão deste site.
    
## :hammer: Funcionalidades do projeto :wrench:
- `Sistema de Login & Permissions` incompleto
- `CRUD de alunos/professores/cursos` incompleto



### Passo a passo
Baixe a ultima release, entre na pasta e execute os comandos abaixo:

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=REX
APP_URL=http://localhost:8080

DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```


Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```

Instalar dependecias (Sistema de login)
```sh
composer require laravel/ui
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```
Subir migrations
```sh
php artisan migrate
```



Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

=======
## Autores
| [<img src="https://avatars.githubusercontent.com/u/78030935?v=4" width=115><br><sub>Zaldef</sub>](https://github.com/Zaldef) |  [<img src="https://avatars.githubusercontent.com/u/111884977?v=4" width=115><br><sub>leticiamaiza</sub>](https://github.com/leticiamaiza) | 
| :---: | :---: |
