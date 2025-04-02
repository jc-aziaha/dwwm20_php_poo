<?php

    class Livre
    {
        // Propriétés
        private int $nbreDePages;
        private string $couverture;

        public function __construct(int $nbreDePages, string $couverture)
        {
            $this->nbreDePages = $nbreDePages;
            $this->couverture  = $couverture;
        }

        // getter accesseur
        public function getNbreDePages(): int
        {
            return $this->nbreDePages;
        }

        // setter mutateur
        public function setNbreDePages(int $nbreDePages): void
        {
            $this->nbreDePages = $nbreDePages;
        }

        // Méthodes
        public function lire(): void
        {
            echo "Lecture, nbre de page total " . $this->nbreDePages . "<br/>";
        }
    }


    $livre0 = new Livre(100, "cover 1");
    $livre1 = new Livre(200, "cover 2");
    $livre2 = new Livre(300, "cover 3");
    
    $livre0->setNbreDePages(1);
    $livre0->lire();
    
    $livre1->setNbreDePages(2);
    $livre1->lire();

    $livre2->setNbreDePages(3);
    $livre2->lire();



// -------------------------------------------------------------------------------


    // class Film
    // {
    //     private string $titre;
    //     private array $acteurs = [];
    //     private bool $violence = false;
        
    //     public function __construct(string $titre, array $acteurs = [], bool $violence)
    //     {
    //         $this->titre = $titre;
    //         $this->acteurs = $acteurs;
    //         $this->violence = $violence;
    //     }

    //     public function getTitre(): string
    //     {
    //         return $this->titre;
    //     }

    //     public function setTitre(string $titre): void
    //     {
    //         $this->titre = $titre;
    //     }

    //     public function getActeurs(): array
    //     {
    //         return $this->acteurs;
    //     }

    //     public function setActeurs(array $acteurs = []): void
    //     {
    //         $this->acteurs = $acteurs;
    //     }

    //     public function getViolence(): bool
    //     {
    //         return $this->violence;
    //     }

    //     public function setViolence(bool $violence): void
    //     {
    //         $this->violence = $violence;
    //     } 
    // }


    // $film0 = new Film("Titanic", ["Leonardo Di Caprio", "Carlos", "Kate Winslet"], false);
    // $film0->setViolence(true);

    // $film0 = new Film;
    // $film0->setTitre("Titanic");
    // $film0->setActeurs(["Leonardo Di Caprio", "Carlos", "Kate Winslet"]);
    // $film0->setViolence(false);


// -------------------------------------------------------------------------------


    // class User
    // {
    //     private string $firstName;
    //     private string $lastName;
    //     private int $age;

    //     // public function __construct(string $firstName, string $lastName, int $age)
    //     // {
    //     //     $this->firstName    = $firstName;
    //     //     $this->lastName     = $lastName;
    //     //     $this->age          = $age;
    //     // }

    //     public function getFirstName(): string
    //     {
    //         return $this->firstName;
    //     }

    //     public function setFirstName(string $firstName): void
    //     {
    //         $this->firstName = $firstName;
    //     }

    //     public function getLastName(): string
    //     {
    //         return $this->lastName;
    //     }

    //     public function setLastName(string $lastName): void
    //     {
    //         $this->lastName = $lastName;
    //     }

    //     public function getAge(): int
    //     {
    //         return $this->age;
    //     }

    //     public function setAge(int $age): void
    //     {
    //         $this->age = $age;
    //     }
    // }

    // $user0 = new User("Picsou", "Balthazar", 60);

    // $user0->setFirstName("Jack");
    // $user0->setLastName("Sparrow");
    // $user0->setAge(42);
    
    // echo "{$user0->getFirstName()} {$user0->getLastName()} a {$user0->getAge()} ans";


