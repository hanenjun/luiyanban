<?php
 require('./config.php');
   $con = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME,PROT);
		function sql($con,$sql){
            $shuju = [];
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
              }
              $result =mysqli_query($con, $sql);
               if($result && $result!='1'){
                while($row = $result->fetch_assoc()) {
                    array_push($shuju,$row);
                }
               }
            mysqli_close($con);
            return $shuju;
        }