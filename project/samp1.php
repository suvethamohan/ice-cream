<?php
$host="localhost";
$user="root";
$password="";
$db="new";
mysql_connect($host,$user,$password);
mysql_select_db($db);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BILL GENERATION</title>
<style type="text/css">
 body{
      margin:0;
	  padding:0;
	  background-size:cover;
	  }
 #n1{
      width:200px;
      border:2px solid #aaa;
	  border-radius:4px;
	  margin:8px 0;
	  outline:none;
	  padding:8px;
	  box-sizing:6px;
	  color:black;
	  transition:3s;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
    #h
	  {
		  margin-top:0%;
	   width:150%;
	   background-color:PINK;
	   border-radius:0px;
	   border:2px solid crimson;
	   font-size:50px;
	   color:gray;
	   font-family:cursive,BOLD;
	   margin-left:0px;
      } 
	  .b1{
    width: 30%;
    padding: 5px 10px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right,lightgreen,gold);
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
  	  #hh{
	   width:20%;
	   font-size:30px;;
	   color:white;
	   border-radius:10px;
	   background-color:olivedrab;
	   font-family:cursive,BOLD;
	   margin-left:80px;
	  }
     ::-webkit-input-placeholder
	  {
	  color:#000000;
	  font-size:9px;
	  font-family:"Times New Roman";
	  }
	  #sel
	  {
	  background:#FFFFCC;
	  }
	  #sel:hover{
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
            padding: 10px;
            display: block;
        
        }
         ul li a{
            line-height: 20px;
            color: #fff;
            padding: 10px 30px;
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
        <li><a class="active" href="index.html">Back</a></li>
 </ul>
<center>
<h1 id="h">Tommy Flavours</h1><br><br>
<h2 id="hh">BILLING
<center>
<form method="post" action="samp.php">
<br /><table>
<tr><td>
<select name="name" style="width:220px" id="n1">
<option value="">SELECT NAME</option>
<?php
$res=mysql_query("select name from orders");
while($row=mysql_fetch_array($res))
{?>
<option id="sel"><?php echo $row['name']; ?> </option>
<?php } ?></select>
<tr><td><input type="date" name="bdate" id="n1" placeholder="DD/MM/YYYY"/></td></tr>
</table><br />
<input type="submit" name="submit" value="BILL" class="b1" /><br /></form>
</center>
</h2>
</body>
</html>