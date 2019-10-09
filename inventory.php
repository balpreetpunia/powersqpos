<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once('includes/requires/css.php'); ?>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <?php include_once ('includes/requires/sidebar.php'); ?>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                </button>
                <span>Inventory</span>
            </div>
        </nav>

        <div id="body" class="container p-0 m-0">
            <ul class="options">
                <li>
                    <button class="btn btn-outline-dark" onclick="location.href='<?='/pages/inventory/add.php\''?>">
                        <span style="font-size: 3rem">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="block">Add</span>
                    </button>
                </li>
                <li>
                    <button class="btn btn-outline-dark" onclick="location.href='<?='/pages/inventory/view.php\''?>">
                        <span style="font-size: 3rem">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="block">View</span>
                </li>
                <li>
                    <button class="btn btn-outline-dark">
                        <span style="font-size: 3rem">
                            <i class="fas fa-search"></i>
                        </span>
                        <span class="block">Search</span>
                </li>
                <li>
                    <button class="btn btn-outline-dark">
                        <span style="font-size: 3rem">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span class="block">Edit</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php include_once('includes/requires/js.php'); ?>
</body>
</html>