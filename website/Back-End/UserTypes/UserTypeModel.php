<?php 
include_once("C:\wamp64\www\website\Back-End\Domain.php");
include_once("C:\wamp64\www\website\Back-End\FileManagerModel.php");
class UserType extends domain
{
    private $Type;
    public $record;
    
    

    function __construct()
    {
        $this->FileManagerObj = new FileManager;
        $FileName = "UserTypes.txt";
        $Separetor = "~";
        $this->FileManagerObj->setFileName($FileName);
        $this->FileManagerObj->setSeparetor($Separetor);

        
	}
    function GetUserType($id)
    {
        $r = new UserType();
        $record = $this->FileManagerObj->GetWithId($id);
        $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $record);
        $r->getid = $ArrayLine[0];
        $r->getType = $ArrayLine[1];
        return $r;
    }
    function ListUserTypes()
    {
        $MyReturn = array();
        $myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("failed!");
        $i = 0;
        while (!feof($myfile)) {

            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $line);
            if ($ArrayLine[0] != "") {
                $MyReturn[$i] = $this->GetUserType($ArrayLine[0]);
            }
            $i++;
        }
        fclose($myfile);
        return $MyReturn;
    }
    function Store()
    {
        $this->id = $this->FileManagerObj->GetLastId($this->FileManagerObj->getSeparetor()) + 1;
        $this->record = $this->id . "~" . $this->Type;
        $this->FileManagerObj->wrtie($this->record);
    }
    function update($FileManagerObj)
    {
        $contents = file_get_contents($this->FileManagerObj->getFileName());
        $record = $this->id . "~" . $this->Type;
        $old = $this->FileManagerObj->GetWithId($this->id);
        $contents = str_replace($old, $record . "\n", $contents);
        file_put_contents($this->FileManagerObj->getFileName(), $contents);
    }
	
	

	function getType() {
		return $this->Type;
	}
	
	
	function setType($Type): self {
		$this->Type = $Type;
		return $this;
	}
}
?>