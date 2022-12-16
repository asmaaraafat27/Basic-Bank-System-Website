<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- end of links-->
</head>
    <body>
            <!-- nav -->
            <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="HomePage.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Customers.php">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Transfers.php">Transfers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Transfers-history.php">Transfers History</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!--end nav-->
        <section class="customers">
            <h1 class="heading-title">Here you can find our Customers</h1>
            <table class="customers-table">
                    <thead>
                        <tr>
                            <th>iD</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>e-mail</th>
                            <th>Current balance</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                            //creating database connection
                            $con = mysqli_connect("localhost", "root", "", "banking_system");

                            //check the database connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }
                            $sql = "SELECT * FROM customers";
                            
                            $result = $con -> query($sql);

                            if($result -> num_rows > 0) {
                                while($row = $result -> fetch_assoc())
                                {
                                    echo "<tr><td>".$row["ID"]."</td><td>".$row["First Name"]."</td><td>".$row["Last Name"]."</td><td>".$row["E-mail"]."</td><td>".$row["Current Balance"];
                                }
                                echo "</table>";
                            }
                            else
                            {
                                echo "no result founded";
                            }
                            $con-> close();
                    ?>
                 </tbody>
            </table>
        </section>
    </body>
</html>