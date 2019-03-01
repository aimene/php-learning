<?php
include('form.php');

class form2 extends form
{
	private $coderadio;
	private $codecase;
	
	public function __construct($action,$titre,$methode="post")
	{
		parent::__construct($action,$titre,$methode="post");
	}

	
	// ---------------------------------------------------------------------------------------------------- //
	public function setradio($name,$libelle,$value)
	{
		$this->coderadio.="<b>$libelle</b><input type=\"radio\"name=\"$name\" value=\"$value\"/><br />";
	}
	// ---------------------------------------------------------------------------------------------------- //
	
	public function setcase($name,$libelle,$value)
	{
		$this->codecase.="<b>$libelle</b><input type=\"checkbox\"name=\"$name\" value=\"$value\" /><br />";
	}

	// ---------------------------------------------------------------------------------------------------- //
	
	public function getform()
	{
		$this->code="";
		$this->code.=$this->codeinit;
		$this->code.=$this->codetext;
		$this->code.=$this->coderadio;
		$this->code.=$this->codecase;
		$this->code.=$this->codesubmit;
		$this->code.="</fieldset></form>";
		echo $this->code;
	}
}
	
	
?>