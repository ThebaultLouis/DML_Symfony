Lancement du projet:

Prérequis: Avoir Docker et Docker-compose sur sa machine. Ainsi que les droits d'administrateur.

Tutoriel:
(Le tutoriel sera fait avec les commandes UNIX sous Manjaro, vous pourrez très facilement trouver les équivalents à votre système sur internet)

Phase de préparation:
    - Ajouter symfony.localhost à votre fichier /etc/hosts
    $ systemctl start docker

(Optionnel mais garanti un futur bon fonctionnement)
    $ systemctl stop mariadb
    $ systemctl stop httpd

Initialisation:

- Lancer un terminal de commande
$ git clone https://github.com/ThebaultLouis/Symfony.git
$ chmod -R 777 Symfony/DML-Laille-docker
$ cd Symfony/DML-Laille-docker
$ sudo docker-compose up
- Taper symfony.localhost:80 dans votre navigateur

Accès à l'espace administrateur:
- Aller sur symfony.localhost/admin ou cliquer sur admin dans la barre de navigation
Login: admin 
MDP : admin

Enjoy :)

Contexte:
    L'association DML Laillé est une association de plusieurs danses. Et dans ces danses il y a la Country/Line. C'est cette branche que j'ai aidé à diffuser ses informations sur le web.
    
    La première version du site web a été réalisé en Juillet 2018 est un site exclusivement en HTMl/CSS. Tout a été fait à la main (aucun frawework CSS utilisé).
    
    http://dml-laille-35.hebfree.org/
    
    Défauts:
    - Son ergonomie sur les tablettes/téléphones
    - Sa contrainte de devoir rajouter les nouvelles informations à la main (dans le fichier HTML)
    
    La deuxième version du site web a été réalisé en Novembre 2018 est un site utilisant le frawework PHP Symfony 4 et un frawework CSS Bootsrap.
    Malheureusement du à des problèmes dans l'association, ce site n'a pas pu être déployé sur le web.
    
    Initialement il devait être déployé sur un serveur Cloud tout en Dockerizant le projet Symfony.
    
    Défauts:
    - Son nombre de requêtes SQL par page. En effet toute la BDD concernant une table est chargé à chaque page. Ceci n'était pas contraignant sachant que le nombre de danse par an allait être autour d'une cinquantaines.

    

TroubleShooting:

Nous allons lancer deux terminaux de commande en parallèle. Le premier nous permettra de lancer notre projet et de voir les possibles problèmes. Le deuxième nous permettra de lancer les commandes nécessaires pour notre BDD.

- Lancer un nouveau terminal tout en gardant l'autre actif
(Si première fois sur votre machine)
    $ sudo docker-compose exec php php bin/console doctrine:migration:diff
    $ sudo docker-compose exec php php bin/console doctrine:migration:migrate
    $ sudo docker-compose exec php php bin/console doctrine:fixtures:load
    $ sudo docker-compose exec php php bin/console doctrine:migration:migrate
    - Se rendre sur symfony.localhost:80 depuis votre navigateur
    
(Si déjà initialisé mais problème d'accès aux fichiers logs):
    ("Titiller" la BDD)
    $ sudo docker-compose exec php php bin/console doctrine:migration:diff
    - Se rendre sur symfony.localhost:80 depuis votre navigateur
