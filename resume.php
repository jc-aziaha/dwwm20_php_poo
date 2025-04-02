<?php





// ----------------------------------------------------

trait ActionsSecondaires
{
    public function voler()
    {
        echo "kuyjyhjkjkhkj";
    }
}

interface Actions
{
    public function demarrer();
    public function rouler();
    public function freiner();
}

abstract class Vehicule implements Actions
{
    private string $marque;
    private string $couleur;

    public function configurer(): void
    {
        // iuykiuykhj
    } 
}

class Voiture extends Vehicule
{
    use ActionsSecondaires;
    
    public function demarrer()
    {
        echo "La voiture demarre";
    }

    public function rouler()
    {
        echo "La voiture roule";
    }

    public function freiner()
    {
        echo "La voiture freine";
    }
}

class Moto extends Vehicule
{
    public function demarrer()
    {
        echo "La moto demarre";
    }

    public function rouler()
    {
        echo "La moto roule";
    }
    
    public function freiner()
    {
        echo "La moto freine";
    }
}

class Camion extends Vehicule
{
    public function demarrer()
    {

    }

    public function rouler()
    {

    }
    
    public function freiner()
    {

    }
}

$voiture = new Voiture;
$voiture->demarrer();

// ----------------------------------------------------


    // abstract class Animal
    // {
    //     private string $nom;

    //     public function crier(): void
    //     {
    //         echo "L'animal crie";
    //     }

    //     abstract public function sauter(): void;
    // }

    

    // class Chien extends Animal
    // {
    //     public function crier(): void
    //     {
    //         echo "Waouf";
    //     }

    //     public function sauter(): void
    //     {

    //     }
    // }

    // class Chat extends Animal
    // {
    //     public function crier(): void
    //     {
    //         echo "Miaou";
    //     }

    //     public function sauter(): void
    //     {

    //     }
    // }

    // // $chien = new Chien;
    // // $chien->crier();
    // $chat = new Chat;
    // $chat->crier();


// ----------------------------------------------------

    // class Transport 
    // {
    //     private string $nom;
    //     private string $capacite;

    //     public function getNom(): string
    //     {
    //         return $this->nom;
    //     }

    //     public function setNom(string $nom): void
    //     {
    //         $this->nom = $nom;
    //     }

    //     public function getCapacite(): string
    //     {
    //         return $this->capacite;
    //     }

    //     public function setCapacite(string $capacite): void
    //     {
    //         $this->capacite = $capacite;
    //     }
    // }

    // class Rer extends Transport
    // {

    // }

    // $rer = new Rer;
    // $rer->setNom("Ligne A");
    // echo $rer->getNom();



// ----------------------------------------------------

// class User
// {
//     private ?string $firstName = null;
//     private ?string $lastName = null;
//     private ?int $age = null;

//     public function __construct(string $firstName, string $lastName, int $age)
//     {
//         $this->firstName = $firstName;
//         $this->lastName = $lastName;
//         $this->age = $age;
//     }

//     public function getFirstName(): ?string
//     {
//         return $this->firstName;
//     }

//     public function setFirstName(string $firstName): void
//     {
//         $this->firstName = $firstName;
//     }

//     public function getLastName(): ?string
//     {
//         return $this->lastName;
//     }

//     public function setLastName(string $lastName): void
//     {
//         $this->lastName = $lastName;
//     }

//     public function getAge(): ?int
//     {
//         return $this->age;
//     }

//     public function setAge(int $age): void
//     {
//         $this->age = $age;
//     }
// }

// $user0 = new User("Jack", "Sparrow", 42);
// echo $user0->getFirstName();

// ----------------------------------------------------

    // class Train
    // {
    //     private string $couleur;

    //     private int $capacite;

    //     public function getCouleur(): string
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur): void
    //     {
    //         $this->couleur = $couleur;
    //     }

    //     public function getCapacite(): int
    //     {
    //         return $this->capacite;
    //     }

    //     public function setCapacite(int $capacite): void
    //     {
    //         $this->capacite = $capacite;
    //     }

    //     function demarrer() : void
    //     {
    //         echo "Le train demarre";
    //     }

    //     function transporterPassagers() : void
    //     {
    //         echo "Le train transporte des passagers";
    //     }
    // }

    // $train0 = new Train;
    // $train0->couleur = "bleu";
    // $train0->capacite = 1900;
    // $train0->demarrer();
    
    // $train1 = new Train;
    // $train1->demarrer();
    // $train1->transporterPassagers();
?>