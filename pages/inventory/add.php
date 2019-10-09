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
                <span><a href="/inventory.php" style="font-weight: bold; text-decoration: underline;">Inventory</a> > Add</span>
            </div>
        </nav>

        <div class="col-12 mt-4 mb-4 bg-light">
            <button id="save" class="btn btn-outline-dark top-button">
                Save Changes
            </button>
            <button id="save_new" class="btn btn-outline-dark top-button">
                Save & Start New Item
            </button>
        </div>
        <hr>
        <div class="container m-0">
            <form id="add_form" action="add_query.php" method="post" >
                <div class="alert alert-danger display-error" style="display: none"></div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="model">Model (SKU)</span>
                            </div>
                            <input type="text" class="form-control" name="model" placeholder="Model (SKU)" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="UPC">UPC</span>
                            </div>
                            <input type="text" class="form-control" name="upc" placeholder="UPC">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="brand">Brand</span>
                            </div>
                            <select class="form-control" name="brand" id="">
                                <option>Samsung</option>
                                <option>Sony</option>
                                <option>LG</option>
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
                            <select class="form-control" name="category" id="">
                                <option>LED TV</option>
                                <option>QLED TV</option>
                                <option>OLED TV</option>
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
                            <input id="inventory" name="inventory" class="form-control" value="0" placeholder="Stock" type="number" step="1" required />
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
    <script type="text/javascript">
        $(document).ready(function() {


            $('#save_new').click(function(e){
                e.preventDefault();


                var model = $("input[name=model]").val();
                var upc = $("input[name=upc]").val();
                var brand = $("select[name=brand]").val();
                var category = $("select[name=category]").val();
                var price = $("input[name=price]").val();
                var cost = $("input[name=cost]").val();
                var inventory = $("input[name=inventory]").val();

                console.log(model+upc+brand+category+price+cost+inventory);
            });

            $('#save').click(function(e){
                e.preventDefault();


                var model = $("input[name=model]").val();
                var upc = $("input[name=upc]").val();
                var brand = $("input[name=brand]").val();
                var category = $("input[name=category]").val();
                var price = $("input[name=price]").val();
                var cost = $("input[name=cost]").val();
                var inventory = $("input[name=inventory]").val();



                $.ajax({
                    type: "POST",
                    url: "add_query.php",
                    dataType: "json",
                    data: {model:model, upc:upc, brand:brand, category:category, price:price, cost:cost, inventory:inventory},
                    success : function(data){
                        if (data.code == "200"){
                            alert("Success: " +data.msg);
                            location.reload();
                        } else {
                            $(".display-error").html("<ul>"+data.msg+"</ul>");
                            $(".display-error").css("display","block");
                        }
                    }
                });


            });
        });
    </script>
</div>
</body>
</html>