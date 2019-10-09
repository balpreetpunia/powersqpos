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
                <span><a href="/inventory.php" style="font-weight: bold; text-decoration: underline;">Inventory</a> > View</span>
            </div>
        </nav>
        <div class="col-12 mt-4 mb-4 bg-light">
            <div class="input-group mb-3" id="stickForm">
                <input type="text" id="myInput"  class="form-control" name="model" placeholder="Search By Model..." title="Type in a model">
                <input type="text" id="myInputB" class="form-control" placeholder="Search By Brand..." title="Type in a brand">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        <hr>

        <div id="table-div" class="table-responsive-sm table-sm">
            <table id="myTable" class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Model</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Cost</th>
                    <th>Inventory</th>
                </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function() {


        $('#myInput').keyup(function (e) {
            $('#tbody').empty();
            var model = $("input[name=model]").val();
            console.log(model);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "view_query.php", //Relative or absolute path to response.php file
                data: {action: "load", model:model},
                success: function (response) {
                    $.each(response, function (index, obj) {
                        var row = $('<tr>');
                        row.append('<td>' + obj.id + '</td>');
                        row.append('<td>' + obj.model + '</td>');
                        row.append('<td>' + obj.brand + '</td>');
                        row.append('<td>' + obj.category + '</td>');
                        row.append('<td>' + obj.price + '</td>');
                        row.append('<td>' + obj.cost + '</td>');
                        row.append('<td>' + obj.inventory + '</td>');

                        $('table').append(row)
                    })
                }
            });
        });
    });
</script>
</body>