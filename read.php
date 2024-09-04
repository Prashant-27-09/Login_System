<?php
    include 'partials/dbconn.php';



$students = $conn->prepare("select * from signup");
$students->execute();
$results = $students->get_result();
echo "<br/>";

echo "<table border=1>";
echo "<tr>";    
echo "<th>Name</th>";
echo "<th>Batch</th>";
echo "</tr>";
foreach($results as $item){
    echo "<tr>";    
    echo "<td>".$item["username"]."</td>";
    echo "<td>".$item["password"]."</td>";

    echo "</tr>";


}
echo "</table>";

?>
