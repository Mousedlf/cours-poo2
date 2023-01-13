<?php

// dans l'armée il y a soldats, lieutenants, general, superGeneral
//tout le monde à un nom, prenom, et matricule
abstract class Humain {

    private string $prenom;
    private string $nom;


    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }


}


//les soldats savent marcher en rang
class Soldat extends Humain{

    private int $matricule;

    /**
     * @return int
     */
    public function getMatricule(): int
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule(int $matricule): void
    {
        $this->matricule = $matricule;
    }

    public function marcherEnRang(){
        echo "je sais marcher en rang";
    }
}

$caro = new Soldat();
$caro->setPrenom("caroline");
$caro->marcherEnRang();


//les lieutenants savent crier et conduire
class Lieutenant extends Soldat{
    public function crier(){
        echo "je sais crier";
    }


}

$jean = new Lieutenant();
$jean->setPrenom("jean");
$jean->marcherEnRang();
$jean->crier();


//les generaux savent crier comme les lieutenants mais font un cri different
//les generaux ont leur voiture perso
class General extends Lieutenant{
    public function crier(){
        echo "je sais crier mais mieux";
    }

    public function voiture(){
        echo "j'ai une voiture perso ";
    }
}

interface AvoirVoiture{
    public function voiture();

}

$robert = new General();
$robert->setPrenom("robert");
$robert->crier();
$robert->voiture();


//les superGeneraux ont une voiture plus jolie
interface AvoirVoiture{

};


// il existe une sirene qui peut sonner
class Sirene{
    public static function sonner(){
        echo "pin pon pin pon";
    }
}

Sirene::sonner();