<?php
$servername = "localhost"; // תשאיר את זה לוקלאוסט
$username = "username"; // שם משתמש שלך בדרך כלל root 
$password = "password"; // כנל
$dbname = "DB"; // שם הדאטאבייס שלך

// התחברות עצמה
$conn = new mysqli($servername, $username, $password, $dbname);
// בדיקה של ההתחברות אתה לא חייב
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM mytable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // זה ידפיס לך הטבלה אוטומטית
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

//תפתח טבלה במיי אסקיואל עם הנתונים שלך ותשנה לפי זה את שם הטבלה 
תשדנה את הסיומת של הקובץ  לphp 
