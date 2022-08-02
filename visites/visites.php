<!-- Francesc Roca Rodriguez -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "m14-practica7-froca";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE visites SET visites = visites+1 WHERE idvisites = 1";
$conn->query($sql);
$sql = "SELECT visites FROM visites WHERE idvisites = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $visits = $row["visites"];
    }
} else {
    $sql = "INSERT INTO `visites`(`idvisites`, `visites`) VALUES (1,1)";
    $conn->query($sql);
}
if (isset($visits)) {
    print_r ($visits);
}else{
    print_r(1);
}
$conn->close();
?>