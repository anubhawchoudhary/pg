<html>
    <body>
        <?php 
        $conn = mysqli_connect("localhost","rahul","rahul","library");

        $search = $_POST["search"];
        echo "$search";
        $query = "SELECT * FROM registry WHERE name LIKE '%$search%'";

        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 0){
            echo "Not Found<br>";
        }
        else{
            echo "Found <br/>";
        }

        $row = mysqli_fetch_array($result);
        echo "Name: ".$row["name"];
        echo "<br/>Addr1: ".$row["address1"];
        echo "<br/>Addr2: ".$row["address2"];
        echo "<br/>Email ID: ".$row["email"];
        ?>
    </body>
</html>