<?php

        require_once "connection.php";

        if($_GET){

            
            $cpmy = $_GET['Comapny'];
            $pstn = $_GET['Position'];
            $yr = $_GET['Year'];
            $eprc = $_GET['Experience'];
            $cpmy2 = $_GET['Comapny2'];
            $pstn2 = $_GET['Position2'];
            $yr2 = $_GET['Year2'];
            $eprc2 = $_GET['Experience2'];

            $sql="INSERT INTO `expr`(`ComapnyName`, `Position`, `YearMonth`, `Experience`, `ComapnyName2`, `Position2`, `YearMonth2`, `Experience2`) VALUES ('$cpmy','$pstn','$yr','$eprc','$cpmy2','$pstn2','$yr2','$eprc2')";
            $res =$con->query($sql);
                if($res)
                        header("Location:index2.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>