<?php

		  $add = 'http://127.0.0.1:8000/api/user/';
      
      $json = file_get_contents($add);
  	 	$data = json_decode($json);
      

      echo "<pre>";
      print_r($data);
      echo "<br/><br/>";
  		
      if(!empty($json))
  		{
        $i=2;	
        foreach ($data as $key) 
        {
          print_r($data->data->fields);
          //print_r($key->data);
  			}
  		}
    echo "</pre>";
?>