<?php

abstract class books // this is my parent class for books
{
    protected $Title;
    protected $Author;
    protected $Summary;
    protected $ReleaseDate;
    protected $Availability;
    
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
  	public function getTitle()
  	{
  		return $this-> Title;
  	}  

  	public function getAuthor()
  	{ 
  		return $this-> Author;
  	}

  	public function getReleaseDate()
  	{ 
  		return $this-> releaseDate;
  	}

  	public function getCategory()
  	{
  	 return $this-> Category;
  	}

  	public function getSummary()
  	{ 
  		return $this-> Summary;
  	}

  	public function getAvailability()
  	{
  	 return $this-> Availability;
  	}

	// List of setters to check if my value
	public function setTitle($Title){
			$this -> Title = $Title;
	}
	public function setAuthor($Author){
			$this -> Author = $Author;
	}	
	public function setReleaseDate($releaseDate){
			$this -> ReleaseDate = $releaseDate;
	}	
	public function setCategory($Category){
			$this -> Category = $Category;
	}	
	public function setSummary($Summary){
			$this -> summary = $summary;
	}
	public function setAvailability($Availability){
	 		$this -> Availability = $Availability;
	}




}

?>
   