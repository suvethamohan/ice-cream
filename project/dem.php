
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER FORM</title>
<style type="text/css">
     body{
      margin:0;
	  padding:0;
	  background-image:url();
	  }
 	  #h
	  {
		margin-top:0%;
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
	   #bk{
	  font-size:20px;
	  color:#009879;
	  vertical-align:baseline;
	  }
	  #sh
	  {
	   width:100%;
	   font-size:30px;;
	   color:gray;
	   font-style:bold;
	   font-family:cursive,BOLD;
	   background-color:PINK;
	   border-radius:0px;
	   border:2px solid crimson;
	   }
	*
	{
	margin:0px;
	padding:0px;
	}
	.cards{
	float:left;
	width:13.8%;
	background-color:#FFFFFF;
	border:3px solid deeppink;
	margin-top:20px;
	margin-bottom:50px;
	border-radius:8px;
	margin:0px;
	box-shadow:2px 2px 10px #009879;
	}
	.cards:hover{
	box-shadow:2px 5px 10px #FFFFCC;
	}
	.img img{
	margin-top:2px;
	width:99%;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
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
            color: black;
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
        <li><a class="active" href="index.html">Back</a></li>
 </ul>
<center>
<h2 id="sh">ORDER YOUR FLAVOURS</h2><br />
<h3>
<?php
$host="localhost";
$user="root";
$password="";
$db="new";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$res=mysql_query("select * from two");
while($row=mysql_fetch_array($res))
{?>
<div class="cards">
<div class="img">
<?php echo"<a href=order.php?id=".$row['id']." target='f2'>"; ?>
<img src="<?php echo $row['image']; ?>" height="120" width="212" />
<?php echo "</a>"; ?> </div>
<div class="name">
<?php echo $row['name']; ?></div>
<?php echo "$.".$row['price'];?></div>
<?php }
?>
</h2></center>
</body>
</html>