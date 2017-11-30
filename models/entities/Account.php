
<?php

class Account
{
    protected $id;
    protected $username;
    protected $credit;


    //En gros, hydrate moi tout afin que je puisse tout utiliser (set et get)
    public function __construct(array $donnees)//Les $données ici représentent mes $_post. Donc les $_POST sont envoyés dans mon constrcuteur
    {
        $this->hydrate($donnees); 
    }

    public function hydrate(array $donnees)
    {
    foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
            $this->$method($value);
            }
        }
    }

                    // setters and getters

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

   /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

   /**
     * Get the value of Username
     *
     * @return mixed
     */
    public function getUsername()//UN getter doit souvent resté vide. Il renvoie l'attribut qui a été récupéré grace au setter. En l'occurence ici, il renvoie l'attribut $username, qui a été récupéré par le setter qui, lui-même, provient de ce qui se trouve dans views username 
    {
        return $this->username;
    }

   /**
     * Set the value of Username
     *
     * @param mixed username
     *
     * @return self
     */
    public function setUsername($username)//récupère ce qui a été rédigé dans mon input de views et défini: if, else.
    //Exemple : Il récupère mon prénom qui se trouve dans le input
    {
        $this->username = htmlspecialchars($username);
        return $this;
    }

   /**
     * Get the value of Credit
     *
     * @return mixed
     */
    public function getCredit()
    {
        return $this->credit;
    }

   /**
     * Set the value of Credit
     *
     * @param mixed credit
     *
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = htmlspecialchars($credit);
        return $this;
    }
                    // end of setters and getters


                    // add functions
    public function addCredit($amount)
    {
        $this->credit +=  $amount;
        $this->setCredit($this->credit);//defined his credit
    }

    public function minousCredit($amount)
    {
        $this->credit -=  $amount;
        $this->setCredit($this->credit);
    }


}
?>
<!-- end of php -->