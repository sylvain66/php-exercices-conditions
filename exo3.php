<?php
  $genre ='femme';
  $age = 10;
  if ($genre=='homme'&& $age >= 18) {
    echo "Vous êtes un homme et vous êtes majeur";
  }
  elseif ($genre=='homme'&& $age<18) {
    echo "Vous êtes un homme et vous êtes mineur";
  }
  elseif ($genre=='femme'&& $age>=18) {
    echo "Vous êtes une femme et vous êtes majeur";
  }
  else {
    echo "Vous êtes une femme et vous êtes mineur";
  }
?>
