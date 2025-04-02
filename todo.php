<?php

    class MonVehicule
    {
        private string $marque;

        public function __construct(string $marque)
        {
            $this->marque = $marque;
        }
    }

    class MaVoiture extends MonVehicule
    {
        private int $nbreDeRoues;

        public function __construct(string $marque, int $nbreDeRoues)
        {
            parent::__construct($marque);
            $this->nbreDeRoues = $nbreDeRoues;
        }
    }

    $voiture0 = new MaVoiture("Tesla", 4);