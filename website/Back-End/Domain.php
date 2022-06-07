<?php
include_once("FileManagerModel.php");
abstract class domain
{
    private $id;

    public $FileManagerObj;

    function __construct()
    {
        $this->FileManagerObj = new FileManager;
    }

   
    function delete($id)
    {
        $record = $this->FileManagerObj->GetWithId($id);
        $this->FileManagerObj->deleteRecord($record);
    }
    
	
	function getid() {
		return $this->id;
	}
	
	
	function setid($id): self {
		$this->id = $id;
		return $this;
	}
}
