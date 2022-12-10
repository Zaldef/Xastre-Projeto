# Projeto final PI:WEB

Seguindo as orientações, desenvolvemos um controle escolar em laravel para a Rede de Ensino Xasteriana REX(Nome ficticio).

## 🌐 Base de estudos 📚

- Orientações de aula
- https://www.youtube.com/playlist?list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG
- https://www.youtube.com/playlist?list=PLcoYAcR89n-reidRFA3XCIvQPeKFt4dQU

## ⚒ Funcionalidades do projeto 🛠

- `Sistema de Login & Permissions`
- `CRUD de alunos/professores/cursos`

## Passo a passo

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

Gerar a key do projeto Laravel

```sh
php artisan key:generate
```

Subir migrations + seeds

```sh
php artisan migrate --seed
```

Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

## Autores

| [`<img src="https://avatars.githubusercontent.com/u/78030935?v=4" width=115><br>``<sub>`Zaldef`</sub>`](https://github.com/Zaldef) | [`<img src="https://avatars.githubusercontent.com/u/111884977?v=4" width=115><br>``<sub>`leticiamaiza`</sub>`](https://github.com/leticiamaiza) |
| :-----------------------------------------------------------------------------------------------------------------------------------: | :------------------------------------------------------------------------------------------------------------------------------------------------: |
