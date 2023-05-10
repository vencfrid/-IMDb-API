<?php
if(isset($_GET["search"]))
{
	$data=array();
	foreach ($_GET as $key => $value) 
	{
    	$index = $key;
    	if (!empty($value)) 
    	{
    		$data[''.$index.''] = ''.$value.'';	// vytvoří array všech postů pro classy
    	}   			
	}
 
	if(isset($_GET["searchwd"]))
	{
		$data=array();
		foreach ($_GET as $key => $value) 
		{
	    	$index = $key;
	    	if (!empty($value)) 
	    	{
	    		
	    			//$data['s'] = $data['search'];
	    		}
	    		$data['s'] = ''.$value.'';	// vytvoří array všech postů pro classy
	    	}
	    	var_dump($data);   			
		}
	//var_dump($data);
	include "dbh_class.php";
	include "sHistory_class.php";
	include "searchInfo_class.php";
	$movieInfo = new SearchInfo($data);
	session_start();
	$_SESSION['OMDbData'] = $movieInfo->getInfo();
	header("location: index.php?".$data['s']."");
}
else if(isset($_GET["searchwd"]))
{
	$data=array();
	foreach ($_GET as $key => $value) 
	{
    	$index = $key;
    	if (!empty($value)) 
    	{
    		
    			//$data['s'] = $data['search'];
    		}
    		$data['s'] = ''.$value.'';	// vytvoří array všech postů pro classy
    	}
    include "dbh_class.php";
	include "sHistory_class.php";
	include "searchInfo_class.php";
	$movieInfo = new SearchInfo($data);
	session_start();
	$_SESSION['OMDbData'] = $movieInfo->getInfo();
	header("location: index.php?s=".$data['s']."");			
}

