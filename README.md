
# CRUD Contatos

Inicializando CRUD sem um banco de dados, para conhecimento básico. 


## Instalação

Instale PHP e VS Code

```bash
  abra o projeto
  New Terminal
  php -S localhost:8000
```
    
## FAQ

#### O que é CRUD?

O CRUD vem do inglês, das palavras (Create, Read, Update, Delete) que quer dizer basicamente as 4 (quatro) principais operações com um banco de dados(inserir, ler, atualizar, excluir).

Quando pensamos em qualquer website dinâmico ou sistemas em gerais, a primeira coisa que vem na nossa cabeça é o CRUD, sem ele nada funciona, pois é com ele que realizamos as interações com o banco de dados.

#### Para que serve um banco de dados e quais os tipos de bancos de dados que posso utilizar com PHP?

Em aplicações web, várias vezes precisamos salvar informações para serem utilizadas posteriormente, vemos isso claramente quando precisamos acessar uma página e nos deparamos com um formulário de login e senha: esses dados já foram posteriormente cadastrados e agora a página precisa checar se realmente os dados batem com os cadastrados. Para implementarmos esse cenário não é suficiente trabalhar com sessões, pois ela só salva os dados enquanto a aplicação não é fechada, dessa forma, na próxima vez que formos acessar uma página essas informações não estarão mais lá; também não é possível fazer isso com cookies, pois a qualquer momento o usuário poderá fazer uma limpeza dos mesmos salvos no navegador e os dados serão perdidos. Para resolver esse problema devemos utilizar um banco de dados.

Podemos manipular diversos tipos de banco de dados com PHP, dentre eles o MySQL, SQL Server, Firebird/Interbase, Oracle, PostgreSQL, SQLite e ODBC.



