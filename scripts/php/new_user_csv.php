<?php
    include_once("db_connect.php");

    //if(isset($_POST('file'))) {
        $file = $_POST('file');
        $row = 1;
        $separator = $_POST('separator');
        $csv = fopen($file,"r");

        while(($data = str_getcsv($csv,$separator,'"')) !==FALSE) {
            $num = count($data);
            $row++;
            
            for($c=0; $c < $num; $c++) {
                echo $data[$c]."<br/>\n";
            }
        }
        fclose($csv);
    //}
?>