<?php 
require_once '../includes/db.php'; // The mysql database connection script
$i = 0;

foreach ($_POST['item'] as $value) {
    // Execute statement:
    // UPDATE [Table] SET [Position] = $i WHERE [EntityId] = $value
    $i++;
}
?>