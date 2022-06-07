<?php 
include_once("C:\wamp64\www\website\Back-End\Domain.php");
include_once("C:\wamp64\www\website\Back-End\FileManagerModel.php");
class Payment extends domain
{
    private $Name;
    private $PStatus;
    private $Day;
    private $Time;
    public $record;
    
    

    function __construct()
    {
        $this->FileManagerObj = new FileManager;
        $FileName = "Payments.txt";
        $Separetor = "~";
        $this->FileManagerObj->setFileName($FileName);
        $this->FileManagerObj->setSeparetor($Separetor);

        
	}
    function GetPayment($id)
    {
        $r = new Payment();
        $record = $this->FileManagerObj->GetWithId($id);
        $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $record);
        $r->getid = $ArrayLine[0];
        $r->getSid = $ArrayLine[1];
        $r->getPStatus = $ArrayLine[2];
        $r->getDay = $ArrayLine[3];
        $r->getTime = $ArrayLine[4];
        return $r;
    }
    function ListPayments()
    {
        $MyReturn = array();
        $myfile = fopen($this->FileManagerObj->getFileName(), "r+") or die("failed!");
        $i = 0;
        while (!feof($myfile)) {

            $line = fgets($myfile);
            $ArrayLine = explode($this->FileManagerObj->getSeparetor(), $line);
            if ($ArrayLine[0] != "") {
                $MyReturn[$i] = $this->GetPayment($ArrayLine[0]);
            }
            $i++;
        }
        fclose($myfile);
        return $MyReturn;
    }
    function Store()
    {
        $this->id = $this->FileManagerObj->GetLastId($this->FileManagerObj->getSeparetor()) + 1;
        $this->record = $this->id . "~" . $this->Sid . "~" . $this->PStatus . "~" . $this->Day . "~" . $this->Time;
        $this->FileManagerObj->wrtie($this->record);
    }
    function update($FileManagerObj)
    {
        $contents = file_get_contents($this->FileManagerObj->getFileName());
        $record = $this->id . "~" . $this->Sid . "~" . $this->PStatus . "~" . $this->Day . "~" . $this->Time;
        $old = $this->FileManagerObj->GetWithId($this->id);
        $contents = str_replace($old, $record . "\n", $contents);
        file_put_contents($this->FileManagerObj->getFileName(), $contents);
    }
	

	

	
	function getDay() {
		return $this->Day;
	}
	
	
	function setDay($Day): self {
		$this->Day = $Day;
		return $this;
	}
	
	function getTime() {
		return $this->Time;
	}
	
	
	function setTime($Time): self {
		$this->Time = $Time;
		return $this;
	}
	
	function getSid() {
		return $this->Sid;
	}
	
	
	function setSid($Sid): self {
		$this->Sid = $Sid;
		return $this;
	}
	
	function getPStatus() {
		return $this->PStatus;
	}
	
	
	function setPStatus($PStatus): self {
		$this->PStatus = $PStatus;
		return $this;
	}
}
?>