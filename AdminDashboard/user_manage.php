<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Product_management - SB Admin</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.js"></script>
        <!-- bootstrap css -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">OPMS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>product
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="product_manage.php">product manage</a>
                                    <a class="nav-link" href="add_product.php">Add Product</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open">
                                </i></div>user
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user_manage.php">User manage</a>
                                    <a class="nav-link" href="add_user.php">Add user</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <!-- <div class="container-fluid px-4"> -->
                        <!-- <h1 class="mt-4">Welcome to product management</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                        
                            <!-- Modal -->
                            <div class="modal fade" id="completeModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
            <div class="modal-body">
             <!-- form -->
                  <div class="form-group">
                    <label for="completename" class="form-label">Name</label>
                    <input type="text" class="form-control" id="completename" placeholder="Enter your product name" required>
                  </div>  
                   <div class="form-group">
                    <label for="completeprice" class="form-label">Price</label>
                    <input type="text" class="form-control" id="completeprice" placeholder="Enter your product price" required>
                  </div>  
                   <div class="form-group">
                    <label for="comletecategory" class="form-label">Category</label>
                    <input type="text" class="form-control" id="comletecategory" placeholder="Enter your product category" required>
                  </div>
                   <div class="form-group">
                    <label for="comletedetail" class="form-label">Detail</label>
                    <input type="text" class="form-control" id="comletedetail" placeholder="Enter your product detail" required>
                  </div>
                
                <!-- end of form -->
            </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!-- end model -->
                        <!-- update model -->
                        <div class="modal fade" id="updateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
            <div class="modal-body">
             <!-- form -->
                  <div class="form-group">
                    <label for="updatename" class="form-label">Name</label>
                    <input type="text" class="form-control" id="updatename" placeholder="Enter your product name" required>
                  </div>  
                   <div class="form-group">
                    <label for="updateprice" class="form-label">Price</label>
                    <input type="text" class="form-control" id="updateprice" placeholder="Enter your product price" required>
                  </div>  
                   <div class="form-group">
                    <label for="updatecategory" class="form-label">Category</label>
                    <input type="text" class="form-control" id="updatecategory" placeholder="Enter your product category" required>
                  </div>
                   <div class="form-group">
                    <label for="updatedetail" class="form-label">Detail</label>
                    <input type="text" class="form-control" id="updatedetail" placeholder="Enter your product detail" required>
                  </div>
                
                <!-- end of form -->
            </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" onclick="updatedetail()">update</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <input type="hidden" id="hiddendata">
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!-- end of update model -->

                       <div class="container my-3">
                           <h3 class="text-center">Welcome to online product management system</h3>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModel">
                              Add New Product
                            </button>
                            <div id="displayDataTable">
                                
                            </div>
                         </div>

                    <!-- </div> -->
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; opms-online product management system 2022</div>
                            <div>
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
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->
        <!-- bootstrap js -->
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>

    <script>

        $(document).ready(function(){
            displayData();
        });

        // display function
        function displayData(){
            var displayData="true";
            $.ajax({
                url:"display.php",
                type:"post",
                data:{
                    displaySend:displayData
                },
                success:function(data,status){
                    $('#displayDataTable').html(data);
                }

            });
        }
        function adduser(){
            var nameAdd = $('#completename').val();
            var priceAdd = $('#completeprice').val();
            var categoryAdd = $('#comletecategory').val();
            var detailAdd = $('#comletedetail').val();
            


            $.ajax({
                url:"http://localhost/OPMS_SHOP1/AdminDashboard/insert.php",
                type:'post',
                data:{
                   nameSend:nameAdd,
                   priceSend:priceAdd,
                   categorySend:categoryAdd,
                   detailSend:detailAdd 
                },
                success:function(data){
                    //function to display data
                    // console.log('result',data); 
                    $('#completeModel').modal("hide");
                    displayData();   
                }
            }); 
        }
        //delete record
        function deleteUser(deleteid){
            $.ajax({
                url:"http://localhost/OPMS_SHOP1/AdminDashboard/delete.php",
                type:"post",
                data:{
                    deletesend:deleteid
                },
                success:function(data,status){
                    displayData();  
                }
            });
        }
        //update function
        function getDetail(updateid){
            $('#hiddendata').val(updateid);

            $.post("http://localhost/OPMS_SHOP1/AdminDashboard/update.php",{updateid:updateid},function(data,status){
                var userid = JSON.parse(data);
                $('#updatename').val(userid.product_name);
                $('#updateprice').val(userid.product_price);
                $('#updatecategory').val(userid.product_cat);
                $('#updatedetail').val(userid.product_details);
            });

            $('#updateModel').modal("show");
        }

        //onclict update 
        function updatedetail(){
            var updatename = $('#updatename').val();
            var updateprice = $('#updateprice').val();
            var updatecategory = $('#updatecategory').val();
            var updatedetail = $('#updatedetail').val();
            var hiddendata = $('#hiddendata').val();

            $.post("update.php",{
                updatename:updatename,
                updateprice:updateprice,
                updatecategory:updatecategory,
                updatedetail:updatedetail,
                hiddendata:hiddendata
            },function(data,status){
                $('#updateModel').modal("hide");
                displayData(); 
            });
        }
    </script>


    </body>
</html>
