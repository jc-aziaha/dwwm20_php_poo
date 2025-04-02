<?php


/**
 * ***************************************************
 * Exo 3
 * ***************************************************
 */

class Person
{
    /**
     * Le prénom de la personne.
     *
     * @var string
     */
    private string $firstName;

    /**
     * Le nom de la personne.
     *
     * @var string
     */
    private string $lastName;

    /**
     * Le plat préféré de la personne.
     *
     * @var string
     */
    private string $favoriteMeal;


    public function __construct(string $firstName, string $lastName, string $favoriteMeal)
    {
        $this->firstName    = $firstName;
        $this->lastName     = $lastName;
        $this->favoriteMeal = $favoriteMeal;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getFavoriteMeal(): string
    {
        return $this->favoriteMeal;
    }

    public function setFavoriteMeal(string $favoriteMeal): void
    {
        $this->favoriteMeal = $favoriteMeal;
    }

    public function presenter(): void
    {
        echo "Je m'appelle {$this->firstName} {$this->lastName} et j'adore {$this->favoriteMeal}.";
    }
}


class Employee extends Person
{
    private float $salary;

    public function __construct(string $firstName, string $lastName, string $favoriteMeal, float $salary)
    {
        parent::__construct($firstName, $lastName, $favoriteMeal);
        $this->salary = $salary;
    }

    public function increaseSalary(float $percentage): void
    {
        $this->salary += $this->salary * ($percentage / 100);
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

}

$employe1 = new Employee("Sasuke", "Uchiwa", "Riz", 2000);
$employe1->increaseSalary(50);

$employe1->setFirstName("Itachi");
$employe1->presenter();
echo "<br/>";
echo "Je gagne actuellement {$employe1->getSalary()} euros par mois.";


/**
 * ***************************************************
 * Exo 2
 * ***************************************************
 */

// class Person
// {
//     /**
//      * Le prénom de la personne.
//      *
//      * @var string
//      */
//     private string $firstName;

//     /**
//      * Le nom de la personne.
//      *
//      * @var string
//      */
//     private string $lastName;

//     /**
//      * Le plat préféré de la personne.
//      *
//      * @var string
//      */
//     private string $favoriteMeal;


//     public function __construct(string $firstName, string $lastName, string $favoriteMeal)
//     {
//         $this->firstName    = $firstName;
//         $this->lastName     = $lastName;
//         $this->favoriteMeal = $favoriteMeal;
//     }

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

//     public function getFavoriteMeal(): string
//     {
//         return $this->favoriteMeal;
//     }

//     public function setFavoriteMeal(string $favoriteMeal): void
//     {
//         $this->favoriteMeal = $favoriteMeal;
//     }

//     public function presenter(): void
//     {
//         echo "Je m'appelle {$this->firstName} {$this->lastName} et j'adore {$this->favoriteMeal}.";
//     }
// }

// $person1 = new Person("Naruto", "Uzumaki", "Ramen");
// $person1->presenter();


/**
 * ***************************************************
 * Exo 1
 * ***************************************************
 */
    // class Person
    // {
    //     /**
    //      * Le prénom de la personne.
    //      *
    //      * @var string
    //      */
    //     public string $firstName;


    //     /**
    //      * Le nom de la personne.
    //      *
    //      * @var string
    //      */
    //     public string $lastName;


    //     /**
    //      * Son plat préféré.
    //      *
    //      * @var string
    //      */
    //     public string $favoriteMeal;


    //     public function __construct(string $firstName, string $lastName, string $favoriteMeal)
    //     {
    //         $this->firstName    = $firstName;
    //         $this->lastName     = $lastName;
    //         $this->favoriteMeal = $favoriteMeal;
    //     }
    // }

    // $person1 = new Person("Riri", "Duck", "blé");
    // $person2 = new Person("Fifi", "Duck", "maïs concassé");
    // $person3 = new Person("Loulou", "Duck", "raisin");