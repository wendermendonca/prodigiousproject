Projeto desenvolvido com o uso do framework Laravel e o XAMPP (para testes em servidor local). Com a finalidade de melhorar a aparência do projeto, o Bootstrap também foi utilizado.

 Passo 1) Instalar o XAMPP
 Passo 2) Certifique-se de que a base de dados 'homestead' exista, acessando http:/localhost/phpmyadmin. Caso não exista, crie-a.
 Passo 3) Acesse seu 'Prompt de Comando' e vá até a pasta do seu projeto. Exemplo: cd c:/xampp/htdocs/prodigiousproject
 Passo 4) Execute o comando 'php artisan migrate' sem as aspas, para que as tabelas necessárias sejam inseridas ao Banco de Dados.
 Passo 5) Execute o comando 'php artisan serve' sem as aspas, que torna o projeto visível pelo browser.
 Passo 6) Minimize seu prompt de comando (não feche).
 Passo 7) Acesse http://localhost:8000 para ver o projeto em funcionamento.

 Esse projeto contém 2 funções básicas:
 1 - Cadastro de Usuário 
    - Exige o preenchimeto dos 3 campos existentes no formulário (Nome, Email e Foto)
    - Previne duplicidades nos campos Nome e Email
    - Quando ao campo Foto, as extensões jpeg,png,jpg são permitidas.
        - Antes do upload, o sistema nomeia a foto usando a hora atual transformada para segundos
        - Os upload ficam armazenados em public/images/
    - Mensagens de erro e sucesso podem ser vistas durante o cadastro também.
 2 - Listar Usuários - Adicionalmente ao que foi solicitado, facilita a visualização dos registros criados na seção 1, exibindo os 3 campos (Nome, Email e Foto).
 
 
 Informações Técnicas:
 1) 1 route web.php foi utilizado (routes/web.php)
 2) 1 controlador foi utilizado (app/Http/Controller/Usuarios.php)
 3) 1 migration foi criada para a criação da tabela 'users' (database/migrations/, create_user_table)
 4) 2 views foram utilizadas e se encontram em resources/views/usuarios/
