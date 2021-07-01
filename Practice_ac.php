<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "ticket");
$query ="insert into feedback(quality_score, feedback)values($q_score, '$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif; color:black; font-size:20px; background-color:#dadada; padding:100px;}
.form_box{width:400px; padding:10px; background-color:white; height:600px; width:100%; line-height:40px; background-image: url('27.jpg'); background-size: 1500px;}

input{padding:5px;  margin-bottom:5px;}
input[type="submit"]{border:none; outlin:none; background-color:#679f1b; color:white;}
.heading{background-color:#ac1219; color:white; height:50px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}

</style>

<br>
<br>
<a href="index.php">Home</a>