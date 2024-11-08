<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "view.css" >
    <title>View List</title>
</head>
<body>
    <header>
        <nav class="HeaderNav">
            <div id="LOGO">
                <a href="#">
                    <div id="IMG"></div>
                </a>
                <span><a id="LABEL" href="#">Pharmacy Inventory System</a></span>
            </div>
            <div>
                <ul id="MENU">
                    <li>
                        <a class="View" href="#">View</a>
                    </li>
                    <li>
                        <a class="Update" href="#">Update</a>
                    </li>
                    <li>
                        <a class="Delete" href="#">Delete</a>
                    </li>
                    <li>
                        <a class="Admin" href="#">Admin Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="main-con">
        <table>
            <tr> <br>
                <th>Name of the medicine</th>
                <th>Brand</th>
                <th>Mg Tablet</th>
                <th>Tablets Remaining</th>
                <th>Box Remaining</th>
                <th>Expiration Date</th>
                <th>Last Purchase</th>
            </tr>
       
            <?php 
            $conn = mysqli_connect("localhost", "root", " ", "company");
            if ($conn -> connect_error){
                die("Connection failed:". $conn -> connect_error);

            }

            $sql= "SELECT medicine_name, brand, mg_tablet, tablets_remaining, box_remaining, expiration_date, last_purchase_date from medicineInfo";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["medicine_name"]."</td><td>". $row["brand"]."</td><td>". $row["mg_tablet"]."</td><tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }
            $conn -> close();

            ?>

    </div>



    
</body>
</html>