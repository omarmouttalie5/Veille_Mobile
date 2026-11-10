---
marp: true
theme: default
paginate: true
backgroundColor: #0d1117
footer: "Symfony Framework"
color: #e6edf3
style: |
  section {
    font-family: 'Segoe UI', 'Helvetica Neue', sans-serif;
    font-size: 30px;
    padding: 60px 70px;
  }
  h1 { font-size: 2.2em; color: #fff; }
  h2 {
    color: #fff;
    border-left: 8px solid #7c5cff;
    padding-left: 18px;
  }
  strong { color: #4de1c1; }
  a { color: #7c5cff; }
  section::after { color: #6e7681; font-size: 0.6em; }
  pre {
    background: #161b22;
    border: 1px solid #30363d;
    border-radius: 12px;
    padding: 14px;
  }
  code { color: #4de1c1; font-size: 0.8em; }
  table { font-size: 0.8em; margin: auto; }
  th { background: #7c5cff; color: #fff; }
  td { background: #161b22; }
  section.lead {
    background: linear-gradient(135deg, #0d1117 0%, #2a1f6b 100%);
    text-align: center;
    justify-content: center;
  }
  section.lead h1 {
    font-size: 3.2em;
    background: linear-gradient(90deg, #7c5cff, #4de1c1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cols { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
  .card {
    background: #161b22;
    border: 1px solid #30363d;
    border-radius: 14px;
    padding: 14px 22px;
    font-size: 0.85em;
  }
---

<!-- _class: lead -->
<!-- _paginate: false -->

# Symfony
### Veille Technologique · PHP Framework

**Student Name:** Omar Mouttalie
**Supervisor:** ES-SARRAJ Fouad
**Institution:** OFPPT / Solicode

---

## What is Symfony?

- Open-source **PHP framework** + reusable **components**
- Built on the **Request → Response** cycle
- Powers **Laravel, Drupal, Composer** under the hood
- **LTS releases** for long-term production use

---

## Architecture

```
Request → public/index.php → Kernel → Router → Controller
                                          ├─ Services (DI)
                                          ├─ Doctrine (DB)
                                          └─ Twig (View)
          → Response
```

Each block is **decoupled** and replaceable.

---

## Four pillars

<div class="cols">
<div class="card">

**Service Container**
Autowired dependency injection

</div>
<div class="card">

**Routing**
URL → Controller via attributes

</div>
<div class="card">

**Doctrine**
Objects ↔ database tables

</div>
<div class="card">

**Twig**
Secure, inheritable templates

</div>
</div>

---

## Service Container

Type-hint it, Symfony injects it.

```php
class HelloController extends AbstractController
{
    public function __construct(private Greeter $greeter) {}
}
```

✅ Loose coupling  ✅ Testable  ✅ Swappable

---

## Routing

```php
#[Route('/hello/{name}', name: 'hello')]
public function hello(string $name): Response
{
    return $this->render('hello.html.twig', ['name' => $name]);
}
```

Inspect: `php bin/console debug:router`

---

## Doctrine & Twig

<div class="cols">
<div>

```php
#[ORM\Entity]
class Article {
  #[ORM\Column]
  private string $title;
}
```

</div>
<div>

```twig
{% extends 'base.html.twig' %}
{% block body %}
  <h1>{{ name }}</h1>
{% endblock %}
```

</div>
</div>

---

## Benefits vs. trade-offs

| Strengths | Limits |
|---|---|
| Robust, scalable architecture | Steeper learning curve |
| Excellent documentation | More boilerplate |
| Modular (Flex + recipes) | Overkill for tiny projects |
| Highly testable | |

---

## Demo

`/hello/Symfony` → **Twig page**
`/api/hello/Symfony` → **JSON**

One controller · one service · one template

---

<!-- _class: lead -->

# Thank you
### Questions?

symfony.com/doc · symfony.com/releases