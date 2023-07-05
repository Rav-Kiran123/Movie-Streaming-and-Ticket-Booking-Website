<?php
include("SESSION.PHP");?>
<!DOCTYPE html PUBLIC >
<html><head>
   <link rel="stylesheet" href="styles.css"> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
</script>
  <script src="script.js"></script> 
<style type="text/css">
/* unvisited link */
a:link {
color: red;
}
/* visited link */
a:visited {
color: #00FF00;
}
/* mouse over link */
a:hover {
color: violet;
}
/* selected link */
a:active {
color: #0000FF;
}
.movie{
background-image:
url("pics/background/header.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
font-family: Berlin Sans FB;
height: 270px;
width: 1100px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 0px;
text-shadow: rgb(255, 0, 0) 6px 5px 5px;

}
.bottom{
background-image:
url("pics/background/footer.jpg");
height: 150px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 1120px;
margin: 0px 0px 0px 150px;
float: left;
text-align:center;
}
.SECOND{
	margin: 0px;
	padding: 10px;
	border: 4px solid #0000ff;
	height: auto;
	width: auto;
	margin: 0px 25px 50px 140px;
	float: left;
	text-align: center;
	box-shadow: 0 0 20px rgba(81, 203, 238, 1);
} 
div.img img {
display: inline;
margin: 0px;
opacity:0.5;
filter:alpha(opacity=40);
border: 1px solid #ffffff;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
div.img a:hover img {
border: 1px solid #0000ff;
opacity:1.0;
filter:alpha(opacity=100);
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
margin: 5px;

}
div.img {
margin: 0px;
padding: 10px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
border: 4px solid #0000ff;
height: auto;
width: auto;
margin: 0px 25px 20px 15px;
float: left;
text-align: center;
} div.img img {
display: inline;
margin: 5px;
border: 1px solid #ffffff;
}
div.img a:hover img {
border: 1px solid #0000ff;
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
margin: 5px;
}
.style1 {color: rgb(255, 255, 51)}
.center{
background-color:;

border:#FFFFFF;
border:thick;
width:1400px;
height:1060px;
margin: 1px 0px 0px 120px;

}
</style><title>Movie Gallery</title>

</head>
<center>
<div class="center">
<body bgcolor="#000000" background="pics/background/b4.jpg">
<div class="movie">
<h2 style="font-size: 45px; text-align: left; text-shadow: rgb(255, 0, 0) 6px 5px 5px; color: yellow;">
<img alt="" style="float: left; width: 139px; height: 101px;" src="pics/background/logo.jpg">
<p style="color: yellow;">&nbsp; Movie
Ticket
Reservation</p>
</h2><p style="font-size: 20px; text-shadow: rgb(255, 0, 0) 8px 5px 5px; color: yellow; font-family: Lucida Calligraphy; font-style: italic; text-align: left; font-weight:bolder;">&nbsp;&nbsp;"&nbsp;Changing
your movie world experience </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;through
technology"</p>
<div id='cssmenu'><ul>
 <li class='active'">
 <a href="sample.php"><span>Logout</span></a></li> 
<li><p style="text-align:left;"><b><font color="white";font face="Courier New, Courier, monospace";>Welcome to Movie GALLERY!&nbsp;<?php echo $login_session; ?></fonr></p></li>
</ul>
</div>

</div>
<br>

<div style="margin-left: 138px; width: 119px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `cinema1`");
{
	$row=mysqli_fetch_array($query);
	echo"<a href='movie1.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
	}
	?>
<div class="desc">
  <p style="font:'Courier New', Courier, monospace; color:yellow; font-size:16px; text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `cinema1`");
{
	$row=mysqli_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['cinema']."<br></p>";
}
?>
  </div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `cinema2`");
{
	$row=mysqli_fetch_array($query);
	echo"<a href='movie2.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid" width="110px" height="114px" /><?php echo"</a><br>";
	}
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
<?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `cinema2`");
{
	$row=mysqli_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['cinema']."<br></p>";
}
?></div>
</div>

<div style="height: 248px; width: 120px; box-shadow:0 0 20px rgba(81, 203, 238, 1;" class="SECOND">
<?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `upcoming1`");
{
	$row=mysqli_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"";
	}
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `upcoming1`");
{
	$row=mysqli_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `upcoming2`");
{
	$row=mysqli_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"";
	}
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysqli_query($conn,"SELECT * FROM `upcoming2`");
{
	$row=mysqli_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>

<div class="bottom"><br>
&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p><span style="color: white;"><big>Online
  Movie Ticket Reservation</big></span><br>
  <span style="color: white;"><big><span style="color: white;">  Copyright 2</span></big></span><big style="color: white;">013-2014 by: Rosefield Uton<br>
All Rights Reserved</big></p>
</div>

</body>
</div>
</html>
