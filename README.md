# Super Hyper Mega Blaster Simple Micro Framework

Ou SuHyMeBlaS Micro Framework para os mais próximos.

## O que é?

O SuHyMeBlas é práticamente nada, ele serve para pequenos projetos, com poucas páginas ou que navegação não seja uma feature tão importante.

Ele é composto com 3 classes e 4 arquivos (incluindo um com HTML) que juntos não somam nem 150 linhas (eu contei 142, porque é tão pequeno que da, literalmente, pra contar uma por uma).

## Como usar

Baixe/clone esse template ou use o Composer:

```
composer create-project --prefer-dist erikfig/suhymeblas
```

 - Crie suas rotas dentro do arquivo `routes.php`
 - Os arquivos de template ficam dentro de `templates` e devem terminar com `.tpl.php`
 - Veja um exemplo nos arquivos `routes.php` e `templates/home.tpl.php`

Para rodar com PHP Built In Server:

```
php -S localhost:8080 -t public
```

Para outros servidores web, aponte o `document root` para o diretório public e configure URLs amigáveis.

## Collection

O pacote vem com um trait com uma implementação simples de ArrayAccess, é só adicionar a interface e o trait em uma classe:

```
// classe
<?php

namespace SuHyMeBlaS;

use SuHyMeBlaS\Collection;

class Router implements \ArrayAccess
{
    use Collection;

    public function handler()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        if (strlen($path) > 1) {
            $path = rtrim($path, '/');
        }

        if ($this->offsetExists($path)) {
            $handler = $this->offsetGet($path);
            return $handler();
        }

        http_response_code(404);
        echo 'Página inexistente';
        exit;
    }
}

// uso da classe

$router = new SuHyMeBlaS\Router;

$router['/'] = function() {
    return View::render('home');
};

$result = $router->handler();

```

E agora suas clesses também podem funcionar com uma sintaxe parecida com array.

## Como contribuir

Se é que algo tão pequeno precisa de contribuição, de qualquer forma serei eternamente grato, basta enviar seu Pull Request.
