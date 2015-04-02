<?php

namespace classes;

/**
 * Class User
 * @package classes
 */
class User extends AbstractUser {

    /**
     * Nom
     * @var
     */
    protected $nom;

    /**
     * Prenom
     * @var
     */
    protected $prenom;

    /**
     * Enabled
     * @var
     */
    protected $enabled;

    /**
     * Constructeur
     * @param $prenom
     * @param $nom
     */
    public function __construct($prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    /**
     * Réagir  avec un commentaire
     * @param $commentaire
     * @return string
     */
    public function reagir($commentaire){

        return $this->prenom. " ". $this->nom  ." a réagi avec mon commentaire: ".$commentaire;
    }

    /**
     * Répondre avec ParamConverter
     * @param User $user
     * @param $message
     * @return string
     */
    public function repond(User $user, $message){

        return $this->prenom. " ". $this->nom  ." a  répondu à la réaction de ".$user->nom." ". $user->prenom . ": ".$message;
    }

    /**
     * Noter avec Objet
     * @param $note
     * @return string
     */
    public function noter($note){

        return $this ." a noté: ".$note;
    }


    /**
     * Conversion de la note
     * @return string
     */
    public function __toString(){
        return $this->nom. " ". $this->prenom;
    }


    public function getEnabled()
    {
        // TODO: Implement getEnabled() method.
    }

    public function setEnabled($enabled)
    {
        // TODO: Implement setEnabled() method.
    }


}