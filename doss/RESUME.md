# PHP POO

- Poo est un paradigme de programmation dont le point central est l'utilisation des objets.

- Qu'est-ce qu'un objet? 
    - C'est l'instanciation d'une classe

- Qu'est-ce qu'une classe
    - C'est une maquette

- Au final
    - Prendre le temps de créer (concevoir) la classe (Maquette)
    - Se baser sur la maquette pour générer autant d'objets souhaités

## Les conventions à respecter
- La première lettre du nom de la classe doit être en majuscule
- Le nom des propriétés et méthodes doit être en camelCase

## Les points clés
- La notion d'encapsulation (public, protected, private)
- Dans le cas où les propriétés sont privées
    - Définir ses accesseurs (getters)
    - Définir ses mutateurs (setters)
- Le constructeur (Fonction magique)
    - On l'appelle fonction magique parce que c'est que une fonction qui s'exécute même si on ne la voit pas
    - Son rôle: Construire l'objet
    - Toutefois, nous pouvons réécrire (appeler) le constructeur
        - Afin de lui dire d'exécuter des tâches supplémentaires lors de la construction de l'objet. 
- Distinguer le mode statique du mode dynamique
    - Statique (class): 
        - Mots clés: self, ::, static
    - Dynamique (Objet):
        - Mots clés: $this, ->
    - A partir d'une objet, il est tout à fait possible d'accéder à une propriété ou une méthode statique.
