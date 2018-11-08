# Bots para Telegram com PHP

## O que vamos aprender

Nesta aula ao vivo vamos aprender como criar bots para o Telegram utilizando o BotFather, PHP Orientado a Objetos, Ngrok e debug com XDebug no Visual Studio Code

## Quais são os principais tópicos dessa aula?

- Criando bot com BotFather
- O que é possível fazer (apresentando a documentação)
- Criando o projeto
- Túnel de conexão com Ngrok
- Debug com XDebug e Visual Studio Code

## Onde os arquivos desenvolvidos em aula ficarão disponíveis

Aqui neste repositório mesmo, só voltar aqui após o fim da aula

## O que eu preciso para acompanhar?

- PHP Configurado nas variáveis de ambiente do seu sistema operacional

Isso pode ser um pouco diferente de ser reproduzido em cada sistema operacional, então você precisa descobrir como fazer no seu, para saber se você precisa ou já tem rode o comando em QUALQUER diretório utilizando um cliente de linha de comando (Terminal, CMD, GitBash...): `php -v`, se retornar a versão do PHP então está tudo certo. Caso contrário, pesquise por: `como configurar o php nas variáveis de ambiente no {coloque aqui seu sistema operacional com versão}`.

- PHP 7.0 ou mais atual

Não faz sentido usar uma versão mais antiga do PHP nos dias de hoje, mas vou informar quando uma feature não for suportada no PHP 5.6.

- Composer

Se não usa o Composer você só está perdendo, [aqui tem a página oficial](https://getcomposer.org/download/), faça a instalação da versão global, quuero dizer, que pode ser acessada em qualquer diretório (tem até um instalador para o Windows e algumas linhas para Linux e Mac).

## Para ir adiantando

Vamos usar um esqueleto de aplicação para web bem simples, nem vale ser chamado de framework de tão simples que é, apenas rode este comando para gerar o esqueleto do seu bot:

```
composer create-project --prefer-dist erikfig/suhymeblas
```

Para saber mais sobre esse esqueleto de aplicação: [https://github.com/erikfig/suhymeblas](https://github.com/erikfig/suhymeblas)

Logo após terminar o processo, acesse o novo diretório criado e adicione o Guzzle:

```
composer require guzzlehttp/guzzle
```

Rode o seguinte comando para iniciar o servidor web:

```
php -S localhost:8080 -t public
```
