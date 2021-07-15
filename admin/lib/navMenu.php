<?php
function nav_active($n){
    $s = substr($_SERVER['PHP_SELF'], 7, 4);
    if($n == $s){
        return 'class="active-menu"';
    }
}
?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a <?=nav_active('inde')?> href="index.php"><i class="fa fa-th-large"></i> Dashboard</a>
                    </li>
                    <li>
                        <a <?=nav_active('mess')?> href="messages.php"><i class="fa fa-envelope"></i> Messages</a>
                    </li>
                    <li>
                        <a <?=nav_active('blog')?> href="blog.php"><i class="fa fa-rss"></i> Blog</a>
                    </li>
                    <li>
                        <a <?=nav_active('serv')?> href="services.php"><i class="fa fa-cog"></i> Services</a>
                    </li>
                    <li>
                        <a <?=nav_active('prop')?> href="properties.php"><i class="fa fa-home"></i> Properties For Sales</a>
                    </li>
                    <li>
                        <a <?=nav_active('user')?> href="users.php"><i class="fa fa-users"></i> Users</a>
                    </li>
                </ul>

            </div>

        </nav>