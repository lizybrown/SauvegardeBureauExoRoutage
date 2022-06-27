<?php
class User{
    private $id_user;
    private $pseudo;
    private $mdp;
    private $mail;
    private $id_role;

    public function __construct($id_user,$pseudo,$mdp,$mail,$id_role)
    {
        $this->id_user = $id_user;
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
        $this->mail = $mail;
        $this->id_role = $id_role;  
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return htmlspecialchars($this->pseudo);
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of id_role
     */ 
    public function getId_role()
    {
        return $this->id_role;
    }

    /**
     * Set the value of id_role
     *
     * @return  self
     */ 
    public function setId_role($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

}