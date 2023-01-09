<?php
$barr = array("IT" => 0, "FR" => 0, "GB" => 0, "PT" => 0, "CZ" => 0, "DE" => 0);
       
if (( $handle = fopen('services.csv',"r")) !== false){


    while (( $data = fgetcsv($handle, 1000, ",")) !== false) {

		$country=strtoupper($data[3]);  // convert to upper case for count
			if(strlen($country)==2){
				$barr[$country]++;}
	}

    fclose($handle);

	
	$mask = "| x | %-10.10s |%-10.10s | x |\n"; // Draw fixed width table of summary
	
	printf($mask, 'Country', 'Count');       
		
		foreach($barr as $x => $x_value) {
	
			printf($mask, $x , $x_value);

		}
}
?>
