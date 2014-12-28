<?php
include "database/Database.php";


if(isset($_POST['id'])) {
    
    $id = $_POST['id'];
    echo "Success Fully Deleted Record \n";
    deleteRow("subscription", "tableId", $id);
}

function deleteRow($tablename, $columnname, $value) {
    $db = new Database;
    $dbh = $db->Connection();
    $sql = "DELETE FROM ".$tablename." WHERE ".$columnname." = :id";
    $stmt = $dbh->prepare($sql);
    //echo $sql;
    //$result=$stmt->columnCount();
    $stmt->bindParam(':id', $value, PDO::PARAM_STR);
    $result = $stmt->execute();
    return $result;
}

    

?>