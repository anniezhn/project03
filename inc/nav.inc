<!-- Navigation -->
    <nav class="main-menu">
        <ul>
            <li <?php if($thisPage=="home") { echo 'class="active"'; } ?>><a href="index.php#first">About</a></li>
            <li <?php if($thisPage=="home2") { echo 'class="active"'; } ?>><a href="index.php#second">Accomplishment</a></li>
            <li <?php if($thisPage=="portfolio") { echo 'class="active"'; } ?>><a href="portfolio.php">Portfolio</a></li>
            <li <?php if($thisPage=="contact") { echo 'class="active"'; } ?>><a href="contact.php">Contact</a></li>
        </ul>
    </nav>