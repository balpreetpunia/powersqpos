<?php

$page = "";

if(basename($_SERVER['PHP_SELF']) == 'index.php'){
    $page = 'home';
}

elseif(basename($_SERVER['PHP_SELF']) == 'sales.php'){
    $page = 'sales';
}

elseif(basename($_SERVER['PHP_SELF']) == 'inventory.php'){
    $page = 'inventory';
}

echo '
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>POWER SQ</h3>
                <strong>PS</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="'; if($page=='home'){echo 'active';}; echo '">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="'; if($page=='sales'){echo 'active';}; echo '">
                    <a href="/sales.php">
                        <i class="fas fa-copy"></i>
                        Sales
                    </a>
                </li>
                <li class="'; if($page=='inventory'){echo 'active';}; echo '">
                    <a href="/inventory.php">
                        <i class="fas fa-warehouse"></i>
                        Inventory
                    </a>
                </li>
            </ul>

        </nav>
'?>