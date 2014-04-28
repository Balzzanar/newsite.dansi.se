<body>

<div id="dansi-navbar" class="container">

    <!-- Navigation bar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <a class="brand" href="#">Dansi</a>

                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li <?php echo ($active == 'home' ? 'class="active"' : ''); ?>><a href="<?php echo base_url().'home'; ?>">Home</a></li>
                        <li <?php echo ($active == 'contact' ? 'class="active"' : ''); ?>><a href="<?php echo base_url().'contact'; ?>">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galleri <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li <?php echo ($active == 'gallery' ? 'class="active"' : ''); ?>><a href="<?php echo base_url().'items'; ?>">Allt</a></li>
                                <li><a href="<?php echo base_url().'items/1'; ?>">Örhänge</a></li>
                                <li><a href="<?php echo base_url().'items/2'; ?>">Halsband</a></li>
                                <li><a href="<?php echo base_url().'items/3'; ?>">Armband</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

    <?php echo $main_content; ?>
</div>

</body>
