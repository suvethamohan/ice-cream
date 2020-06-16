<?php
function get_data()
{
	$connect = mysqli_connect("localhost","root","","new");
	$query = "SELECT * FROM two";
	$result=mysqli_query($connect, $query);
	$emp_data=array();
	while ($row = mysqli_fetch_array($result)) {
		$emp_data[] = array(
         'id'   => $row["id"],
         'name'   => $row["name"],
         'image'   => $row["image"],
         'price'   => $row["price"],
		);
	}
	return json_encode($emp_data);
}
echo '<pre>';
print_r(get_data());
echo '</pre>';

/*$file_name= date('d-m-Y').'.json';

if(file_put_contents($file_name,get_data()))
{
	echo $file_name . 'file created';
}
else{
	echo 'There is some error';
}*/
?>