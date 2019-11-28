<html>
    <body>
        <?php 
            $conn = mysqli_connect("localhost","rahul","rahul","library");
            if($conn->connect_error){
                die("Connection falied: ".$conn->connect_error);
            }
            else{
                echo "connection success";
            }

            $name = $_POST["name"];
            $addr1 = $_POST["addr1"];
            $addr2 = $_POST["addr2"];
            $email = $_POST["email"];

            $query = "INSERT INTO registry VALUES ('$name','$addr1','$addr2','$email')";
            if($result = mysqli_query($conn,$query))
                echo "Query successful<br/>";
            else {
                echo "Constraint voilation<br/>".$conn.error;
            }
        ?>
         <form action="PHPdisp1.php" method="post">
            <label>Enter name to search for: <input type="text" name="search"></label><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>