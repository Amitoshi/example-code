<table>
<?php 

$db = new MySQLi("localhost","root","","join");

$sql = "SELECT Cname,Cityname,Sname 
		FROM country t1 
		INNER JOIN state t2 
		ON t1.Cid = t2.Cid 
		INNER JOIN city t3 
		ON t2.Sid = t3.Sid 
		";
$res = $db->query($sql);
while($row = $res->fetch_array()){
	echo "<br>";
	echo $row['Cname']." || ";
	echo $row['Sname']." || ";
	echo $row['Cityname'];
	echo "<br>";

}

?>
</table>
<hr>

<table>
<?php 

$db = new MySQLi("localhost","root","","join");

$sql = "SELECT COUNT(*) AS count
		FROM state WHERE Cid = '3' 
		 
		";
$res = $db->query($sql);
while($row = $res->fetch_array()){
	echo "<br>";

	echo $row['count']." || ";

	echo "<br>";

}

?>
</table>


<hr>

<table>
<?php 

$db = new MySQLi("localhost","root","","join");

$sql = "SELECT *, COUNT(*) AS count FROM state GROUP BY (Cid) HAVING COUNT(*) >1 
		 
		";
$res = $db->query($sql);
while($row = $res->fetch_array()){
	echo "<br>";

	echo $row['Sid']." || ";
	echo $row['Sname']." || ";
	echo $row['Cid']." || ";

	echo "<br>";

}

?>
</table>



<hr>
<!-- intersect -->

<table>
<?php 

$db = new MySQLi("localhost","root","","join");

$sql2 = "SELECT Cityname AS Ct  FROM city  UNION DISTINCT  SELECT Sname AS Sn FROM state  ";
$res2 = $db->query($sql2);

while($row2 = $res2->fetch_array()){
	echo "<br>";

	

	echo $row2['Ct']." || ";
	// echo $row2['Sn']." || ";

	echo "<br>";

}

?>
</table>

Q35 SELECT DISTINCT w.worker_id, w.first_name,w.salary,w.department FROM worker w,worker w1 WHERE w.salery=w1.salery AND w.worker_id != w1.worker_id
