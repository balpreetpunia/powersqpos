<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../../includes/requires/css.php'); ?>
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
                <span><a href="/inventory.php" style="font-weight: bold; text-decoration: underline;">Inventory</a> > Add</span>
            </div>
        </nav>

        <div class="col-12 mt-4 mb-4 bg-light">
            <button class="btn btn-outline-dark">
                Save Changes
            </button>
            <button class="btn btn-outline-dark">
                Save & Start New Item
            </button>
        </div>
        <hr>
        <div class="container m-0">
            <form>
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
                                <span class="input-group-text" id="UPC">UPC</span>
                            </div>
                            <input id="price" name="price" class="form-control" placeholder="Price" type="number" step="any" /
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="UPC">UPC</span>
                            </div>
                            <input id="price" name="price" class="form-control" placeholder="Price" type="number" step="any" /
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include('../../includes/requires/js.php'); ?>
</body>
</html>