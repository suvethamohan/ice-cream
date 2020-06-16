<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PRODUCTS</title>
</head>
<body>
<style type="text/css">
     body{
      margin:0;
	  padding:0;
	  }
 	 .content-table
	  {
	   border-collapse:collapse;
	   margin:25px;
	   font-size:0.9em;
	   min-width:500px;
	   border-radius:5px 5px 0 0;
	   overflow:hidden;
	   box-shadow:0 0 20px rgba(0,0,0,0.15);
	  } 
	  .content-table thead tr
	  {
	   background-color:#FF1493;
	   color:#ffffff;
	   text-align:center;
	   font-family:cursive;
	  }
	  .content-table tbody td
	  {
	  color:"800000";
	  font-family:cursive;
	  }
	  .content-table th,
	  ,content-table td
	  {
	   padding:12px 15px;
	  }
	  .content-table tbody tr
	  {
	   border-bottom:1px solid #dddddd;
	   font-family:cursive;
	  }
	  .content-table tbody tr:nth-of-type(even){
	   background-color:#f3f3f3;
	  }
	  .content-table tbody tr:last-of-type{
	   border-bottom:2px solid #009879;
	  }
	  .content-table tbody tr:hover{
	   background-color:PINK;
	  }
	  #h
	  {
	   width:30%;
	   font-size:50px;;
	   color:gray;
	   font-style:italic;
	   font-family:cursive,BOLD;
	   background-color:PINK;
	   border-radius:20px;
	   border:2px solid crimson;
	   }
	   #bk{
	  font-size:20px;
	  color:#009879;
	  }
	  #n1{
      width:200px;
      border:5px solid pink;
	  border-radius:10px;
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
     input::-webkit-input-placeholder
	 {
	  color:#009879;
	 }
	 a{
	  font-size:18px;
	  color:#009879;
	  cursor:pointer;
	  }
	  #sh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	  }
	 #eb{
	   background-color:#009879;
	   color:#FFFFFF;
	   padding:8px 17px;
	   }
	   #eb:hover{
	   background-color:#FFFFFF;
	   color:#009879;
	   cursor:pointer;
	   }
	   #tot{
	   font-size:22px;;
	   color:#009879;
	   font-style:italic;
	   font-family:cursive,BOLD;
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
nav{
            position:relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 10px 90 px;
            box-sizing: border-box;background: rgba(0,0,0,0.5);
        }
        nav .logo{
            padding: 22px 20px;
            height: 80px;
            float: left;
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            font-family:cursive;
            
        }
        nav ul{
            list-style: none;
            float: right;
            margin: 5px;
            padding: 10px;
            display: block;
        
        }
        nav ul li a{
            line-height: 80px;
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            font-family: cursive;
            
        }
        nav ul li a:hover{
            background-color: #fff;
            color: #000;
            border-radius: 6px;
        }
        nav ul li a.active{
            background: #e2472f;
            color: #fff;
            border-radius: 6px;
		}
		.button{
    width: 10%;
    padding: 5px 10px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right,#10dbff,#061fff);
    border: 0;
    outline: none;
    border-radius: 30px;
    font-family: cursive;
    font-weight: bold;
    font-size: 18px;
}

 </style>
</head>

<body>
<div class="img-area"></div>
    <nav>
    <div class="logo">Tom & Jerry</div>
        <ul>
        <li><a class="active" href="index.html">Back</a>
		<a class="active" href="dem.php">Next</a></li>
        </ul>
    </nav>
	
<center>
<h1 id="h">Tommy Flavours</h1>
<?php
$host="localhost";
$user="root";
$password="";
$db="new";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['submit']))
{
$oname=$_POST['name'];
$oprice=$_POST['price'];
$filename=$_FILES['img']['name'];
$tmpname=$_FILES['img']['tmp_name'];
if(empty($_POST['name']) && empty($filename) && empty($_POST['price']))
echo'<script>alert("Check All Fields!!!")</script>';
elseif(empty($_POST['name']))
echo'<script>alert("Check Item Name!!!")</script>';
elseif(empty($filename))
echo'<script>alert("Select Image!!!")</script>';
elseif(empty($_POST['price']))
echo'<script>alert("Check Price!!!")</script>';
else
{
$query=mysql_query("select * from two where name='$oname'");
$query1=mysql_query("select * from two where image='$filename'");
if(mysql_num_rows($query)>0)
 echo'<script>alert("Item Name Already Exist!!!")</script>';
elseif(mysql_num_rows($query1)>0)
  echo'<script>alert("Image Already Exist!!!")</script>';
else
{
move_uploaded_file($tmpname,"C:\wamp\www\jeni\upload/$filename");
$sql=mysql_query("insert into two(name,image,price) values ('$oname','$filename','$oprice')"); 
if($sql)
   echo'<script>alert("Data Inserted!!!")</script>';   
else
  echo'<script>alert("Not Inserted!!!")</script>';
}
}
}  ?>
<form method="post" action="#" enctype="multipart/form-data">
<table cellspacing="20">
<tr><td> <input type="text"  name="name" size="30" id="n1" placeholder=" NAME" value="<?php echo @$oname;?>"/></td></tr>
<tr><td> <input type="file"  name="img" size="30" id="n1" value="<?php echo $filename;?>"/></td></tr>
<tr><td><input type="text"  name="price" size="30" id="n1" placeholder="PRICE" maxlength="15" value="<?php echo @$oprice;?>"/></td></tr>
</table>
<button type="submit" name="submit" class="button">ADD ITEM</button><br />
</form>
<?php
//$cnt=mysql_query("select count(name) as total from two");
//$values=mysql_fetch_assoc($cnt);
//$num=$values['total']; ?>
<!--<h3 id="tot"><?php echo"TOTAL PRODUCT : $num"; ?></h3>-->
<h2>
<table  class="content-table" width="800" height="200">
<thead>
<tr><th>S.NO</th><th>ITEMS</th><th>IMAGE</th><th>PRICE</th></tr>
</thead>
<?php 
$res=mysql_query("select * from two");
while($row=mysql_fetch_array($res))
{
echo"<tbody><tr>";
echo"<td><center>".$row['id']."</center></td>";
echo"<td><center>".$row['name']."</center></td>";
echo"<td><center>"?><img src="<?php echo $row['image']; ?>" height="150" width="250" />
<?php
echo"</center></td><td><center>".$row['price']."</center></td>"; ?>
<?php echo "</td></tr></tbody>"; 
}
?>
</table>
</h2>

</center>
</body>
</html>