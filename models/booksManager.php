<?php
	class booksMananger
{
	private $db; 
  
  	public function __construct($db)
  	{
    $this->setDb($db);
  	}

	public function setDb($db) 
	{
		$this->db = $db;
	}

			// function for add a new book in my table
	public function add($book)
	{
	    $request = $this -> db ->prepare('INSERT INTO books
	    	(Title, Author, ReleaseDate, Category, Summary) VALUES(:Title, :Author, :ReleaseDate, :Category, :Summary)');

	    	// array
	    $request -> execute(
	    	[
	    'Title' => $book -> getTitle(),
	    'Author' => $book -> getAuthor(),
	    'ReleaseDate' => $book -> getReleaseDate(),
	    'Category' => $book -> getCategory(),
	    'Summary' => $book -> getSummary(),
	    	]
	    );
	}
			//Sorting and selecting the requested books by catégory
	public function getBookCategory($TriageByCatégory)
	{
		$request = $this -> db -> prepare('SELECT * FROM books WHERE category = :category');
		$request -> execute(
			[
			'category' => $TriageByCatégory
			]
		);
		$BookCategory = $request -> fetchAll();//recover sql values ​​with function fetch
	}

	public function getBooks()
	{ 
		$sql = 'SELECT * FROM books';//retrieval of all information concerning the books
		$request = $this-> db ->query($sql); //Execute my SQL query
		$books = $request -> fetchAll();//recover sql values ​​with function fetch
		return $books; //return what has been recovered
	}

		// Books available and unavailable
	public function Availability($NumberBook, $NumberUser)
	{
			// ?????????????????????????????????
			// ?????????????????????????????????
			// ?????????????????????????????????
	}






}
?>