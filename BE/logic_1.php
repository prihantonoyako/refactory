<html>
<head>
</head>
<body>
    <form action="#" method="GET">
        <input type="text" name="uang" placeholder="100.000"><br>
        <input type="submit" value="HITUNG">
    </form>
</body>
</html>

<?php
    function denominal($uang) {
        $pecahan = array();
        $temp = 0;
        $output = 0;
        while($uang != 0) {
            $temp = $uang % 10;
            $uang = floor($uang/10);
            array_push($pecahan,$temp);
        }
        $temp = count($pecahan); 
        while($temp != 0){
            $output = array_pop($pecahan);
            if($output!=0){
                $output *= pow(10,$temp-1);
                echo $output . "<br>";
            }
            $temp--;
        }
    }
    if(isset($_GET['uang'])){
        $uang = $_GET['uang'];
        $uang = str_replace(".","",$uang);
        $uang = (int) $uang;
        denominal($uang);
    }
?>