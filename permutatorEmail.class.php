<?php
 
class EmailPermutator {
 
	private $fname; 
	private $lname;
	private $dname;
	public static $spcialChars = array("-",".","_");
	public $email_permutators = array();
	 
	public function __construct($fname, $lname,$dname) {
	 
		$this->fname =  $fname;
		$this->lname = $lname;
		$this->dname = $dname;
	 
	}
	 
	public function get_fname() {
	 
		return $this->fname;
	 
	}
	 
	public function set_fname($fname) {
	 
		$this->fname = $fname;
	 
	}
	 
	public function get_lname() {
	 
		return $this->lname;
	 
	}
	 
	public function set_lname($name) {
	 
		$this->lname = $lname;
	 
	}
	 public function get_dname() {
	 
		return $this->dname;
	 
	}
	 
	public function set_dname($name) {
	 
		$this->dname = $dname;
	 
	}
	public function addSpecialCharBetweenNames(){
	    foreach(self::$spcialChars as $spcialChar){
			$this->email_permutators[]= $this->fname.$spcialChar.$this->lname."@".$this->dname;
			$this->email_permutators[]= $this->lname.$spcialChar.$this->fname."@".$this->dname;
			$this->email_permutators[]= substr($this->fname,0,1).$spcialChar.$this->lname."@".$this->dname;
			$this->email_permutators[]= $this->fname.$spcialChar.substr($this->lname,0,1)."@".$this->dname;
			$this->email_permutators[]= substr($this->fname,0,1).$spcialChar.substr($this->lname,0,1)."@".$this->dname;
		}
			$this->email_permutators[]= $this->fname.$this->lname."@".$this->dname;
			$this->email_permutators[]= $this->lname.$this->fname."@".$this->dname;
			$this->email_permutators[]= $this->lname.substr($this->fname,0,1)."@".$this->dname;
			$this->email_permutators[]= substr($this->lname,0,1).".".substr($this->fname,0,1)."@".$this->dname;
			$this->email_permutators[]= substr($this->lname,0,1).".".$this->fname."@".$this->dname;
			$this->email_permutators[]= substr($this->lname,0,1).substr($this->fname,0,1)."@".$this->dname;
		
	}
	public function addEmailOnlyLnameORfname(){
		$this->email_permutators[]= $this->fname."@".$this->dname;
		$this->email_permutators[]= $this->lname."@".$this->dname;	
		
	}
	public function addEmailByFirstCharCombination(){
		$this->email_permutators[]= substr($this->fname,0,1).$this->lname."@".$this->dname;
		$this->email_permutators[]= $this->fname.substr($this->lname,0,1)."@".$this->dname;
		$this->email_permutators[]= substr($this->fname,0,1).substr($this->lname,0,1)."@".$this->dname;
		
	}
}
 
?>