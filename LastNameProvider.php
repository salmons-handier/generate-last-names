// LastNameProvider.php
<?php

class LastNameProvider {
    private $lastNames = [
        'Smith',
        'Johnson',
        'Williams',
        'Jones',
        'Brown',
        // Add more last names as needed
    ];

    public function getLastNames() {
        return $this->lastNames;
    }
}
