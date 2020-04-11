<?php
$email="elan@elan-formation.fr";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("Email valide")."<br>";
}

$email="contact@elan";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("Email valide");

}else {
    echo ("Email invalide");
}
?>


