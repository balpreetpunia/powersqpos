<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../../includes/requires/css.php'); ?>
    <?php include('../../includes/requires/js.php'); ?>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <?php include('../../includes/requires/sidebar.php'); ?>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                </button>
                <span><a href="/sales.php" style="font-weight: bold; text-decoration: underline;">Sales</a> > New</span>
            </div>
        </nav>

        <div class="col-12 mt-4 mb-4 bg-light">
            <button class="btn btn-outline-dark top-button">
                <i class="fas fa-user"></i> Add Customer
            </button>
            <button class="btn btn-outline-dark top-button">
                <i class="fas fa-user-plus"></i> New Customer
            </button>
            <button class="btn btn-outline-dark top-button">
                <i class="fas fa-shopping-cart"></i> Add Product
            </button>
            <button class="btn btn-outline-dark top-button">
                <i class="fas fa-cart-plus"></i> New Product
            </button>
        </div>
        <hr>
        <div class="container m-0">
            <form action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="model">Model (SKU)</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Model (SKU)">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="UPC">UPC</span>
                            </div>
                            <input type="text" class="form-control" placeholder="UPC">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="brand">Brand</span>
                            </div>
                            <select class="form-control" id="">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="category">Category</span>
                            </div>
                            <select class="form-control" id="">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Price (MAP)</span>
                            </div>
                            <input id="price" name="price" class="form-control" placeholder="Price" type="number" step="any" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Cost</span>
                            </div>
                            <input id="cost" name="cost" class="form-control" placeholder="Cost" type="number" step="any" />
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('#stepup').click(function() {
                                var value = parseInt($('#inventory').val());
                                $('#inventory').val(value+1);
                            });
                            $('#stepdown').click(function() {
                                var value = parseInt($('#inventory').val());
                                $('#inventory').val(value-1);
                            });
                        });
                    </script>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Stock</span>
                            </div>
                            <input id="inventory" name="inventory" class="form-control" value="0" placeholder="Stock" type="number" step="1" />
                            <div class="input-group-append">
                                <span id="stepup" class="input-group-text btn">+</span>
                            </div>
                            <div class="input-group-append">
                                <span id="stepdown" class="input-group-text btn">-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
</body>
</html>