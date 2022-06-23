<?php
include_once('config.php');

$query = "SELECT evento FROM eventos";

/* execute multi query */
if ($conexao->multi_query($query)) {
    do {
        /* store first result set */
        if ($result = $conexao->use_result()) {
            while ($row = $result->fetch_row()) {
                $dado=$row[0];
            }
            mysqli_free_result($result);
        }
        /* print divider */
        
    } while ($conexao->next_result());
}

?>


<?php
// sql to create table
$sql = "CREATE TABLE $dado (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
txt VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conexao->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conexao->error;
}

$conexao->close();
header('Location: index.php');
?>