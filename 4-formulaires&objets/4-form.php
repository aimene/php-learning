<?php
class form
{
	// ---------------------------------------------------------------------------------------------------- //
	protected $htmlCode;
	protected $codeinit;
	protected $codetext;
	protected $codesubmit;

	// ---------------------------------------------------------------------------------------------------- //
	public function __construct($action, $titre, $methode="post")
	{
		$this->codeinit= "<form action=\"$action\" method=\"$methode\">";
		$this->codeinit.= "<fieldset><legend><b>$titre</b></legend>";
		
		//$this->action = $action;
		//$this->methode=$methode;
	}

	public function getHtmlCode() { return $this->htmlCode ;}
	public function getCodeinit() { return $this->codeinit ;}
	public function getCodetext() { return $this->codetext ;}
	public function getCodesubmit() { return $this->codesubmit ;}

	public function setHtmlCode($value ) {  $this->htmlCode = $value ; return $this;}
	public function setCodeinit($value ) {  $this->codeinit = $value ; return $this;}
	public function setCodetext($value ) {  $this->codetext = $value ; return $this;}
	public function setCodesubmit($value ) {  $this->codesubmit = $value ; return $this;}

	// ---------------------------------------------------------------------------------------------------- //
	public function setText($name, $libelle, $methode="post")
	{
		$this->codetext.= "<b>$libelle</b><input type=\"text\" name=\"$name\" /> <br /><br />";
	}

	// ---------------------------------------------------------------------------------------------------- //
	public function setSubmit($name="envoi", $value="Envoyer")
	{
		$this->codesubmit="<input type=\"submit\" name=\"$name\" value=\"Envoyer\"/><br />";
	}

	// ---------------------------------------------------------------------------------------------------- //
	public function getForm()
	{
		$this->htmlCode="";

		$this->htmlCode.=$this->codeinit;
		$this->htmlCode.=$this->codetext;
		$this->htmlCode.=$this->codesubmit;
		$this->htmlCode.="</fieldset></form>";

		echo $this->htmlCode;
	}
	// ---------------------------------------------------------------------------------------------------- //
}

?>