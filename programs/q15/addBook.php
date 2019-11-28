<html>
    <body>
        <?php
        $conn = mysqli_connect("localhost","rahul","rahul","library");
        if($conn->connect_error){
            echo "Connection Error: ".$conn->connect_error;
        }
        else{
            echo "<script type=\"text/javascript\"> console.log(\"connection Successful\")</script>";
        }

        $accession_number = $_POST["accession_number"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $edition = $_POST["edition"];
        $publisher = $_POST["publisher"];

        $sql = "INSERT INTO book VALUES('$accession_number','$title','$author','$edition','$publisher')";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "Book added successfully";
        }else{
            echo "Constraint Voilation";
        }
        ?>
        <form action="search.php" method="POST">
            <label for="">Search: <input type="text" name="search" id=""></label><br><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>