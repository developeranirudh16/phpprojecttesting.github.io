<?php

include 'hello.html';


if (array_key_exists('submit',$_POST)) {
    button();
}
  

function button(){
$random = rand(1,9999);
$try = $random.'jhkvb.html';
$trying = fopen($try, "w");
fclose($trying);


$text = '<!DOCTYPE html>
<head>
<html lang="en">
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap");
body{
    font-family: "Nanum Gothic", sans-serif;
    background-repeat: no-repeat;   
}    

#wish{
    position: absolute;
    top: 45%;
    left: 750px;
}

#result{
    position: absolute;
    top: 38%;
    left: 750px;
}


@media (min-width: 280px) and (max-width: 440px){

    #result{
        display: block;
        text-align: center;
        position: relative;
        margin-left: 3px;
        margin-right: 3px;
        font-size: 20px;
        top: 68px;
        left: 10px;
    }

    #wish{
        display: block;
        text-align: center;
        position: relative;
        margin-left: 3px;
        margin-right: 3px;
        font-size: 20px;
        top: 75px;
        left: 10px;
    }
}


    </style>
</head>
<body>

<img src="independence.jpg" class="img-fluid" alt="Responsive image">
    <h3 id="result"></h3>
   <h3 id="wish">Wishes you a Happy Independence Day</h3> 
    
<script>
    document.getElementById("result").innerHTML= localStorage.getItem("textvalue");
</script>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>';

$trtng = $random.'jhkvb.html';
$file = fopen($random.'jhkvb.html',"w");
echo fwrite($file, $text);
fclose($file);
#echo 'http://localhost/hm/'.$trtng;
echo 'http://localhost/hm/'.$random.'jhkvb.html';
echo "<a href=http://localhost/hm/".$random."jhkvb.html><h3>http://localhost/hm/".$random."jhkvb.html</h3></a><br>";
echo "<i class=fa-solid fa-code></i>Web App Developed By Professor";
}

?>