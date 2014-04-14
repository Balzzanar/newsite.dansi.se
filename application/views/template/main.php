<body>
  
    <!-- Navigation bar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="push">
                <a class="brand" href="#">Title</a>
                <ul class="nav">
                    <li <?php echo ($active == 'home' ? 'class="active"' : ''); ?>><a href="<?php echo base_url().'home'; ?>">Home</a></li>
                    <li <?php echo ($active == 'contact' ? 'class="active"' : ''); ?>><a href="<?php echo base_url().'contact'; ?>">Contact</a></li>
                    <li <?php echo ($active == 'gallery' ? 'class="active"' : ''); ?>><a href="<?php echo base_url().'items'; ?>">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>

	<?php echo $main_content; ?>

</body>
