# PAGAR.ME - Laravel

Este pacote é uma integração da API do pagar.me com o Laravel.

## Instalação

Adicione os seguintes trechos no composer.json

```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Dougwan/pagarme-laravel.git"
        }
]
```

```json
"dougwn/pagarme-laravel": "<version>"
```

Após atualizar o composer.json rode:

```php
composer install
```

Publique o arquivo de configuração global com o comando:

```bash
php artisan vendor:publish --tag="pagarme-config"
```

## Como usar

Adicione o import no local onde deseja utilizar o pacote.

```php
use Pagarme;
```

## Endpoints

Consulte as funções disponíveis para interagir com a API do pagar.me.

- [Customer](docs/CUSTOMER.md)

- [Charge](docs/CHARGE.md)

- [Order](docs/ORDER.md)

- [Recipients](docs/RECIPIENTS.md)

- [Subscription](docs/SUBSCRIPTION.md)

## Credits

-   [Keepcloud](https://github.com/Keepcloud)

## License

Licença MIT (MIT). Por favor, consulte o [Arquivo de Licença](LICENSE.md) para mais informações.
