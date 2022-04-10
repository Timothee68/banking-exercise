
<?php
class Titulaire{
    private string $name;
    private String $firstName;
    private DateTime $birth;
    private $city;
    private array $allCompte;


    public function __construct($name,$firstName,string $birth,$city){
        $this->name = $name;
        $this->firstName =$firstName;
        $this->birth = new DateTime($birth);
        $this->city = $city;
        $this->allCompte= [];
    }

    public function getName(){
        return $this->name;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getBirth(){
        return $this->birth;
    }
    public function getCity(){
        return $this->city;
    }
    public function getAllCompte(){
        return $this->allCompte;
    } 
    public function setAllCompte(){
        return $this->allcompte= [];
    }     

    public function setName(){
        return $this->name;
    }
    public function setFirstName(){
        return  $this->firstName;
    }
    public function setBirth(){
        return  $this->birth;
    }
    public function setCity(){
        return $this->city;
    }
    public function addCompte(Compte $typeDeCompte){ // méthode qui fait appelle a la classe Compte pour mettre dans un tableau des objet quand elle sont instancier dans le tableau
        $this-> allCompte[]=$typeDeCompte;           // on utilise un array push pour rajouter un élément a la fin du tableau.ici nos objet compte !!
    }                                                // $compte est un objet livre rajouter a index [i]

    public function showompte(){                        //méthode pour parcourire les élément du tableaux 
        $comptes = '';                                  //  $biblio = ''; singifie que dans la varibale on auras un string en retour 
        foreach ($this->allCompte as $typeDeCompte) {   // on parcour la bibliographie en cours ou book est chaque objet mis dans le tableau              
            $comptes .= $typeDeCompte;                  // $biblio prend pour valeur $biblio.(objet book) a chaque tour de boucle 
        }
        return "Les comptes :<br> ".$comptes."<br>";
    }    
    public function CalculAge(){                       // methode pour calculer son age 
        $ActualDate= new DateTime() ;
        $birthY = $ActualDate->diff($this->birth);
        return ' à '.$birthY->y . ' ans ';
    }
    
    public function __toString(){
        return "Le compte appartient à Mr ".$this->name." ".$this->firstName." ".$this->CalculAge().":";
    }
} 