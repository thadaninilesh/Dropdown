<html>
    <head>
        <title>Dropdown using php and MySQL</title>
    </head>
    <body>
        <form action="dropdown.php" method="post">
            <label for="branch">Select branch: 
                <select id="branch" name="branch">
                    <?php
                        include 'connect.php';
                        $fetchdata = "SELECT * from branch";
                        $fetcheddata = mysql_query($fetchdata);
                        while($fetchrow = mysql_fetch_array($fetcheddata)){
                                $data = $fetchrow['branch_name'];
                                echo "<option value='".$data."'>".$data."</option>";
                        }
                    ?>
                </select>
            </label>
            <br>
            <label for="name">Name: </label><input type="text" name="name" id="name"><br>
            <label for="mobile">Mobile: </label><input type="text" name="mobile" id="mobile"><br>
            <input type="submit" name="dropdownform" value="Update">
        </form>
    </body>
</html>