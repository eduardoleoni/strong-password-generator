<?php
include("StrongPasswordGenerator.class.php");
$passwordGenerator = new StrongPasswordGenerator;
echo $passwordGenerator->generate();
