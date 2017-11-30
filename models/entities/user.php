<?php 
	class user
{
	protected $FirstName;
	protected $LastName;
	protected $Age;
	protected $Birth;
	protected $Residence;

	public function __construct(array $donnees)
    {  	//this's my constructor with the hydratation
		$this -> hydrate($donnees);
     	
    }

    public function hydrate(array $donnees)
    { 	//  I put up my hydratation
    	foreach ($donnees as $key => $value)
    	{
 	 	    $method = 'set'.ucfirst($key);
			if (method_exists($this, $method))
			{
		    	$this -> $method($value);
			}
    	}
	}

	// List of my Getters they are used to recover an attribute
  	public function getFirstName()
  	{
  		return $this-> FirstName;
  	}  

  	public function getLastName()
  	{ 
  		return $this-> LastName;
  	}

  	public function getAge()
  	{ 
  		return $this-> Age;
  	}

  	public function getBirth()
  	{
  	 	return $this-> Birth;
  	}

  	public function getResidence()
  	{ 
  		return $this-> Residence;
  	}

  	

}
?>
