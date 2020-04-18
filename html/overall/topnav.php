<section>

<!-- <img class="img-responsive" width="100%" src="http://via.placeholder.com/1300x200" alt=""> -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="?view=index">Blog</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#zika" aria-controls="zika" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="zika">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="applesauce" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Code</a>
                    <div class="dropdown-menu" aria-labelledby="applesauce">
                        <a href="#" class="dropdown-item">Web dev</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="choco" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Art</a>
                    <div class="dropdown-menu" aria-labelledby="choco">
                        <a href="#" class="dropdown-item">Draw</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" action="">
                <input type="text" placeholder="Search" class="form-control mr-sm-2">
                <button type="button" class="btn btn-outline-success my-2 my-sm" value="">Submit</button>
            </form>

            <?php

            if (!isset($_SESSION['app_id'])) {
                echo '<ul class="navbar-nav mr-lg-0"> <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#Login">Login</a></li></ul>';
            } else {
                echo '<ul class="navbar-nav mr-lg-0"> <li class="nav-item"><a href="?view=logout" class="nav-link"> '. strtoupper($_users[$_SESSION['app_id']]['user']) . '</a></li></ul>';
            }
            
            ?>

            
        </div>
    </nav>
	
</section>

<?php include(HTML_DIR . '/public/login.html'); ?>