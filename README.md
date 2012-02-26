Foo H-art
========================

Foo H-art è un sistema di appunti condivisi tra Utenti.
Nei primi anni 2000 sarebbe stato un Forum, qualche anno fa un Blog oppure un Wiki.
Oggi Foo H-art è un repository di conoscenza ed esperienze,
con contenuti creati degli utenti. Mentre il sistema si arricchisce di contenuti
gli utenti ne decretano la qualità fornendo feedback, rating, commenti.

Il motore sviluppato in [Symfony2](http://symfony.com/) è
disponibile tramite [repo GitHub](https://github.com/roberto-butti/foo_hart).

Come partire
-------------
Una volta scaricati i sorgenti, occorre recuperare i moduli necessari per Symfony 2:

    $ php bin/vendors install
    $ find vendor -name .git -type d | xargs rm -rf 

Quindi occorre pubblicare gli assets distribuiti con i Bundle:

    $ php app/console  assets:install web

Ripulire la cache:

    $ php app/console cache:clear --env=prod --no-debug
    $ php app/console cache:clear --env=prod
    $ php app/console cache:clear


Risorse utili
---------------

* **Symfony2** - [The core Symfony framework bundle](http://symfony.com/)
* **Symfony Blog Tutorial** - http://tutorial.symblog.co.uk/


