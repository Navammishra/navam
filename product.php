<?php

include('connection.php');
error_reporting(0);

        ?> 
		<html>
<head>
<title>HARDWARE STORE </title>

<style>
body {
  background-image: url('aaa.jpeg');
  background-size: cover;
  
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:black;

}

li {
    float: left;
 text-align:center;
 
}

li a {

    display: block;
    color: white;
    font-size:25px;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    

}

li a:hover {
    background-color:GREY;
}
</style>
</head>
<body><br>
<p align="center"> <font color="black" size="80">
<B><u> Hardware Store</u></b></font>
 </p>
      <br>

<table>    
<ul>
  <li><a class=" active"html" href="homepage.html">Home</a></li>
  <li><a href="product.php">Products </a></li>
  <li><a href="CONTACT.html">Contact us</a></li>
</ul>
</table>
<BR>
<div >
<p align="left" >
<h1><I>Products </I></h1></p>
</div>
<div  id="form_container"style="padding-left:50px;">

  <div id="myformstud" ="red">
  
  <form   method="post" name="formstd" onsubmit="return validation()" >
  
   
   <img src="cement.png" width="150" height="120"/> 
  <lable><b> Cement </b></label> &nbsp;&nbsp;&nbsp;&nbsp;
    <select  name="cement"   id="clss"value="select "  style="width:13.5%;"   >
	<option > select </option>
	<option value="null" >no</option>
	<option value="PPL" > PPL </option>
	<option value="PLUS" > PLUS </option>
	</select>
	<input type="text"  placeholder="enter quantity"  name="qu1"  id="s_nm" value="" >
  
  <br /> <br /> 
  <img src="TMT.jpg" width="150"/> 
  <lable><b>TMT</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select  name="tmt"   id="clss"value="select  "style="width:13.5%;"   >
	<option> select </option>
	<option value="null" >no</option>
	<option value="12" > 12 </option>
	<option value="10" > 10 </option>
	<option value="8" > 8 </option>
	
	<input type="text"  placeholder="enter quantity"  name="qu2"  id="s_nm" value="" >
  
 <br />  <br /> 
  <img src="pipes.jpg" width="150"/> 
  <lable><b>PIPES</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select  name="pipes"   value="select  " style="width:13.5%;"   >
	<option > select </option>
	<option value="null" >no</option>
	<option value="PVC" > PVC</option>
	<option value="GI" > GI</option>
	</select>
	<input type="text"  placeholder="enter quantity"  name="qu3"  id="s_nm" value="" >
  
  <br />  <br />  <br />  <br />  <br /> 
  
 <lable>------------------------------------- </label>  <lable>Name </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="text"  placeholder=" Name"  name="s_name"  id="s_nm" value="" >
  <br><br>
 <lable>------------------------------------- </label> <lable>Mob.no  </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text"  placeholder=" mobile.no"  name="moblie" id="mob"  value="" />
 <br><br>
 <lable>------------------------------------- </label><lable>Email  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
   <input type="text"  placeholder=" E-mail"  id="e_m" name="e_mail"  value=""   >
   <br><br>
 <lable>------------------------------------- </label> <lable>Address </label>&nbsp;&nbsp;&nbsp;
  <input type="text"  placeholder="address"  name="address"  value=""  id="ad_r"  "/>&nbsp;&nbsp;&nbsp;
  <button type="submit" name="submit" style=" color:#ffffff;  background-color:#000000;">buy</button>
    
  
  </form>
  
  
  
  
</div>
</div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
$nm=$_POST['s_name'];
 $mb=$_POST['moblie'];
 $eml=$_POST['e_mail'];
 $addr=$_POST['address'];
 $cmt=$_POST['cement'];
 $qul1=$_POST['qu1'];
  $tm=$_POST['tmt'];
  $qul2=$_POST['qu2'];
  $pip=$_POST['pipes'];
   $qul3=$_POST['qu3'];
   
   if($nm!="" && $mb!="" && $eml!="" && $addr!="" && $cmt!="select" && $qul1!="" && $tm!="select" && $qul2!="" && $pip!="select" && $qul3!="" )
   {  

$query ="insert into cm( uname, mbn, ad, EMAIL, cement1, q1, tmt1, q2, pipe1, q3) VALUES ('$nm', '$mb', '$addr', '$eml','$cmt', '$qul1', '$tm', '$qul2', '$pip', '$qul3')";
   $query_run = mysqli_query($con,$query);
  if($query_run)
 {
 echo'your order has been placed  ,  thanks for visting our store';
 
 }
   }
 else
   
 {
 
 echo'your order not completed';
 }
 
}
 
 ?>
   
   
  