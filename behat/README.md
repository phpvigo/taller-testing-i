# Behat

## Prerequisitos

- PHP >= 5.3.3
- [Composer](https://getcomposer.org/)

## Instalación

```bash
composer install
```

## Ejecución

```bash
bin/behat
```

## Ayuda

```bash
# Genérica behat
bin/bheat --help

# Ver sintáxis gherkin
bin/behat --lang=es --story-syntax

# Ver pasos definididos (incluídos los de mink)
bin/behat --definitions l

# Sacar informe en html
bin/behat -f html # ahora abre el fichero build/html/behat/index.html
```

Docs:

- [Behat](http://behat.org/en/latest/guides.html)
- [Mink](http://mink.behat.org/en/latest/)
