<?php

interface ActionsSpeciale
{
    public function voler(): void;
}

interface ActionsVehicule
{
    public function demarrer(): void;
    public function rouler(): void;
    public function freiner(): void;
}

abstract class Vehicule implements ActionsVehicule
{
    public string $marque;
    public string $couleur;


    public function config()
    {
        // 
        // 
    }
}

class Voiture extends Vehicule implements ActionsSpeciale
{
    public function demarrer(): void
    {

    }

    public function rouler(): void
    {

    }

    public function freiner(): void
    {

    }

    public function voler(): void
    {

    }
}


// ----------------------------------------------------------


// interface Actions
// {
//     public function crier();
// }

// abstract class Animal implements Actions
// {

// }

// class Chien extends Animal
// {
//     public function crier()
//     {
        
//     }
// }


// ----------------------------------------------------------


// abstract class Joueur
// {
//     public string $name;
//     public string $vie;
//     public string $armure;
//     public string $puissance;

//     public function tuer() {
//         echo "killer instinct";
//     }

//     abstract public function camoufler();
// }

// class Mage extends Joueur
// {
//     public function camoufler()
//     {

//     }
// }

// class Chevalier extends Joueur
// {
//     public function camoufler()
//     {
        
//     }
// }


// ----------------------------------------------------------



// abstract class Vehicule
// {
//     public string $marque;
//     public static string $data;

//     public function demarrer()
//     {
//         echo "Le vehicule demarre";
//     }

//     abstract public function rouler();

//     abstract public function freiner();
// } 

// class Voiture extends Vehicule
// {
//     public function rouler()
//     {

//     } 

//     public function freiner()
//     {

//     }
// }

// class Moto extends Vehicule
// {
//     public function rouler()
//     {

//     } 

//     public function freiner()
//     {

//     }
// }

// new Vehicule();


// ----------------------------------------------------------




// abstract class Galaxie
// {
// }

// class Andromede extends Galaxie
// {
// }

// class VoieLactee extends Galaxie
// {
// }

// ----------------------------------------------------------



// abstract class EtreVivant
// {
// }

// abstract class Animal extends EtreVivant
// {
// }

// abstract class Vegetal extends EtreVivant
// {
// }

// abstract class Humain extends EtreVivant
// {
// }


// ----------------------------------------------------------

// abstract class Vehicule
// {
//     public string $marque;

//     abstract public function freiner();

//     abstract public function rouler();

//     public function demarrer()
//     {
//         echo "demarrer";
//     }
// }

// class Voiture extends Vehicule
// {
//     public function freiner()
//     {

//     }

//     public function rouler()
//     {
        
//     }
// }


// $v0 = new Voiture;


// ----------------------------------------------------------

// abstract class Animal
// {
//     public string $nom;

//     public function __construct()
//     {
//         // iuyiuykjykhj
//     }

//     public function crier(): void
//     {
//         echo "L'animal crie";
//     }
// }

// class Chien extends Animal
// {
//     public function crier(): void
//     {
//         echo "{$this->nom} aboie!";
//     }
// }

// class Chat extends Animal
// {
//     public function crier(): void
//     {
//         echo "{$this->nom} miaule!";
//     }
// }

// new Animal();

// $chien = new Chien();
// $chien->nom = "Thanos";
// $chien->crier();

// echo "<br/>";

// $chat = new Chat();
// $chat->nom = "Garfield";
// $chat->crier();


// ----------------------------------------------------------


    // abstract class Fruit
    // {
        
    // }

    // class Mangue extends Fruit
    // {

    // }

    // class Banane extends Fruit
    // {

    // }

// ----------------------------------------------------------


    // abstract class Planete
    // {
    // }

    // class Terre extends Planete
    // {   
    // }

    // class Mercure extends Planete
    // {
    // }

// ----------------------------------------------------------


    // abstract class Vetement
    // {
    // }

    // class Pantalon extends Vetement
    // {    
    // }

    // class Pull extends Vetement
    // {
    // }

    // class Chaussette extends Vetement
    // {
    // }

// ----------------------------------------------------------


    // abstract class Viennoiserie
    // {
    // }

    // class Croissant extends Viennoiserie
    // {
    // }

    // class PainAuChocolat extends Viennoiserie
    // {
    // }


// ----------------------------------------------------------


    // abstract class Game
    // {
    //     private string $enterprise = "RockStar";
    // }

    // class Gta extends Game
    // {
        
    // }

    // class RedDeadRedemption extends Game
    // {
        
    // }

// ----------------------------------------------------------


    // class Animal
    // {
    //     public function crier(): void
    //     {
    //         echo "L'animal peut crier";
    //     }
    // }


    // class Chien extends Animal
    // {
    //     public function crier(): void
    //     {
    //         echo "Waouf!!!";
    //     } 
    // }

    // class Chat extends Animal
    // {
    //     public function crier(): void
    //     {
    //         echo "Miaou!!!";
    //     } 
    // }


    // $chien0 = new Chien();
    // $chien0->crier();

    // echo "<br/>";

    // $chat0 = new Chat();
    // $chat0->crier();



// ----------------------------------------------------------


    // abstract class Vehicule
    // {
    //     private string $marque = "Taslo";
    //     private string $couleur;

    //     public function getMarque(): string
    //     {
    //         return $this->marque;
    //     }
    
    //     public function setMarque(string $marque): void
    //     {
    //         $this->marque = $marque;
    //     }
    
    //     public function getCouleur(): string
    //     {
    //         return $this->couleur;
    //     }
    
    //     public function setCouleur(string $couleur): void
    //     {
    //         $this->couleur = $couleur;
    //     }
    // }

    // class Voiture extends Vehicule
    // {
    // }

    // class Moto extends Vehicule
    // {
    // }


// ----------------------------------------------------------

    // class Vehicule
    // {
    //     private string $marque = "Tesla";

    //     private string $couleur;

    //     private static int $nbreInstances = 0;

    //     public function __construct(string $couleur)
    //     {
    //         $this->couleur = $couleur;
    //         self::$nbreInstances++;
    //     }


    //     public function getMarque(): string
    //     {
    //         return $this->marque;
    //     }

    //     public function setMarque(string $marque): void
    //     {
    //         $this->marque = $marque;
    //     }

    //     public function getCouleur(): string
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur): void
    //     {
    //         $this->couleur = $couleur;
    //     }

    //     public static function getNbreInstances()
    //     {
    //         // return $this->nbreInstances;
    //         return self::$nbreInstances;
    //     }
    // }

    // echo Vehicule::getNbreInstances();

    // echo "<br/>----------------<br/>";

    // $vehicule0 = new Vehicule("bleue");
    // echo $vehicule0->getNbreInstances();
    // echo "<br/>";
    // echo Vehicule::getNbreInstances();

    // echo "<br/>----------------<br/>";

    // $vehicule1 = new Vehicule("blanche");
    // echo $vehicule1->getNbreInstances();
    // echo "<br/>";
    // echo Vehicule::getNbreInstances();


