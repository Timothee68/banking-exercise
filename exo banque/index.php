<!-- POO Banque
Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des titulaires et leurs
comptes bancaires respectifs.

Sur un compte bancaire, on doit pouvoir :
• créditer le compte de X euros
• débiter le compte de X euros
• effectuer un virement d'un compte à l'autre

<?php 
include 'Titulaire.php';
include 'Compte.php';
$titulaire=new Titulaire ('Lucarelli',"timothée","1989-11-18","Colmar");


$livret=new Compte("Livret A",0,"€",$titulaire);
$compteCourent=new Compte("compte courant",10000,"€",$titulaire);
echo $titulaire."<br>";
echo $titulaire->showompte()."<br>";
echo $compteCourent->virement(100,$livret)."<br>";  // on prend un compte on appelle la fonction dans laquelle on demande le comtpe a crediter et la somme a crediter 
echo $compteCourent->virement(1000,$livret)."<br>";
echo $livret->virement(1200,$compteCourent)."<br>";