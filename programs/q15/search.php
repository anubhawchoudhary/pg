<html>
    <body>
        <?php 
        $conn = mysqli_connect("localhost","rahul","rahul","library");
        $search = $_POST["search"];
        $sql = "SELECT * FROM book WHERE title LIKE '%$search%'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc())
            {
                echo "Accession Number: ".$row["accession_number"]."<br>Title: ".$row["title"]."<br>Author: ".$row["author"]."<br>Edition: ".$row["edition"]."<br>Publisher: ".$row["publisher"]."<br><br>";
            }
        }
        $conn->close();
        ?>
    </body>
</html>