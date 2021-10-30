une api pour générer un code de paiement
comment sa marche

clonner le projet sur votre pc
git clone https://github.com/rogerBret/paiecashApi.git
installer les dépendances
composer install
créer une base de données 
"paiecacheapi"
exécutez la commande de migration de la base de données

php artisan migrate

testez si l'api fontionne

1- démarrer le serveur : php artisan serve

2- sur un navigateur exécuter l'URL http://127.0.0.1:8000/api/

si vous avez comme résultat 
{
    "success": true,
    "message": "Bien venue le monde",
    "data": {
        "service": "API paiement code générator",
        "version": "1.0",
        "language": "fr",
        "support": "contact@lazydevops.dev"
    }
}

3- exécuter les api en post juste un test pour enter les paramètre de paie 

- http://127.0.0.1:8000/api/qrcode

- les paramètres exemple:
    - trader_id : 1
    - reference_qrcode : PAIE-IIO112
    -
    
     - trader_id : 2
    - reference_qrcode : PAIE-IIO113

pour afficher les données entrées:
    http://127.0.0.1:8000/api/qrcodes
    
    et pour afficher une seul information il faut passer l'id à l'url
    exemple:
    http://127.0.0.1:8000/api/qrcode/1
