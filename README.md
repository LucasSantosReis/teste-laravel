# Projeto de Busca de Produtos

Este projeto é uma aplicação de exemplo para busca de produtos com filtros utilizando Laravel Livewire. 

## Configuração

1. Clone o repositório.
2. Execute `docker-compose up -d` para iniciar os containers.
3. Execute `docker-compose exec app composer install` para instalar as dependências.
4. Execute `docker-compose exec app php artisan migrate --seed` para criar e popular o banco de dados.

## Execução do Projeto

Para iniciar o servidor, acesse `http://localhost:8000` no navegador.

## Rodando Testes

Para executar os testes, use o comando `php artisan test`.

## Uso

Na interface da aplicação, você pode buscar produtos pelo nome e aplicar filtros por marcas e categorias.
