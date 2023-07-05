<!DOCTYPE html PUBLIC>
<html><head>

   <link rel="stylesheet" href="styles.css"> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
</script>
  <script src="script.js"></script> 
<title>Login</title>

<style type="text/css">
/* unvisited link */
a:link {
color: green;
}
/* visited link */
a:visited {
color: #00FF00;
}
/* mouse over link */
a:hover {
color: #FF00FF;
}
/* selected link */
a:active {
color: #0000FF;
}
..movie{
background-image:
url("pics/background/header.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
font-family: Berlin Sans FB;
height: 259px;
width: 1030px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
margin: 0px 59px 0px 0px;
text-shadow: rgb(255, 0, 0) 6px 5px 5px;
}
.left{
background-color:black;
height: 700px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 200px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 140px;
float: left;
}
.mid{
background-image:url("pics/background/mid.jpg");
height: 706px;
width: 640px;
margin: 0px 0px 0px 300px;
float: left;
text-align:center;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}


.bottom{
background-image:
url("pics/background/footer.jpg");
height: 100px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 1055px;
margin: 1px 0px 0px 140px;
float: left;
text-align:center;
}
.style1 {color: rgb(255, 255, 51)}
input[type=text], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  border: 2px solid #DDDDDD;
 
}

input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  height:30px;
  width:300px;
  font-family:"Courier New", Courier, monospace;
  font-size:20px;
  text-align:center;
  font-weight:bolder;
}
.style1 {color: rgb(255, 255, 51)}
input[type=password], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
 
}

input[type=password]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  height:30px;
  width:300px;
  font-size:20px;
  text-align:center;
}
.style1 {color: rgb(255, 255, 51)}
input[type=submit], button {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  border: 2px solid #0066FF;
  height:35px;
  width:250px;
  font-family:Forte;
  font-size:18px;
  font-weight:bolder;
  cursor: wait;
}

input[type=submit]:focus, button:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 5px solid rgba(81, 203, 238, 1);
  height:50px;
  width:300px;
  text-align:center;
  font-family:"Courier New", Courier, monospace;
   background-color: #0099FF;
   
}
.center{
background-color:;

border:#FFFFFF;
border:thick;
width:1400px;
height:1100px;
margin: 1px 0px 0px 120px;

}
</style>
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
 <a href="Login.php"><span>Login</span></a></li> 
 <li><a href="REGISTRATION.php"><span>Sign Up</span></a></li> 
  <li><a href="HOME.php"><span>Home</span></a></li>
<li><a href="About.html"><span>About Us</span></a></li>
<li><a href="UPDATE.php"><span>List of movies</span></a></li>
</ul>
</div>
</div>

<div class="mid">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>
<br>
&nbsp;&nbsp;<img alt="" style="width: 234px; height: 51px;"src="pics/images%20%2824%29.jpg">

<form action="Account.php" method="post">



<div style="color: red;">

</div>
<p style="font-size: 20px; color: YELLOW; text-shadow: rgb(255, 0, 0) 6px 5px 5px;"><span style="font-weight: bold; font-family: Berlin Sans FB Demi; font-size: 30px;">Username:</span>
&nbsp;&nbsp;</p>
<p style="color: white;">&nbsp;
<input type="text" name="username" id="userid"   size="30"required="required" onFocus="this.style.border='4px solid yellow'"/><br>
<br>
</p>
<p style="font-size: 20px; color: YELLOW; text-shadow: rgb(255, 0, 0) 6px 5px 5px;"><span style="font-weight: bold; font-family: Berlin Sans FB Demi; font-size: 30px;">Password:
&nbsp;</span>
&nbsp;</p>
<p style="font-size: 20px; color: white;"> <input name="password" id="passid" type="password" size="30" required="required" onFocus="this.style.border='4px solid yellow'"/><br>
<br>
<input name="submits" value="Login Account" type="submit"></p>
</form>

</div>
<div class="right">
</div>
<div class="bottom">
&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; <br>
&nbsp;<span style="color: white;"><big>Online
Movie Ticket Reservation</big></span><br>
<span style="color: white;"></span>

<span style="color: white;"><big>&nbsp;<span style="color: white;">Copyright   2</span></big></span><big style="color: white;">022-2023 by: Rosefield Uton<br>
All Rights Reserved.</big>
</div>
</body></center>

</center>
</div></html>