// -------------------------------------------------------------------------------

    // class Vehicule
    // {
    //     private string $marque = "Peugeot";
    //     private string $couleur = "noire";

    //     // getter
    //     public function getMarque(): string
    //     {
    //         return $this->marque;
    //     }

    //     // setter
    //     public function setMarque(string $nouvelleMarque): void 
    //     {
    //         $this->marque = $nouvelleMarque;
    //     }

    //     public function getCouleur(): string
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $nouvelleCouleur): void
    //     {
    //         $this->couleur = $nouvelleCouleur;
    //     }

    //     public function demarrer()
    //     {
    //         echo "Le véhicule démarre";
    //     }

    //     public function rouler()
    //     {
    //         echo "Le véhicule roule";
    //     }
    //     public function freiner()
    //     {
    //         echo "Le véhicule freine";
    //     }

    //     public function presenter()
    //     {
    //         echo "Ce véhicule est de marque {$this->marque} et de couleur {$this->couleur}";
    //     }
    // }

    // $vehicule0 = new Vehicule;
    // $vehicule1 = new Vehicule;

    // echo "Avant: {$vehicule0->getMarque()}";
    // echo "<br/>";
    // $vehicule0->setMarque("Golf");
    // echo "<br/>";
    // echo "Après: " . $vehicule0->getMarque();

    // echo "<br/>";
    // echo $vehicule1->getMarque();
    // $vehicule1->setCouleur("Bleue");
    // echo $vehicule1->getCouleur();



    // class Carte
    // {
    //     public int $solde = 3000;
    // }

    // $carte = new Carte;
    // $carte->solde = 30000;

    // class Avion
    // {
    //     // Propriétés
    //     private $model = "A380";
    //     private $couleur = "rouge";
    //     private $capacite = 500;

    //     // Accesseur
    //     public function getModel()
    //     {
    //         return $this->model;
    //     }

    //     // Mutateur
    //     public function setModel(string $newModel)
    //     {
    //         $this->model = $newModel;
    //     }

    //     // Méthodes
    //     public function voler()
    //     {
    //         echo "L'avion vole.";
    //     }

    //     public function atterir()
    //     {
    //         echo "L'avion atterit en douceur.";
    //     }
    // }

    // $a0 = new Avion;
    // $a1 = new Avion;

    // $a0->setModel("C120");
    // echo "A0: " . $a0->getModel();

    // echo "<br/>";

    // echo "A1: " . $a1->getModel();
    // $a0->voler();
    // echo $a0->model;
    // $a0->couleur;
    // $a0->capacite;

    // class Moto
    // {
    //     // Propriétés
    //     public $marque = "Suzuki";
    //     public $moteur = 1000;

    //     // Méthodes
    //     public function accelerer()
    //     {
    //         echo "Cette moto accélère.";
    //     }

    //     public function passerVitesse()
    //     {
    //         echo "Cette moto des vitesses";
    //     }
    // }

    // $m0 = new Moto;
    // $m1 = new Moto;

    // $m0->accelerer();


    // class Casquette
    // {
    //     public $marque = "New Era";
    //     public $couleur = "bleue";

    //     public function porter()
    //     {
    //         echo "Cette casquette se porte à l'envers";
    //     }
    // }

    // $c0 = new Casquette;
    // $c0->porter();


// -----------------------------------------------------

    // class Voiture
    // {
    //     // Propriétés
    //     public $marque = "Tesla";

    //     public $couleur = "blanche";

    //     // Méthodes
    //     public function demarrer()
    //     {
    //         echo "La voiture demarre.";
    //     }

    //     public function stop()
    //     {
    //         echo "La voiture d'arrête.";
    //     }
    // }

    // $v0 = new Voiture;
    // $v1 = new Voiture;
    // $v2 = new Voiture;
    // $v3 = new Voiture;
    // $v4 = new Voiture;
    // $v5 = new Voiture;

    // $v0->demarrer();
    // $v0->stop();

    // $v1->demarrer();
    // $v5->demarrer();