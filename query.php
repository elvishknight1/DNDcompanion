
 <?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

    if(!$conn){
        die("Connection Failed");
    }

    $name = $_POST['name'];
    $value = $_POST['value'];
    
    $queryPOST = "INSERT INTO players('$name') VALUES('$value')";
    
    mysqli_query($conn, $queryPOST);
    mysqli_close($conn);

    echo $name . "," . $value;
?>