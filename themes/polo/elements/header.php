
<!DOCTYPE html>
<!--

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php Loader::element('header_required');?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Latest compiled and minified bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath();?>/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath();?>/css/style.css"/>
    </head>
    <body>  
        <header>
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo $this->getThemePath();?>/images/logo.png">
                            </a>
                        </div>
                        <div class="navbar-header">
                            <?php
                                $menu = new GlobalArea('menu');
                                $menu -> display($c);
                            ?>
                        </div>
                    </div>
                </nav>
            </div>  
        </header>      
        