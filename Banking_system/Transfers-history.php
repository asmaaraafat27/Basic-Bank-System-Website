<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="CSS/t.css">
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
        <!-- End nav -->

        <!-- transfer history -->
        <section class="transfer-hist">
            <h1 class="heading-title">Transfer History</h1>
            <table class="transfer-table">
                <thead>
                    <tr>
                        <th>Sender ID</th>
                        <th>Receiver ID</th>
                        <th>Amount</th>
                        <th>[Data] [Time]</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //start connection
                        $con = mysqli_connect("localhost" , "root" , "" , "banking_system");
                        //try connection
                        if($con -> connect_error){
                            die("Connection Failed:" . $con -> connect_error);
                        }

                        // sql statement
                        $sql = "SELECT * FROM transfers";

                        $result = $con -> query($sql);

                        if($result -> num_rows > 0) {
                            while($row = $result -> fetch_assoc())
                            {
                                echo "<tr><td>".$row["Sender ID"]."</td><td>".$row["Receiver ID"]."</td><td>".$row["Amount"]."</td><td>".$row["Date"];
                            }
                            echo "</table>";
                        }
                        $con -> close();
                    ?>
                </tbody>
            </table>
        </section>
    <!-- Transfer History Section End -->
    </body>
</html>