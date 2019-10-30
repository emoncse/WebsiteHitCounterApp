 <?php include 'hit-counter.php' ?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visitor Hit Counter</title>
<style>

body{
 margin:0px;
 }

.home{
 width: 500px;
 height:200px;
 border-radius: 5px;
 border: 1px solid #ccc;
 background-color:#E3F8F9;
 }
.counter{
 
 width:100px;
 height:20px;
 border-radius: 5px;
 border: 1px solid #ccc;
 padding: 14px 14px 14px 14px; 
 background-color:#A02325;
 font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
 font-size:22px;
 color:#FBF7F7;
 margin-top:65px;
 float:left;
 
 }
 
.sampleText{
 
 font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
 font-size:22px;
 color:#A02325;
 margin-top:80px;
 float:left;
 margin-left:70px;
 margin-right:20px;
 
 }
</style>

</head>

<body>
<center>
<div class="home">

<div class="sampleText"> Hits on Website = </div>
<div class="counter"> <?php HitCounter(); ?> </div>

</div>
</center>
</body>
</html>
