<?php 
include_once("C:\wamp64\www\website\Back-End\Domain.php");
include_once("C:\wamp64\www\website\Back-End\FileManagerModel.php");
class Book extends domain
{
    private $Name;
    private $ISBN;
    public $record;
    
    

    function __construct()
    {
        $this->FileManagerObj = new FileManager;
        $FileName = "Books.txt";
        $Separetor = "~";
        $this->FileManagerObj->setFileName($FileName);
        $this->FileManagerObj->setSeparetor($Separetor);

        
	}
    function GetBook($id)
    {
        $r = new Book();
        $record = $this->FileManagerObj->GetWithId($id);
        $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $record);
        $r->getid = $ArrayLine[0];
        $r->getName = $ArrayLine[1];
        $r->getISBN = $ArrayLine[2];
        return $r;
    }
    function ListBooks()
    {
        $MyReturn = array();
        $myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("failed!");
        $i = 0;
        while (!feof($myfile)) {

            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $line);
            if ($ArrayLine[0] != "") {
                $MyReturn[$i] = $this->GetBook($ArrayLine[0]);
            }
            $i++;
        }
        fclose($myfile);
        return $MyReturn;
    }
    function Store()
    {
        $this->id = $this->FileManagerObj->GetLastId($this->FileManagerObj->getSeparetor()) + 1;
        $this->record = $this->id . "~" . $this->Name . "~" . $this->ISBN;
        $this->FileManagerObj->wrtie($this->record);
    }
    function update($FileManagerObj)
    {
        $contents = file_get_contents($this->FileManagerObj->getFileName());
        $record = $this->id . "~" . $this->Name . "~" . $this->ISBN;
        $old = $this->FileManagerObj->GetWithId($this->id);
        $contents = str_replace($old, $record . "\n", $contents);
        file_put_contents($this->FileManagerObj->getFileName(), $contents);
    }
	

	/**
	 * @return mixed
	 */
	function getName() {
		return $this->Name;
	}
	
	
	function setName($Name): self {
		$this->Name = $Name;
		return $this;
	}
	
	function getISBN() {
		return $this->ISBN;
	}
	
	
	function setISBN($ISBN): self {
		$this->ISBN = $ISBN;
		return $this;
	}
}
?>