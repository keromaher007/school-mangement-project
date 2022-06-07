<?php 
include_once("C:\wamp64\www\website\Back-End\Domain.php");
include_once("C:\wamp64\www\website\Back-End\FileManagerModel.php");
class RegistrationDetails extends domain
{
    
    private $RegistrationId;
    private $CourseId;
    public $record;
    
    

    function __construct()
    {
        $this->FileManagerObj = new FileManager;
        $FileName = "RegistrationDetails.txt";
        $Separetor = "~";
        $this->FileManagerObj->setFileName($FileName);
        $this->FileManagerObj->setSeparetor($Separetor);

        
	}
    function GetRegistration($id)
    {
        $r = new Payment();
        $record = $this->FileManagerObj->GetWithId($id);
        $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $record);
        $r->getid = $ArrayLine[0];
        $r->getSid = $ArrayLine[1];
        $r->getPStatus = $ArrayLine[2];
        return $r;
    }
    function ListRegistrations()
    {
        $MyReturn = array();
        $myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("failed!");
        $i = 0;
        while (!feof($myfile)) {

            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $line);
            if ($ArrayLine[0] != "") {
                $MyReturn[$i] = $this->GetRegistration($ArrayLine[0]);
            }
            $i++;
        }
        fclose($myfile);
        return $MyReturn;
    }
    function Store()
    {
        $this->id = $this->FileManagerObj->GetLastId($this->FileManagerObj->getSeparetor()) + 1;
        $this->record = $this->id . "~" . $this->RegistrationId . "~" . $this->CourseId ;
        $this->FileManagerObj->wrtie($this->record);
    }
    function update($FileManagerObj)
    {
        $contents = file_get_contents($this->FileManagerObj->getFileName());
        $record = $this->id . "~" . $this->RegistrationId . "~" . $this->CourseId ;
        $old = $this->FileManagerObj->GetWithId($this->id);
        $contents = str_replace($old, $record . "\n", $contents);
        file_put_contents($this->FileManagerObj->getFileName(), $contents);
    }
	
	function getRegistrationId() {
		return $this->RegistrationId;
	}
	
	
	function setRegistrationId($RegistrationId): self {
		$this->RegistrationId = $RegistrationId;
		return $this;
	}
	
	function getCourseId() {
		return $this->CourseId;
	}
	
	
	function setCourseId($CourseId): self {
		$this->CourseId = $CourseId;
		return $this;
	}
}
?>