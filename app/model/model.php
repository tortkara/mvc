<?php




class model {


	function __construct()	{


	}



	function getData()	{

		//$result = DB::getAvailableDrivers();
		//print_r($result);

		$result = DB::queryFetchAllAssoc("select calldate from cdr limit 10");
		//print_r($result);

	}





}

?>