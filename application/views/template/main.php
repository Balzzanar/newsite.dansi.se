<body>

<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Dansi.se</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li class="dropdown <?php echo ($active == 'items' ? 'active' : '');?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smycken <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="<?php echo ($active == 'items' && empty($active_category) ? 'active' : '');?>"><a href="<?php echo base_url().'items'; ?>">Alla</a></li>
                                <li class="<?php echo ($active == 'items' && !empty($active_category) && $active_category == '1' ? 'active' : '');?>"><a href="<?php echo base_url().'items/1'; ?>">Örhängen</a></li>
                                <li class="<?php echo ($active == 'items' && !empty($active_category) && $active_category == '2' ? 'active' : '');?>"><a href="<?php echo base_url().'items/2'; ?>">Armband</a></li>
                                <li class="<?php echo ($active == 'items' && !empty($active_category) && $active_category == '3' ? 'active' : '');?>"><a href="<?php echo base_url().'items/3'; ?>">Halsband</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($active == 'contact' ? 'active' : '');?>"><a href="<?php echo base_url().'contact'; ?>">Kontakt</a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<?php echo $main_content; ?>



