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
                <span><a href="/sales.php" style="font-weight: bold; text-decoration: underline;">Sales</a> > New</span>
            </div>
        </nav>

    </div>

</div>
<?php include('../../includes/requires/js.php'); ?>
</body>
</html>