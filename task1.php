<?php

       $handle =fopen('services.csv',"r");
	   
	   echo "please input a 2 letter country code \n";
	   
	   $var1 = readline();
	   
	   $var1 = substr($var1,0,2);

       while (( $data = fgetcsv($handle, 1000, ",")) !== false) {

			if ($var1===$data[3] || strcasecmp($var1, $data[3]) == 0){

				echo "The service from the selected country " . $var1 . " is ";
				echo($data[2] ."\n");
			}
		}
	   	
        fclose($handle);

		
?>