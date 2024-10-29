# Hoomies in town Version Mvc : site de colocation

# Description

Ce projet est un site de colocation pour aider les étudiants étrangers à trouver un logement. Il permet de mettre en contact ceux qui cherchent une chambre avec des propriétaires ou d'autres colocataires. Pour cette première version, nous avons choisi de travailler seulement sur l'interface du site, sans backend, pour rendre l'expérience simple et agréable.

# Fonctionnalités Clés

La nouvelle version de Hoomies In Town apporte des fonctionnalités de back-end sécurisées, permettant à chaque utilisateur de gérer son compte en toute sécurité. Les principales différences et améliorations incluent :

- Création sécurisée de compte : Les utilisateurs peuvent s’enregistrer, et leurs informations sont sauvegardées dans la base de données avec des mesures de sécurité telles que le hachage sécurisé des mots de passe.
- Affichage de leurs informations : Une fois connectés, les utilisateurs peuvent consulter leurs informations personnelles, avec des contrôles de session pour s’assurer que seuls les utilisateurs authentifiés ont accès à ces données.
- Modification sécurisée de profil : Les utilisateurs peuvent mettre à jour leurs informations de profil en toute sécurité, grâce à des filtres et validations des entrées pour éviter les failles de sécurité, telles que les injections XSS.
- Suppression sécurisée de compte : Les utilisateurs ont l’option de supprimer leur compte, en veillant à ce que toutes les données associées soient définitivement supprimées de manière sécurisée.

Ces ajouts constituent un système CRUD sécurisé (Create, Read, Update, Delete) pour la gestion des utilisateurs, avec des protections intégrées pour assurer la confidentialité et la sécurité des données personnelles.
