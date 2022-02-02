<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include './class/StrUtils.php';

$cat = new StrUtils("Une phrase");

echo $cat->bold()."<br>";
echo $cat->italic()."<br>";
echo $cat->underline()."<br>";
echo $cat->capitalize()."<br>";
echo $cat->uglify()."<br>";
