# CakePHP Application Skeleton

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Instalação
Baixe o Composerou atualize.composer self-update
Correr.php composer.phar create-project --prefer-dist cakephp/app [app_name]
Se o Composer estiver instalado globalmente, execute

composer create-project --prefer-dist cakephp/app
Caso você queira usar um nome de dir de aplicativo personalizado (por exemplo):/myapp/

composer create-project --prefer-dist cakephp/app myapp
Agora você pode usar o servidor web da sua máquina para exibir a home page padrão ou iniciar até o servidor web embutido com:

bin/cake server -p 8765
Em seguida, visitepara ver a página de boas-vindas.http://localhost:8765

Atualização
Uma vez que este esqueleto é um ponto de partida para o seu aplicativo e vários arquivos teria sido modificado de acordo com suas necessidades, não há uma maneira de fornecer atualizações automatizadas, então você tem que fazer todas as atualizações manualmente.

Configuração
Leia e edite o ambiente específico e configure a e qualquer outra configuração relevante para seu aplicativo. Outras configurações agnósticas do ambiente podem ser alteradas.config/app_local.php'Datasources'config/app.php

Layout
O esqueleto do aplicativo usaMilligram(v1.3) CSS minimalista estrutura por padrão. Você pode, no entanto, substituí-lo por qualquer outra biblioteca ou estilos personalizados.
