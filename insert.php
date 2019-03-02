
<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Persons (PersonID, LastName, FirstName, Address, City) VALUES (1,'" . $_POST["lastname"] . "','". $_POST["firstName"] . "','tokyo to meguroku meguro 2-11-3','shiki');";
$result = $conn->query($sql);

$sql = "SELECT PersonID, Firstname, Address, Lastname FROM Persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div style='color: red;'><br> id: "
        . $row["PersonID"]
        . " - Name: "
        . $row["Firstname"]. " "
        . $row["Lastname"]. " "
        . $row["Address"]
        . "<br></div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
