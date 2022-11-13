# Auth Manager

Pacote laravel utilizado para agilizar o desenvolvimento de inferfaces de autenticação desenvolvidos por jeffersonvantuir.com.br.

Para realizar a instalação, basta executar o comando abaixo:

```bash
composer require jeffersonvantuir/auth-manager
```

Após instalação, precisamos definir o uso do provider na lista dos providers da aplicação em `config/app.php`.

```php
// config/app.php
...
'providers' => [
   ...
   JeffersonVantuir\AuthManager\AuthManagerServiceProvider::class,
]
```

Em seguida, deve-se executar o comando do artisan abaixo para realiar a instalação dos assets na pasta public/jeffersonvantuir.  

```bash 
php artisan vendor:publish --tag=jv-auth --force
```

Isso fará com que todos os assets utilizado pelo pacote, sejam instalados dentro da pasta do projeto public/jeffersonvantuir.

Como dica, é recomendado que a pasta public/jeffersonvantuir seja adicionada no arquivo `.gitignore` do projeto.