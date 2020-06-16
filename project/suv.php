<?php
$link=mysqli_connect("localhost","root","","new");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REPORT</title>
<style type="text/css">
body
{
    margin: 0;
    padding: 0;
    background-image: url("images (1).jpg");
    background-size: cover;
	text-decoration:none;
}
a{
text-decoration:none;
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
            line-height: 15px;
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
    .b1{
    width: 90%;
    padding: 5px 30px;
    cursor: pointer;
    display:block;
    margin: auto;
    background: linear-gradient(to right,gold,pink);
    border: 15;
    outline: none;
    border-radius: 20px;
    font-family: cursive;
    font-weight: bold;
    font-size: 18px;
}
	.b1:hover{
	  background-color:#FFFFFF;
	  color:#009879;
	  cursor:pointer;
	   }
     #h
	  {
		  margin-top:0%;
	   width:100%;
	   background-color:PINK;
	   border-radius:0px;
	   border:2px solid crimson;
	   font-size:30px;
	   color:gray;
	   font-family:cursive,BOLD;
	   margin-left:0px;
      } 
      .date{
      width:80px;
	  margin:5px;
	  outline:none;
	  padding:0px;
	  box-sizing:4px;
	  color:white;
	  transition:3s;
	  margin-left:30px;
    font-family:Algerian;
	  }
</style>
</head>

<body>
<div class="img-area"></div>
<div class="logo">TOM & JERRY</div>
<ul>
		<li><a class="active" href="frme.html">Back</a></li>
 </ul>
<form action="suv.php" method="post" name="f1" autocomplete="off">
  <div align="center">
  <h1 id="h">Tommy Flavours</h1>
    <p>&nbsp;</p>
    <table width="250">
    <tr>
        <td width="156">
        <h2 class="date">Date :</h2></td>
    <td width="156"><p>
      <input type="date" name="date" />
    </p>
      </td>
    </tr>
      <tr>
        <td colspan="2" align="center"><p>&nbsp;
          </p>
          <p>
            <input type="submit" name="sub3" class="b1" value="VIEW REPORT" />
            <input type="submit" name="sub4" class="b1" value="DATEWISE REPORT" />
          </p></td>
    </tr>
    </table>
  </div>
</form><br>
<?php
if(isset($_POST['sub3']))
{
$res=mysqli_query($link,"select * from orders");
echo"<table border='2' align='center'style='margin-right:27%'>";
echo"<tr>";
echo"<th width='100' bgcolor=#0033FF>"; echo "ID"; echo"</td>";
echo"<th width='390' bgcolor=#0033FF>"; echo "NAME"; echo"</td>";
echo"<th width='100' bgcolor=#0033FF>"; echo "DATE"; echo"</td>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo"<tr>";
echo"<td width='30' height='30' bgcolor=#E6E6E6 align='center'>"; echo $row["id"]; echo"</td>";
echo"<td width='30' height='30' bgcolor=#E6E6E6 align='center'>"; echo $row["name"]; echo"</td>";
echo"<td width='30' height='30' bgcolor=#E6E6E6 align='center'>"; echo $row["date"]; echo"</td>";
echo"</tr>";
}
echo "</table>";
}

if(isset($_POST['sub4']))
{
  $sql="select count(name) as total from orders where date='$_POST[date]'";
  $result=mysqli_query($link,$sql);
  $values=mysqli_fetch_assoc($result);
  $num=$values['total'];
  echo "<h3 align='center' style='margin-right:-1%'>"; echo "Total Number of Products Sold: &nbsp;"; echo $num; echo "</h3>";
$res=mysqli_query($link,"select * from orders where date='$_POST[date]'");
echo"<table border='2' align='center' style='margin-right:38%'>";
echo"<tr>";
echo"<th width='100' bgcolor=#0033FF>"; echo "ID"; echo"</td>";
echo"<th width='100' bgcolor=#0033FF>"; echo "ITEM"; echo"</td>";
echo"<th width='100' bgcolor=#0033FF>"; echo "DATE"; echo"</td>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo"<tr>";
echo"<td width='30' height='30' bgcolor=#E6E6E6 align='center'>"; echo $row["id"]; echo"</td>";
echo"<td width='30' height='30' bgcolor=#E6E6E6 align='center'>"; echo $row["name"]; echo"</td>";
echo"<td width='30' height='30' bgcolor=#E6E6E6 align='center'>"; echo $row["date"]; echo"</td>";
echo"</tr>";
}
echo "</table>";
}

?>
</body>
</html>
