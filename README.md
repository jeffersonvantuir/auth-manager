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

## Customização CSS
 
Para realizar a customização dos estilos css, podemos alterar as cores no arquivo public/jv-auth-variables.css. Abaixo segue uma lista de cores/elementos que podemos modificar.

#### Card login
| Propriedade |Cor padrão|Descrição
|----------------|-------------------------------|-------------------------------|
|`--bg-jv-auth`|`#30607e` |Cor de fundo do card do login|
|`--shadow-color-jv-auth` |`#0000007a` |Cor da sombra do card de login|
|`--border-color-jv-auth` |`#40e9df` |Cor da borda dos inputs|
|`--text-color-jv-auth` |`#40e9df` |Cor do label dos inputs|
|`--text-color-jv-auth-btn-submit` |`#30607e` |Cor do texto do botão de enviar|

## Configurações do ambiente
É possível realizar algumas customizações alterando variáveis de ambiente definidas no arquivo `jv-auth-config.php`.

| Propriedade |Cor padrão|Descrição
|----------------|-------------------------------|-------------------------------|
|`JV_AUTH_LOGIN_LOGO_PATH`|`jeffersonvantuir/auth-manager/images/login-logo.png` |Logo da tela de login|
|`JV_AUTH_LOGIN_BACKGROUND_PATH` |`jeffersonvantuir/auth-manager/images/background-login.png` |Imagem de fundo da tela de login|
|`JV_AUTH_SUCCESS_LOGIN_REDIRECT` |`home` |Alias da rota pós autenticar|
|`JV_AUTH_LOGOUT_REDIRECT` |`/` |Path da rota redirecionada pós logout|
|`JV_AUTH_LOGIN_ROUTE` |`/entrar` |Path para rota de login|
|`JV_AUTH_ALLOW_EXTERNAL_REGISTER_ROUTE` |`true` |Define se permite realizar cadastro externo (na tela de login)|
|`JV_AUTH_REGISTER_ROUTE` |`/cadastro` |Path da rota de cadastro externo|