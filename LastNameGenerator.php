// LastNameGenerator.php
<?php

class LastNameGenerator {
    private $lastNameProvider;

    public function __construct(LastNameProvider $lastNameProvider) {
        $this->lastNameProvider = $lastNameProvider;
    }

    public function generateLastName() {
        $lastNames = $this->lastNameProvider->getLastNames();
        $randomIndex = array_rand($lastNames);
        return $lastNames[$randomIndex];
    }
}
