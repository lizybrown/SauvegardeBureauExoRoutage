<?php
class Commentary{
    private $id_commentary;
    private $content;
    private $date_time;
    private $id_user;
    private $id_article;

    public function __construct($id_commentary, $content,$date_time,$id_user,$id_article)
    {
        $this->id_commentary = $id_commentary;
        $this->content = $content;
        $this->date_time = $date_time;
        $this->id_user = $id_user;
        $this->id_article = $id_article;
    }

    /**
     * Get the value of id_commentary
     */ 
    public function getId_commentary()
    {
        return $this->id_commentary;
    }

    /**
     * Set the value of id_commentary
     *
     * @return  self
     */ 
    public function setId_commentary($id_commentary)
    {
        $this->id_commentary = $id_commentary;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of date_time
     */ 
    public function getDate_time()
    {
        return $this->date_time;
    }

    /**
     * Set the value of date_time
     *
     * @return  self
     */ 
    public function setDate_time($date_time)
    {
        $this->date_time = $date_time;

        return $this;
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
     * Get the value of id_article
     */ 
    public function getId_article()
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     *
     * @return  self
     */ 
    public function setId_article($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }
}