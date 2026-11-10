# Veille Technologique: Symfony

Technology watch on **Symfony**, the PHP framework for web apps and APIs.

## Overview
Symfony is a set of decoupled PHP components plus a full-stack framework,
built around the **Request → Response** cycle. It has LTS releases and is
reused by Laravel, Drupal and Composer.

## Core features
| Feature | What it does |
|---|---|
| **Service Container** | Dependency injection and autowiring: classes declare needs in the constructor, Symfony provides them |
| **Routing** | Maps URL + HTTP method to a controller, via PHP attributes |
| **Doctrine ORM** | Maps PHP objects to DB tables, with migrations |
| **Twig** | Secure templating: inheritance, auto-escaping |

## Structure
```
veille-symfony/
├── Presentation/
│   └── presentation.md     # Marp slides
├── showcase_example/       # Symfony demo
├── veille-list.md          # Watch sources
└── README.md
```

## Run the demo
```bash
cd showcase_example
composer install
symfony serve
```
Open http://127.0.0.1:8000/hello/Symfony

## Present the slides
```bash
npx @marp-team/marp-cli Presentation/presentation.md --pdf
```
Or use the **Marp for VS Code** extension.

