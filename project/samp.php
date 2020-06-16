<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>BILL</title>
<style type="text/css">
   body{
      margin:0;
	  padding:0;
	  background-size:cover;
	  }
	  tr
	  {
	   background-color:olivedrab;
	   color:#ffffff;
	   text-align:center;
	   font-family:cursive;
	  }
	  td
	  {
	  color:"800000";
	  font-family:cursive;
	  }
    #h
	  {
		margin-top:0%;
	   width:35%;
	   font-size:50px;;
	   color:white;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:10px;
	   text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue;
      }
	#hh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:190px;
	  }
	  #al{
	  margin-left:10px;
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
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        function sum() {
            var txtFirstNo = document.getElementById('txtFirstNo').value;
            var txtSecondNo = document.getElementById('txtSecondNo').value;
            var result = parseInt(txtSecondNo) - parseInt(txtFirstNo);
            if (!isNaN(result)) {
                document.getElementById('txtResult').value = result;
            }
        }
    </script>
</head>
<body>
<div class="img-area"></div>
<div class="logo">TOM & JERRY</div>
<ul>
		<li><a href="frme.html">Back</a>
		<a class="active" href="suv.php">To Make Report</a></li>
 </ul>
<center>
<h1 id="h">TOMMY FLAVOURS</h1>
<div id="al">
<?php
$host="localhost";
$user="root";
$password="";
$db="new";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$d=$_POST['bdate'];
$check=mysql_query("select * from orders where name='$n' and date='$d'");
if((empty($_POST['name']) && empty($_POST['bdate'])) or empty($_POST['name']) or empty($_POST['bdate']))
echo'<script>alert("Check Name & Date!!!")</script>';
elseif(mysql_num_rows($check)==0)
echo'<script>alert("Data Not Match!!!")</script>';
else
{
$tot=0;
$sum=0;
?>
<table width="451" height="140" border="1" cellspacing="6">
<tr><th width="130" align="left">NAME</th>
<td width="82" align="left"> <?php echo $n;?></td>
<th width="48">DATE</th>
<td width="198"> <?php echo  $d ;?></td>
</tr>
<tr><th>PRODUCT NAME</th><th>QUANTITY</th><th>PRICE</th><th>AMOUNT</th></tr>
<?php
$sql=mysql_query("select * from orders where name='$n' and date='$d'") or die(mysql_error());
while($row=mysql_fetch_array($sql))
{ 
$tot=$row['quantity']*$row['price']; ?>
<tr><td align="center"><?php echo $row['name']; ?></td>
<td align="center"><?php echo $row['quantity']; ?> </td>
<td align="center"><?php echo $row['price']; ?></td>
<td align="center"><?php echo $tot; ?></td></tr>
<?php
$temp=$tot;
$sum+=$temp;
 } ?>
<tr><td colspan="3" align="right">TOTAL</td><td align="center"><?php echo $sum;?></td></tr>

</table>

<?php }
} ?></div><br><br><br>
<center>
 <div style="border:2px solid gray;width: 350px;margin-left:1%; height:200px;
  background-color:darkkhaki;border-radius:10px;box-shadow:20px 20px 10px gray">
        <h2>BALANCE</h2>
        TOTAL: &nbsp;
        <input type="text" id="txtFirstNo" placeholder="please enter total" onkeyup="sum()" /><br /><br />
        AMOUNT:    
        <input type="text" id="txtSecondNo" placeholder="please enter given amount"onkeyup="sum()" />&nbsp;
        <br />
        <div style="padding-top:10px">
            Balance: &nbsp;
            <input type="text" id="txtResult" />
        </div></div>
</center>

</body>
</html>
