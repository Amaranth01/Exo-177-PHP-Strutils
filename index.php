<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include './class/StrUtils.php';

$myStr = new StrUtils("Une phrase", "bold", "italic", "underline", "capitalize");

echo $myStr->getBold()."<br>";
echo $myStr->getCapitalize()."<br>";
echo $myStr->getItalic()."<br>";
echo $myStr->getUnderline()."<br>";
echo $myStr->uglify()."<br>";