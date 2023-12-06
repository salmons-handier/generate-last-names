// index.php
<?php

require_once 'LastNameGenerator.php';
require_once 'LastNameProvider.php';

$generator = new LastNameGenerator(new LastNameProvider());
$generatedLastName = $generator->generateLastName();

echo "Generated Last Name: $generatedLastName";
