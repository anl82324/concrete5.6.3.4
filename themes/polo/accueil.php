<?php $this->inc('elements/header.php');?>
    <main>

        <div class="row" id="diaporama">
            <div class="container">
                <div class = "col-md-12">
                    <?php
                    $contenu = new Area('contenu');
                    $contenu->display($c);            
                    ?>
                </div>
            </div>
        </div> 
            <div class="container">
            	<div class="row">        
                    <div class = "col-md-12 divider" id="titre">
                        <?php
                    $titre = new Area('titre');
                    $titre->display($c);            
                    ?>
                </div>
           		<div class="row">
                    <div class = "col-md-4">
                            <?php
                            $col = new Area('col1');
                            $col->display($c);            
                            ?>
                    </div>
                    <div class = "col-md-4">
                        <?php
                    $coll= new Area('col2');
                    $coll->display($c);            
                    ?>
                    </div>
                    <div class = "col-md-4">
                        <?php
                    $collo = new Area('col3');
                    $collo->display($c);            
                    ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class = "col-md-4">
                        <?php
                    $social = new Area('social');
                    $social->display($c);  
                    ?>                
                </div>
                <div class = "col-md-4">
                        <?php
                    $contact = new Area('contact');
                    $contact->display($c);  
                    ?>   
                    </div>
                    <div class = "col-md-4">
                        <?php
                    $actu = new Area('actu');
                    $actu->display($c);  
                    ?> 
                    </div>    
                </div>
        	</div>
        </main>
        <?php $this->inc('elements/footer.php');?>

        


