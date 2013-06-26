Environnement numérique personnel d'apprentissage INNOVA Langues
======================================================

Requirements : Global composer install or local composer.phar

Install :
---------

- Clone the master branch :


```bash
git clone git@github.com:InnovaLangues/ENA.git
```

- Create app/config/paramaters.yml based on the example parameters.yml.dist

- Do a composer install :

```bash
composer install
```

- Set symfony cache permissions : http://symfony.com/doc/2.2/book/installation.html


- Fixtures command :
```bash
php app/console innova:dev-fixtures:load
```

Additional credits :
--------------------
