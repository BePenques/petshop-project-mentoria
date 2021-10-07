Seja bem-vindo! Este desafio foi projetado para avaliar a sua capacidade técnica como candidato à vaga de Desenvolvedor.

Instruções
- Crie o projeto e coloque esse texto como README
- Criar uma API REST
- Após finalizar, envie o código em meu e-mail: rafaelnerisdj@gmail.com
Você deverá desenvolver um projeto utilizando PHP, com a finalidade de que seja possível listar, visualizar, criar, editar e excluir animais de estimação de uma petshop.

Observações:
- Você pode utilizar a estratégia que considerar pertinente para armazenar os registros de sua aplicação;
- Cada animal de estimação precisa ter um identificador único, nome, idade, se é gato ou cachorro e sua respectiva raça; Além do nome e telefone para contato de seu dono.
- Esses dados deverāo ser recebidos via requisiçāo e inseridos no banco de dados
- Neste momento, nāo é necessário autenticaçāo.
- Deverá ser possível listar, visualizar, criar, editar e excluir animais de estimação de uma petshop.


Qualquer dúvida fico a disposiçāo.

<hr>

## Instalação

Inicie um terminal (CMD, prompt de comando) na pasta do projeto e execute o seguinte comando:
> composer install


## Configuração

Renomeie o arquivo **.env.example** para apenas **.env**

Altere o conteúdo do arquivo **.env**, atualizando as informações de conexão, conforme exemplo:

    ...
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=NOME_DO_BANCO
    DB_USERNAME=USUARIO_DO_BANCO
    DB_PASSWORD=SENHA_DO_BANCO
    ...

Crie o banco de dados definido no endereço acima.

Com o SGBD no ar, pelo terminal, na pasta do projeto:

- Execute **php artisan key:generate** - para dicionar uma hash de segurança no arquivo .env

- Execute **php artisan migrate** - para efetivar as migrações (cria as tabelas no banco)
    
## Iniciar a aplicação

Para iniciar a aplicação, execute o comando: **php artisan serve** pelo terminal, na pasta do projeto.

A aplicação estará disponível no endereço indicado (por padrão, o endereço http://127.0.0.1:8000 é utilizado).
