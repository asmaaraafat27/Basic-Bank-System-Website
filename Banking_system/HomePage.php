<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- end of links-->
</head>
<html>
    <body>
        <!-- nav -->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <span>Banking System</span>
                    </a>
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

        <!-- body -->
        <div class="home">
            <div class="landing" style="background-image: url(images/bank.jpeg.jpg);">
                <div class="content">
                    <span>Online Money Transfer</span>
                </div>
            </div>
        </div>
        <!--end body -->

        <!-- start footer -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <span>All rights goes to <a href="https://www.linkedin.com/in/asmaaraafat/" target="_blank">Asmaa Raafat</a> & <a href="https://www.thesparksfoundationsingapore.org/" target="_blank">The Sparks Foundation</a></span>
                </div>
            </div>
        </section>
        <!-- end footer -->
    </body>
</html>