<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

---

# Controle de Tarefas - Projeto

Este projeto foi desenvolvido como parte de uma videoaula, com o objetivo de aprender e praticar recursos essenciais do Laravel:

- Sistema de autenticação de usuários
- Envio de e-mails com templates personalizados
- Exportação de dados para PDF, Excel e CSV

O projeto utiliza o framework Laravel e demonstra, na prática, como implementar essas funcionalidades em uma aplicação real.

## Funcionalidades

- Cadastro, login e autenticação de usuários
- Envio de e-mails personalizados
- Exportação de tarefas nos formatos PDF, Excel e CSV

## Tecnologias Utilizadas

- **Laravel**
- **barryvdh/laravel-dompdf** (PDF)
- **maatwebsite/excel** (Excel/CSV)
- **mpdf/mpdf**
- **PHP 8.1+**

## Como Executar

1. Instale as dependências:  
     ```bash
     composer install
     ```
2. Configure o arquivo `.env` com os dados do seu banco de dados e e-mail.
3. Execute as migrations:  
     ```bash
     php artisan migrate
     ```
4. Inicie o servidor:  
     ```bash
     php artisan serve
     ```

## Observações

Este projeto tem fins exclusivamente educacionais, para estudo e prática dos recursos mencionados.

---

## Sobre o Laravel

Laravel é um framework web para PHP com sintaxe expressiva e elegante. Ele facilita tarefas comuns em projetos web, como:

- [Roteamento simples e rápido](https://laravel.com/docs/routing)
- [Container de injeção de dependências poderoso](https://laravel.com/docs/container)
- Suporte a múltiplos back-ends para [sessão](https://laravel.com/docs/session) e [cache](https://laravel.com/docs/cache)
- [ORM intuitivo e expressivo](https://laravel.com/docs/eloquent)
- [Migrações de banco de dados](https://laravel.com/docs/migrations)
- [Processamento de jobs em background](https://laravel.com/docs/queues)
- [Broadcasting de eventos em tempo real](https://laravel.com/docs/broadcasting)

Laravel é acessível, robusto e fornece ferramentas para aplicações de qualquer porte.

## Aprenda Laravel

- [Documentação oficial](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com) — milhares de vídeos sobre Laravel, PHP moderno, testes e JavaScript.

## Contribuindo

Contribuições são bem-vindas! Consulte o [guia de contribuição](https://laravel.com/docs/contributions).

## Código de Conduta

Para garantir um ambiente acolhedor, siga o [Código de Conduta](https://laravel.com/docs/contributions#code-of-conduct).

## Vulnerabilidades de Segurança

Se encontrar uma vulnerabilidade, envie um e-mail para [taylor@laravel.com](mailto:taylor@laravel.com). Todas as vulnerabilidades serão tratadas com prioridade.

## Licença

O Laravel é um software open-source licenciado sob a [MIT license](https://opensource.org/licenses/MIT).

---

<p align="center">
    <sub>
        Projeto desenvolvido para fins de aprendizado.<br>
        &copy; Laravel e colaboradores.
    </sub>
</p>
