<?php 
    $this->layout = 'default_home';
?>
<div class="container"><br><br><br><br>
    <span class="title sixteen columns"><h1>&nbsp;&nbsp; &nbsp;<?php echo __('Location'); ?></h1></span>
    <div class="row section_featured_texts section_featured_texts_no_m">
        <div class="row">
            <div class="nine columns">
                <div id="google_map">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1994.4711086395835!2d13.31231228866141!3d-8.913113366616797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-PT!2sbr!4v1401267827565" width="600" height="450" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div class="column one-third">
                <div id="google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15913.117237178147!2d13.308031069125883!3d-8.91857421021679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f7acd195ac89%3A0x58898328ee600290!2sUnnamed+Rd!5e1!3m2!1spt-PT!2sbr!4v1401269200490" width="600" height="450" frameborder="0" style="border:0"></iframe>
                </div> 
                
            </div>
        </div>
        <div class="columns one-third"><br>
            <span class="icon big_user"></span>
            <h4><?php echo __('• The '); ?> <strong><?php echo __('Neuerth Angola is located in Luanda:'); ?></strong></h4><br>
                   <h5 class="icon_loc"><?php echo __('Kilamba Kiaxi, in Sapu II,'); ?> <br><?php echo __('Total area of ​​the factory 15.000 m2.'); ?> </h5>
                   <h7><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; *<?php echo $this->Html->link(__('For more information, send email to : geral.angola@neuerthgroup.com'), '/enterprise', array('escape'=> false)); ?></em></h7><br><br>
        </div>
    </div>
</div>	