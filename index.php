<?php
  require_once 'assets/connection/connection.php';   //* Include the connection to the database
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <!--  Extension Responsive Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!--  Logo For Page  -->
    <link href="assets/img/logo.png" rel="icon">
    <!--  CSS Local  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title> Data Tables </title>
</head>

<body>
    <header>
        <!-- beggin Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand me-2" href="index.php"><img src="assets/img/logo gift.gif" height="50" alt="MDB Logo"/></a>
                <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <!--  <li class="nav-link"> Data Tables </li> -->
                    </ul>
  
                    <div class="d-flex align-items-center">
                        <a data-mdb-ripple-init class="btn btn-dark btn-floating px-3 me-2" href="mailto:alejandrolopez190107@gmail.com" role="button"><i class="fab fa-google fa-2x"></i></a>
                        <a data-mdb-ripple-init class="btn btn-dark btn-floating px-3 me-2" href="https://www.linkedin.com/in/daniel-alejandro-l%C3%B3pez-herrera-477548241" target="_blank" role="button"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a data-mdb-ripple-init class="btn btn-dark btn-floating px-3 me-2" href="https://github.com/Alejandro-190107" target="_blank" role="button"><i class="fab fa-github fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->
    </header>

    <!-- beggin container -->
    <div class="container-table my-5">
        <div class="col-lg-8 mx-auto">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title"> <i class="fa-solid fa-user"></i> User Information  </h5> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <!-- begin table -->
                    <?php
                      // SQL query to obtain the data from the 'users' table
                      $sql = "SELECT user_id, first_name, last_name, gender FROM user_details";

                     // Prepare and execute the query
                      $stmt = $conn->prepare($sql);
                      $stmt->execute();

                      // Check if there are results
                      if ($stmt->rowCount() > 0) {
                    ?>
                    <table id="data" class="table table-hover table-borderless">
                      <thead>
                        <tr>
                          <th> # </th>  
                          <th> Full Name </th>  
                          <th> Gender </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          // Print each row of data
                          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                          <td><?php echo htmlspecialchars($row["user_id"]); ?></td>
                          <td><?php echo htmlspecialchars(ucwords(strtolower($row["first_name"])) . ' ' . ucwords(strtolower($row["last_name"]))); ?></td>
                          <td><?php echo htmlspecialchars($row["gender"]); ?></td>
                        </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                    </table>
                    <?php
                      } else {
                    ?>
                    <p> No se encontraron resultados. </p>
                    <?php
                      }
                     // Close the connection (optional, although PDO handles this automatically at the end of the script)
                      $conn = null;
                    ?>
                    <!-- end table -->
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->


    <!-- Footer -->
    <footer class="footer text-center text-lg-start fixed-bottom">
        <div class="text-center p-3">
            <p class="copyright"> <i class="fa-solid fa-copyright"></i> 2024 Copyright: <a class="copyright-link fw-bold" href="https://personal-portfolio-al.netlify.app/" target="_blank"> Alejandro López </a></p>
        </div>
    </footer>
    <!-- Footer -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
    <!-- Query DataTables -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>       
    <!-- JavaScript  DataTables -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!-- Framework Font Awesome -->
    <script src="https://kit.fontawesome.com/09ca335a75.js" crossorigin="anonymous"></script>
    <!-- JavaScript Local -->
    <script src="assets/js/main.js"></script>

</body>
</html>