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

        <!-- new css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
body {
color: #566787;
background: #f5f5f5;
font-family: 'Varela Round', sans-serif;
font-size: 13px;
}
.table-wrapper {
background: #fff;
padding: 20px 25px;
margin: 30px 0;
border-radius: 3px;
box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
padding-bottom: 15px;
background: #435d7d;
color: #fff;
padding: 16px 30px;
margin: -20px -25px 10px;
border-radius: 3px 3px 0 0;
}
.table-title h2 {
margin: 5px 0 0;
font-size: 24px;
}
.table-title .btn-group {
float: right;
}
.table-title .btn {
color: #fff;
float: right;
font-size: 13px;
border: none;
min-width: 50px;
border-radius: 2px;
border: none;
outline: none !important;
margin-left: 10px;
}
.table-title .btn i {
float: left;
font-size: 21px;
margin-right: 5px;
}
.table-title .btn span {
float: left;
margin-top: 2px;
}
table.table tr th, table.table tr td {
border-color: #e9e9e9;
padding: 12px 15px;
vertical-align: middle;
}
table.table tr th:first-child {
width: 60px;
}
table.table tr th:last-child {
width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
background: #f5f5f5;
}
table.table th i {
font-size: 13px;
margin: 0 5px;
cursor: pointer;
}
table.table td:last-child i {
opacity: 0.9;
font-size: 22px;
margin: 0 5px;
}
table.table td a {
font-weight: bold;
color: #566787;
display: inline-block;
text-decoration: none;
outline: none !important;
}
table.table td a:hover {
color: #2196F3;
}
table.table td a.edit {
color: #FFC107;
}
table.table td a.delete {
color: #F44336;
}
table.table td i {
font-size: 19px;
}
table.table .avatar {
border-radius: 50%;
vertical-align: middle;
margin-right: 10px;
}
.pagination {
float: right;
margin: 0 0 5px;
}
.pagination li a {
border: none;
font-size: 13px;
min-width: 30px;
min-height: 30px;
color: #999;
margin: 0 2px;
line-height: 30px;
border-radius: 2px !important;
text-align: center;
padding: 0 6px;
}
.pagination li a:hover {
color: #666;
}
.pagination li.active a, .pagination li.active a.page-link {
background: #03A9F4;
}
.pagination li.active a:hover {
background: #0397d6;
}
.pagination li.disabled i {
color: #ccc;
}
.pagination li i {
font-size: 16px;
padding-top: 6px
}
.hint-text {
float: left;
margin-top: 10px;
font-size: 13px;
}
/* Custom checkbox */
.custom-checkbox {
position: relative;
}
.custom-checkbox input[type="checkbox"] {
opacity: 0;
position: absolute;
margin: 5px 0 0 3px;
z-index: 9;
}
.custom-checkbox label:before{
width: 18px;
height: 18px;
}
.custom-checkbox label:before {
content: '';
margin-right: 10px;
display: inline-block;
vertical-align: text-top;
background: white;
border: 1px solid #bbb;
border-radius: 2px;
box-sizing: border-box;
z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
content: '';
position: absolute;
left: 6px;
top: 3px;
width: 6px;
height: 11px;
border: solid #000;
border-width: 0 3px 3px 0;
transform: inherit;
z-index: 3;
transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
border-color: #03A9F4;
background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
color: #b8b8b8;
cursor: auto;
box-shadow: none;
background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
padding: 20px 30px;
}
.modal .modal-content {
border-radius: 3px;
}
.modal .modal-footer {
background: #ecf0f1;
border-radius: 0 0 3px 3px;
}
.modal .modal-title {
display: inline-block;
}
.modal .form-control {
border-radius: 2px;
box-shadow: none;
border-color: #dddddd;
}
.modal textarea.form-control {
resize: vertical;
}
.modal .btn {
border-radius: 2px;
min-width: 100px;
}
.modal form label {
font-weight: normal;
}
</style>

        <!-- end css -->
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
                                    <a class="nav-link" href="product_manage.php">view product</a>
                                    <a class="nav-link" href="product_order.php">Order Product</a>
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

                        <!-- starting code -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Product</b></h2>
                    </div>
                    <div class="col-sm-6">
                         <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                     <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <div id="displayDataTable">
                                
            </div>
             
                <!-- <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                <li class="page-item disabled"><a href="#">Previous</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
                </div>
                </div> -->
                </div>
                <!-- Add Modal HTML -->
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Product</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="completename" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                       <input type="text" class="form-control" id="completeprice" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                       <input type="text" class="form-control" id="completecategory" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <input type="text" class="form-control" id="completedetail" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button type="submit" class="btn btn-success" value="Add"onclick="adduser()">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="updateModel" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Product</h4>
                                    <button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="updatename" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                       <input type="text" class="form-control" id="updateprice" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                       <input type="text" class="form-control" id="updatecategory" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <input type="text" class="form-control" id="updatedetail" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                   <input type="submit" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button type="submit" class="btn btn-success" value="Save"onclick="updatedetail()">Save</button>
                                    <!-- <button type="submit" class="btn btn-info" onclick="updatedetail()">save</button> -->
                                    <input type="hidden" id="hiddendata">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Product</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <!-- <input type="submit" class="btn btn-danger" onclick="deleteUser('.$id.')" value="Delete"> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                        <!-- end of code -->
                           
                       

                       
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
            var categoryAdd = $('#completecategory').val();
            var detailAdd = $('#completedetail').val();
            


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
                    $('#addEmployeeModal').modal("hide");
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

            $.post("http://localhost/OPMS_SHOP1/AdminDashboard/update.php",{
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
