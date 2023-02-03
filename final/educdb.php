<?php

        require_once "connection.php";

        if($_GET){

            
            $yr = $_GET['Year'];
            $schl = $_GET['school'];
            $yr2 = $_GET['Years2'];
            $schl2 = $_GET['Schools2'];
            $yr3 = $_GET['Years3'];
            $schl3 = $_GET['Schools3'];
            $img = $_GET['image'];

            $sql="INSERT INTO `educ`( `year`, `school`, `year2`, `school2`, `year3`, `school3`, `image`) VALUES ('$yr','$schl','$yr2','$schl2','$yr3','$schl3','$img')";
            $res = $con->query($sql);
                if($res)
                        header("Location:crtf.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>