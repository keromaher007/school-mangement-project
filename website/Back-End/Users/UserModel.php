<?php 
include_once("C:\wamp64\www\website\Back-End\Domain.php");
include_once("C:\wamp64\www\website\Back-End\FileManagerModel.php");
class user extends domain
{
    private $Fname;
    private $Lname;
    public $record;
    
    

    function __construct()
    {
        $this->FileManagerObj = new FileManager;
        $FileName = "Users.txt";
        $Separetor = "~";
        $this->FileManagerObj->setFileName($FileName);
        $this->FileManagerObj->setSeparetor($Separetor);

        
	}
    function GetUser($id)
    {
        $r = new user();
        $record = $this->FileManagerObj->GetWithId($id);
        $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $record);
        $r->getid = $ArrayLine[0];
        $r->getFname = $ArrayLine[1];
        $r->getLname = $ArrayLine[2];
        return $r;
    }
    function SearchUser($Search)
    {
        $myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("failed!");
        while (!feof($myfile)) 
        {

            $line = fgets($myfile);
            $i = strpos($line,$Search);
            if($i>0 && $i !=NULL)
            {
                return $line;
            }
            fclose($myfile);
            return false;
        }
    }
    function ListUsers()
    {
        $MyReturn = array();
        $myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("failed!");
        $i = 0;
        while (!feof($myfile)) {

            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $line);
            if ($ArrayLine[0] != "") {
                $MyReturn[$i] = $this->GetUser($ArrayLine[0]);
            }
            $i++;
        }
        fclose($myfile);
        return $MyReturn;
    }
    function Store()
    {
        $this->id = $this->FileManagerObj->GetLastId($this->FileManagerObj->getSeparetor()) + 1;
        $this->record = $this->id . "~" . $this->Fname . "~" . $this->Lname;
        $this->FileManagerObj->wrtie($this->record);
    }
    function update($FileManagerObj)
    {
        $contents = file_get_contents($this->FileManagerObj->getFileName());
        $record = $this->id . "~" . $this->Fname . "~" . $this->Lname;
        $old = $this->FileManagerObj->GetWithId($this->id);
        $contents = str_replace($old, $record . "\n", $contents);
        file_put_contents($this->FileManagerObj->getFileName(), $contents);
    }
	
	function getFname() {
		return $this->Fname;
	}
	
	
	function setFname($Fname): self {
		$this->Fname = $Fname;
		return $this;
	}
	
	function getLname() {
		return $this->Lname;
	}
	
	function setLname($Lname): self {
		$this->Lname = $Lname;
		return $this;
	}
	
	function getRecord() {
		return $this->record;
	}
	
	
	function setRecord($record): self {
		$this->record = $record;
		return $this;
	}
}
