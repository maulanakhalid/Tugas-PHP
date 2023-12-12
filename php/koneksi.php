<html>
    <head>
    </head>
    <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

// Select the database
if (!mysqli_select_db($conn, $database)) {
    die("Database not found");
}

// Perform a query
$hasil = mysqli_query($conn, "SELECT * FROM user");

if (!$hasil) {
    die("Query failed");
}

// Get the number of columns
$jumlah_kolom = mysqli_num_fields($hasil);
echo "Number of columns: $jumlah_kolom<br>";


$jumlah_baris = mysqli_num_rows($hasil);
echo "Number of rows: $jumlah_baris<br>";

$sql = "INSERT INTO user (id_pengguna, user, password)
VALUES ('22090006', 'Maulana Muhammad', 'maulana123')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>

    </body>
</html>