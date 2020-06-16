
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start(); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER</title>
<style type="text/css">
 body{
      margin:0;
	  padding:0;
	  background-size:cover;
	  }
 #n1{
      width:200px;
      border:2px solid #aaa;
	  border-radius:5px;
	  margin:5px;
	  outline:none;
	  padding:8px;
	  box-sizing:6px;
	  color:black;
	  transition:3s;
	  border-color:deeppink;
	  margin-left:50px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
    #h
	  {
		margin-top:0%;
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:cursive,BOLD;
	   margin-left:270px;
      } 
  	  #hh{
	  color:white;
	  font-family:cursive;
	  background-color:lightgray;
	  width:30%;
	  border-radius:10px;
	  padding:10px;
	  box-shadow:0 0 8px 0 black;
	  }
	  #bk{
	  font-size:20px;
	  color:#009879;
	  margin-left:240px;
	  }
	  .b1{
    width: 30%;
    padding: 5px 10px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right,pink,deeppink);
    border: 0;
    outline: none;
    border-radius: 30px;
    font-family: cursive;
    font-weight: bold;
    font-size: 18px;
}
	.b1:hover{
	  background-color:#FFFFFF;
	  color:#009879;
	  cursor:pointer;
	   }
	 ::-webkit-input-placeholder
	  {
	  color:#009879;
	  }
	  #sh
	  {
	   width:20%;
	   font-size:30px;;
	   color:gray;
	   font-family:cursive;
	   background-color:PINK;
	   border-radius:8px;
	   border:2px solid crimson;
	   }
	  select{
	  cursor:pointer;
	  }
	  #qt1
	  {
	  background:#FFFFCC;
	  }
	  qt2
	  {
	  background:none;
	  }
	  #qt1:hover{
	  background:#009879;
	  color:#FFFFFF;
	  cursor:pointer;
	  }
	  .img-area{
    background-image: url("strawberry-shortcake-ice-cream-cake-www.thereciperebel.com-600-4-of-35-500x500.jpg");
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
    height: 100vh;
    position: fixed;
    left: 0;
    right: 0;
    z-index: -1;
    filter: blur(5px);
    -webkit-filter: blur(5px);
}
 .logo{
            padding: 8px 10px;
            height: 20px;
            float: left;
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            font-family:cursive;
            
        }
       ul{
            list-style: none;
            float: right;
            margin: 8px;
            padding: 5px;
            display: block;
        
        }
         ul li a{
            line-height: 20px;
            color: #fff;
            padding: 5px 30px;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            font-family: cursive;
            
        }
       ul li a:hover{
            background-color: #fff;
            color: #000;
            border-radius: 6px;
        }
         ul li a.active{
            background: #e2472f;
            color: #fff;
            border-radius: 6px;
		}

</style>
</head>
<body>
<div class="img-area"></div>
<div class="logo">TOM & JERRY</div>
<ul>
        <li><a class="active" href="index.html">Back</a>
		<a href="samp1.php"  target="#">Next</a></li>
 </ul>
<center>
<br>
<h2 id="hh">
<?php
$host="localhost";
$user="root";
$password="";
$db="new";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_REQUEST['id']))
{
$sid=$_REQUEST['id'];
$sql=mysql_query("select * from two where id='$sid'");
$row=mysql_fetch_array($sql);
}
?>
<?php
if(isset($_POST['submit']))
{
if(empty($_POST['quantity']))
echo'<script>alert("Select Quantity!!!")</script>';
else
{
if(!empty($_POST['name'])  && !empty($_POST['quantity']) && !empty($_POST['price']) && !empty($_POST['date']))
{
$n=$_POST['name'];
$q=$_POST['quantity']; 
$pr=$_POST['price'];
$d=$_POST['date'];
$exist=mysql_query("select * from orders where name='$n' and quantity='$q' and date='$d'");
if(mysql_num_rows($exist)>0)
 echo"<h3> ALREADY ORDERED!!</h3>";
else
{
$query="insert into orders(name,quantity,price,date) values ('$n','$q','$pr','$d')";
if(mysql_query($query)){
  echo'<script>alert("Order  Placed!!!");
location.href="samp1.php"; </script>';
}
else
 echo"<br><h3>ORDER FAILED<br></h3>";
}
}
}
}
?>
<form method="post" enctype="multipart/form-data">
<table>
<tr><td>ITEM: <input type="text" name="name" id="n1" placeholder="NAME" value="<?php echo @$_SESSION['name']; ?>" /></td></tr>&nbsp;
<tr><td> 
QTY:<select name="quantity" style="width:220px; margin-left:70px" id="n1">
<option value="">SELECT QUANTITY</option>
<option value="1" id="qt1">1</option>
<option value="2" id="qt1">2</option>
<option value="3" id="qt1">3</option>
<option value="3.5" id="qt2">3.5</option>
<option value="4" id="qt1">4</option>
<option value="4.5" id="qt2">4.5</option>
<option value="5" id="qt1">5</option>
<option value="5.5" id="qt2">5.5</option>
<option value="6" id="qt1">6</option>
<option value="6.5" id="qt2">6.5</option>
<option value="7" id="qt1">7</option>
<option value="7.5" id="qt2">7.5</option>
<option value="8" id="qt1">8</option>
<option value="8.5" id="qt2">8.5</option>
<option value="9" id="qt1">9</option>
<option value="9.5" id="qt2">9.5</option>
<option value="10" id="qt1">10</option></div>
</select></td></tr>&nbsp;
<tr>
  <td> PRICE:
    <input type="text" name="price" style="width:200px; margin-left:40px" value="<?php echo $row['price']; ?>" id="n1" readonly="readonly"/></td></tr>&nbsp;
<tr><td> <b>DATE:<input type="date" style="width:200px; margin-left:55px" name="date" value="<?php echo date("dd/mm/yyyy"); ?> "id="n1" /></b></td></tr>&nbsp;
</table>
<br /><input type="submit" name="submit" value="ORDER" class="b1"/>
</form>
</div>
</center>
</body>
</html>