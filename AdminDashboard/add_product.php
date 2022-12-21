<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Product - SB Admin</title>
        <!-- bootstrap -->
        <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">   -->
        <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
        <!-- end of bootstrap -->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.js" ></script>
        <!-- css -->
        
        <!-- end css -->
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <?php include('bar.php');  ?>
 
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">welcome</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                 <!-- <h1>hellow </h1> -->
                                 <!-- table -->
                <div class="row">
                <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
                <!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a> -->
            </div>
            <div class="row">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Product category</th>
                        <th>Product details</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                            include('connect.php');
                            $sql = "SELECT * FROM products";

                            //use for MySQLi-OOP
                            // $query = $conn->query($sql);
                            // while($row = $query->fetch_assoc()){
                            //     echo 
                            //     "<tr>
                            //         <td>".$row['id']."</td>
                            //         <td>".$row['username']."</td>
                            //         <td>".$row['mobile']."</td>
                            //         <td>".$row['email']."</td>
                            //         <td>".$row['city']."</td>
                            //         <td>
                            //             <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                            //             <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                            //         </td>
                            //     </tr>";
                            //     include('edit_delete_modal.php');
                            // }
                            /////////////////

                            //use for MySQLi Procedural
                            $query = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($query)){
                             echo
                             "<tr>
                                 <td>".$row['product_id']."</td>
                                 <td>".$row['product_name']."</td>
                                 <td>".$row['product_price']."</td>
                                 <td>".$row['product_cat']."</td>
                                 <td>".$row['product_details']."</td>
                                 <td>
                                     <a href='#edit_".$row['product_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                     <a href='#delete_".$row['product_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                 </td>
                             </tr>";
                             // include('edit_delete_modal.php');
                            }
                            /////////////////

                        ?>
                    </tbody>
                </table>
            </div>
                                 <!-- end of table -->
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; opms-online product management system 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <!-- table -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
        <!-- end -->
    </body>
</html>
