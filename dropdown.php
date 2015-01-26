<?php

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$branch = $_POST['branch'];

require 'connect.php';

if(isset($_POST['dropdownform'])){
    $fetchid = "SELECT branch_id FROM branch WHERE branch_name = '$branch'";
    $fetchiddata = mysql_query($fetchid);
    while($fetchrow = mysql_fetch_array($fetchiddata)){
        $branchid = $fetchrow['branch_id'];
        $updateform = "INSERT INTO dropdownform(name,mobile,branchid) VALUES ('$name','$mobile','$branchid')";
        mysql_query($updateform);
        echo "Successfull updation";
    }
}
?>