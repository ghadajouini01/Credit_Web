<?php
    class User
    {
		public $id;
        public $nom;
        public $prenom;
        public $login;
		public $email;
		public $pwd;
		public $date_creation;
        public $img;
		public $role;

    

        public function __construct(int $id, string $nom,string $prenom,string $login,string $email,string $pswd, DateTime $date_creation,string $img,string $role )
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login =  $login;
        $this->email = $email;
        $this->pwd = $pswd;
        $this->date_creation = $date_creation;
        $this->img=$img;
        $this->role=$role;
    }

    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id=$id;
    }
    public function getLogin() : string 
    {
        return $this->login;
    }
    public function setLogin(string $login )
    {
        $this->login=$login;
    }
    public function getEmail() : string 
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email=$email;
    }
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom=$nom;
    }
    public function getImg() : string 
    {
        return $this->img;
    }
    public function setImg(string $img)
    {
        $this->img=$img;
    }
    public function getPrenom() : string 
    {
        return $this->prenom;
    }
    public function setPrenom(string $p)
    {
        $this->prenom=$p;
    }
    public function getPwd() : string 
    {
        return $this->pwd;
    }
    public function setPwd(string $pswd)
    {
        $this->pwd=$pswd;
    }
    public function getDate_creation() : DateTime 
    {
        return $this->date_creation;
    }
    public function setDate_creation(DateTime $dd)
    {
        $this->date_creation=$dd;
    }
    public function getRole() : string 
    {
        return $this->role;
    }
    public function setRole(string $role)
    {
        $this->role=$role;
    }

	}
   
?>