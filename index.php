<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<p> <font color=blue font face='arial' size='18pt'>SHOW SYSTEM INFO</font> </p>";  
            echo " ".'</br>';
            echo " ".'</br>';
            
            echo "<font size=3' face='Arial'>";
            //echo "server name = " .gethostname().'</br>';
            echo "Local IP address = " .getHostByName(getHostName());
            echo " ".'</br>';
            echo "HOSTNAME = " .getenv('HOSTNAME');
            echo " ".'</br>';
            echo "PATH = " .getenv('PATH');
            echo " ".'</br>';
            echo "VAR1= " .getenv('VAR1');
            echo " ".'</br>';
            echo "VAR2= " .getenv('VAR2');
            echo " ".'</br>';
            echo " ".'</br>';
            echo " ".'</br>';
            echo " ".'</br>';
            echo " ".'</br>';
            echo " ".'</br>';
            
            echo "<font size=5' face='Arial'>";
            echo "v 1.2".'</br>';
            echo "1 Aout 2017";
        ?>
    </body>
</html>
