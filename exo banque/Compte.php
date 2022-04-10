<!-- Un compte bancaire est identifié par :

Sur un compte bancaire, on doit pouvoir :
• créditer le compte de X euros
• débiter le compte de X euros
• effectuer un virement d'un compte à l'autre
On doit pouvoir :
• Afficher toutes les informations d'un compte bancaire (notamment le nom / prénom du
titulaire du compte) -->
<?php

class Compte {
    private string $libelle;
    private float $soldeInitial;
    private string $deviseMonnaitaire;
    private Titulaire $titulaire;
    

        public function __construct($libelle,$soldeInitial,$deviseMonnaitaire,Titulaire $titulaire){
            $this->libelle = $libelle ;
            $this->soldeInitial = $soldeInitial ;
            $this->deviseMonnaitaire =$deviseMonnaitaire ;
            $this->titulaire = $titulaire;
            $this->titulaire->addCompte($this); // pour le titulaire en cour (ex : titulaire1) utilise la fonction addCompte pour l'objet en cour (ex:compte1 ou compte2) !!
            // sa fonctionne car titulaire est relier dans la class Compte par  private Titulaire $titulaire;__construct(Titulaire $titulaire) !!!!!
           
        }

        public function getLibelle(){
            return $this->libelle;
        }
        public function getSoldeInitil(){
            return $this->soldeInitial;
        }
        public function getDevisemonnaitaire(){
            return  $this->deviseMonnaitaire;
        }
        public function getTitulaire(){
            return  $this->titulaire;
        }
        public function setLibelle($libelle){
            return $this->libelle = $libelle ;
        }
        public function setSoldeInitil($soldeInitial){
            return  $this->soldeInitial = $soldeInitial;
        }
        public function setDevisemonnaitaire($deviseMonnaitaire){
            return  $this->deviseMonnaitaire = $deviseMonnaitaire ;
        }
        public function setTitulaire($titulaire){
            return $this->titulaire = $titulaire ;
        }

        public function debiter($montant){ //fonction de débit 
             
                $this->soldeInitial -= $montant; 
                  
        }
        public function crediter($montant){ // fonction de credit 
            $this->soldeInitial += $montant;

        }
        public function virement(float $montant,$compteCible){ // ICI public fonction virment ($compte ----> pour dore qu'on demendera pour le echo le noms d'un compte a prendre en compte  ),$montant ( puis le montant que l'on veut )
                $this->debiter($montant);           // le compte en court est debit 
                $compteCible->crediter($montant);   // ensuite le compte ciblé est credit
                return "<strong>virement éffectuer</strong><br> nouveau solde de vos comptes : <br>".$this." ".$compteCible;      // on affiche la nouvelle somme dans les comptes          
        }

        public function __toString(){
            return   "- ".$this->libelle." ".$this->soldeInitial." ".$this->deviseMonnaitaire."<br>";
        }
}