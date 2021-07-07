<?php
function nav_active($n){
    $s = substr($_SERVER['PHP_SELF'], 21, 4);
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
                </ul>

            </div>

        </nav>