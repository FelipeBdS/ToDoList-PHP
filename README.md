# To-Do List PHP

Este é um simples aplicativo To-Do List desenvolvido em HTML, CSS, jQuery e PHP com PDO para PostgreSQL. O projeto utiliza o Composer para gerenciar as dependências.

## Pré-requisitos

- [PHP](https://www.php.net/) instalado na máquina.
- [Composer](https://getcomposer.org/) instalado.
- [PostgreSQL](https://www.postgresql.org/) instalado.
- [pgAdmin](https://www.pgadmin.org/) instalado para gerenciamento do banco de dados.

## Configuração do Ambiente

1. Clone o repositório:

    ```bash
    git clone https://github.com/SeuNome/ToDoList-PHP.git
    ```

2. Instale as dependências do Composer:

    ```bash
    composer install
    ```

3. Crie um banco de dados PostgreSQL usando o pgAdmin.
    - O banco de dados contém apenas 1 tabela chamada 'task', com as colunas 'id', 'description' e 'completed'.

4. Configure as variáveis de ambiente:

    - Copie o arquivo `.env.example` para um novo arquivo chamado `.env`.
    - Abra o arquivo `.env` e configure as variáveis relacionadas ao banco de dados.


## Uso

1. Inicie o servidor PHP embutido:

    ```bash
    php -S localhost:5000 
    ```

    O comando `php -S localhost:5000` inicia um servidor embutido na porta 5000.

2. Acesse o aplicativo no seu navegador: [http://localhost:5000](http://localhost:5000)

3. Utilize o pgAdmin para gerenciar e visualizar as tarefas armazenadas no banco de dados.

## Funcionalidades

- Criar nova tarefa.
- Atualizar uma tarefa existente.
- Excluir uma tarefa.
- Visualizar lista de tarefas.

## PDOs necessários

Certifique-se de que as seguintes extensões PDO do PHP estejam habilitadas no seu ambiente:

- `pdo_pgsql`: Para suporte ao PostgreSQL.

## Contribuição

Sinta-se à vontade para contribuir, reportar problemas ou sugerir melhorias.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).
