<body>
  
    <!-- Navigation bar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="push">
                <a class="brand" href="#">Title</a>
                <ul class="nav">
                    <li <?php echo ($active == 'home' ? 'class="active"' : ''); ?>><a href="home">Home</a></li>
                    <li <?php echo ($active == 'contact' ? 'class="active"' : ''); ?>><a href="contact">Contact</a></li>
                    <li <?php echo ($active == 'gallery' ? 'class="active"' : ''); ?>><a href="gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>

	<?php echo $main_content; ?>


	<!-- Bootstrap! -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>