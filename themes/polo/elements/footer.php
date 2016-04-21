<footer>
    <div class ="container">
        <div class="row">
            <div class = "col-md-8">
                <?php
                    $pa = new Area('pa');
                    $pa ->display($c);            
                ?>
            </div>
            <div class ="col-md-4">
                <?php
                    $par = new Area('par');
                    $par ->display($c);            
                ?>
            </div>
        </div>
        <div class="row">
            <div class="navbar-footer">
                <?php
                    $me = new GlobalArea('me');
                    $me-> display($c);
                ?>  
            </div>
        </div>
        <div class ="row">
            <?php
                $men = new GlobalArea('men');
                $men -> display($c);
            ?>     
        </div>
    </div>
</footer>
<?php Loader::element('footer_required');?>
</body>
</html>



