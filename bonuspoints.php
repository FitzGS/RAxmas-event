<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retroxeventxmas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Users
$user = array("FitzG","DrPixel","Slyshock","LootusMaximus","Blazekickn","GOGZero","Danver2618","Matheus2653","Chaykin","JAM","PabloTMF","kraftydinosaur","Thoreau","BenGhazi","kdecks","Salsa","Yakurena","Shmelyoff","Dexterspet","ViperZang","Pinto","EnigmaGameZ","FuturoReidoNatal","caricatur","Grenade44","Theztret00","Celeryyy","Gamechamp","Totaya");
//
$userl = count($user);
echo "<table width = '70%' border='1px' align='center'>";
echo "<tr></tr>";
for($l=0; $l<$userl; $l++){

//Consulta Table
echo "<tr>";

//AotW1
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND idcheevo= '14339' AND DateEarned BETWEEN '2017-12-01' AND '2017-12-09'";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//AotW2
echo "<td>";

echo "</td>";
//AotW3
echo "<td>";

echo "</td>";
//AotW4
echo "<td>";

echo "</td>";
//AotW5
echo "<td>";

echo "</td>";
//AotW6
echo "<td>";

echo "</td>";
/////////////////////Bonus Day Game

//02/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '2219' AND DateEarned='2017-12-02' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//03/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '1743' AND DateEarned='2017-12-03' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//04/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '330' AND DateEarned='2017-12-04' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '800' AND DateEarned='2017-12-04' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//05/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '7159' AND DateEarned='2017-12-05' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '573' AND DateEarned='2017-12-05' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//06/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '3805' AND DateEarned='2017-12-06' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10277' AND DateEarned='2017-12-06' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//07/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5241' AND DateEarned='2017-12-07' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '53' AND DateEarned='2017-12-07' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//08/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '704' AND DateEarned BETWEEN '2017-12-08' AND '2017-12-09'";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '8249' AND DateEarned='2017-12-08' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
//09/12
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '10247' AND DateEarned='2017-12-09' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '5234' AND DateEarned='2017-12-09' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";
echo "<td>";
$sql900="SELECT SUM(points) as Total FROM cheevos WHERE user='$user[$l]' AND gameid= '857' AND DateEarned='2017-12-09' ";
$resql900 =  mysqli_query($conn,$sql900);
$row = mysqli_fetch_assoc($resql900); 
echo $sum = $row['Total'];
echo "</td>";








echo "</tr>";

}

echo"</table>";
?>
