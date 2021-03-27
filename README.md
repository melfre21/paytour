# Paytout Test

Projeto prático de desenvolvimento de uma aplicação teste para vaga de FullStack.

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP-Laravel-(8)](https://laravel.com/)
- [Mysql](https://www.mysql.com/)
- [Bootstrap v4*](https://getbootstrap.com/)
- [CSS](https://www.w3schools.com/css/)
- [HTML](https://www.w3schools.com/html/)


## Instalação do Projeto


Foi utilizado a versão mais recente do framework Laravel e o projeto pode ser inicializado da seguinte forma:

1 - Na pasta raiz do projeto digite:
```
composer install
```
2 - Crie DB Mysql com o nome de sua preferência e configure ou crie um arquivo .ENV na raiz do projeto, um exemplo pode ser encontrado nesse mesmo local, substitua os itens abaixo:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=usuario
DB_PASSWORD=senha
```
3 - Com o banco de dados criado rode as migrations e seed com o comando abaixo:
```
php artisan migrate --seed
``` 
- Logo em seguida já podera iniciar o projeto, veja o comando:
```
php artisan serve
``` 


## Funcionalidades
- Tela Inicial.
![Home](https://paytour.afrenti.com.br/public/images/home.png)

- Cadastro Curriculo
![Login e Validações](https://paytour.afrenti.com.br/public/images/cadastro_curriculo.png)
![Login e Validações](https://paytour.afrenti.com.br/public/images/cadastro_curriculo_validate.png)

- Modelo de email recebido pelo usuario cadastrado.
![Email](https://paytour.afrenti.com.br/public/images/modelo_email.png)

## Projeto Online
- Projeto pode ser encontrado online no endereço: [Paytour Test](https://paytour.afrenti.com.br/).

## Obs:
Algumas melhorias pode ser colocadas no projeto, como MASK no campo de telefone etc.

## Autor
- Melfre Diego (web developer fullstack)
- (86)99474-9020
- melfre21@gmail.com
