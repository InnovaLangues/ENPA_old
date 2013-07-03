Environnement numérique personnel d'apprentissage (ENPA) INNOVA Langues
=======================================================================

Requirements : Global composer install or local composer.phar

How to install :
----------------

- Clone the master branch :


```bash
git clone git@github.com:InnovaLangues/ENA.git
```

- Create app/config/paramaters.yml based on the example parameters.yml.dist

- Do a composer install :

```bash
composer install
```

- Set Symfony cache permissions : http://symfony.com/doc/2.2/book/installation.html


- Create schema and insert dev fixtures command :

```bash
php app/console innova:dev-fixtures:load
```

- Voilla!
