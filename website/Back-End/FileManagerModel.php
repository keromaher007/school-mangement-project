<?php
class FileManager 
{
    
 private $FileName;
 private $Separetor;
 function __construct()
 {
 }

function GetLastId()
{
    if(!file_exists($this->FileName))
    {
        return 0;
    }
    $myfile = fopen($this->FileName,"r+") or die("failed!");
    $lastid=0;
    while(!feof($myfile))
    {
        $line=fgets($myfile);
        $ArrayLine = explode($this->Separetor,$line);
        if ($ArrayLine[0]!="")
        {
            $lastid=$ArrayLine[0];
        }
    }
    return $lastid;
}
function read()
{
    $myfile = fopen ($this->FileName,"r+") or die("failed!");
    while(!feof($myfile))
    {
        echo"<tr>";
        $line =fgets($myfile);
        $ArrayLine = explode($this->Separetor,$line);
        for ($i=0;$i<count($ArrayLine);$i++)
        {
        echo"<td>" .$ArrayLine[$i]."</td>";
        }
        echo"</tr>";
    }
}
function GetWithId($id)
{
    $myfile = fopen ($this->FileName,"r+") or die("failed!");
    while(!feof($myfile))
    {
        $line =fgets($myfile);
        $arrayline = explode($this->Separetor,$line);
        if ($arrayline[0]==$id)
        {
            return $line;
        }
       
    }
}
function wrtie($record)
{
    $myfile = fopen ($this->FileName,"a+") or die("failed!");
    fwrite($myfile,$record."\r\n");
}
function deleteRecord($record)
{
$contents= file_get_contents($this->FileName);
$contents = str_replace($record,"",$contents);
file_put_contents($this->FileName,$contents);
}

	
	
	function getSeparetor() {
		return $this->Separetor;
	}
	
	
	function setSeparetor($Separetor): self {
		$this->Separetor = $Separetor;
		return $this;
	}
	

	function getFileName() {
		return $this->FileName;
	}
	
	
	function setFileName($FileName): self {
		$this->FileName = $FileName;
		return $this;
	}
}

?>