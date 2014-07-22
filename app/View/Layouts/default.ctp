<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="ITELnet - Comunicações & Serviços, S.A.">
        <meta name="keywords" content="Neuerth Angola, Reciclagem, meio ambiente, higiene, saúde e segurança">
        <meta name="description" content="Neuerth Angola">
        <title><?php echo $title_for_layout; ?> &middot; Neuerth Angola </title>
        <?php echo $this->Html->meta('favicon.ico',array('type' => 'icon'));?>
        <?php echo $this->Html->css(array( 'normalize.css','global.css', 'flexslider.css', 'carousel.css','skeleton.css', 'prettyPhoto.css')); ?>  
    </head>
    <body>
        <div id="geral">
            <div class="headerr">
                <div class="logotipo">
                    <div class="logo container">
                        &nbsp;<?php echo $this->Html->link($this->Html->image('logo.png'), __('/quemsomos'), array('escape' => false)); ?>
                        <div class="header_soc_search clearfix">
                            <div class="header_search">
                                <?php echo $this->Html->link('Google+', 'http://www.google.com/', array('class' => 'header_soc_rss','id' => 'soc_rss', ' escape'=> false)); ?>
                                <?php echo $this->Html->link('Facebook', 'http://www.facebook.com/', array('class' => 'header_soc_fb','id' => 'soc_fb', ' escape'=> false)); ?>
                                <?php echo $this->Html->link('Twitter', 'http://www.twitter.com/', array('class' => 'header_soc_twitter','id' => 'soc_twitter', ' escape'=> false)); ?>
                                <?php echo $this->Html->link('Twitter', 'http://www.skype.com/', array('class' => 'header_soc_skype','id' => 'soc_skype', ' escape'=> false)); ?>
                            </div>
                        </div>
                    </div>
                <div class="dark_menu men sixteen columns">
                    <div class=" container">
                        <div id="menu" >
                            <ul>
                                <li>
                                        <?php echo $this->Html->link(__('Home'), '/', array('escape'=> false)); ?>
                                </li>
                                <li>
                                        <?php echo $this->Html->link(__('Quem Somos'), '/quemsomos', array('escape'=> false)); ?>
                                </li>
                                <li>
                                        <?php echo $this->Html->link(__('Linhas de Reciclagem'), '/linha_reciclagem', array('escape'=> false)); ?>	
                                    <div>
                                        <ul>
                                            <li>
                                                <?php echo $this->Html->link(__('Linha de Reciclagem de Baterias'), '/reciclagem_baterias', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('Linha de Reciclagem de Alumínio'), '/reciclagem_aluminio', array('escape'=> false)); ?>
                                            </li> 
                                            <li>
                                                <?php echo $this->Html->link(__('Linha de Reciclagem de Plástico'), '/reciclagem_plastico', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('Linha de Oxigénio'), '/enchimento_oxigenio', array('escape'=> false)); ?>
                                            </li> 
                                        </ul>
                                    </div>	
                                </li>
                                <li>
                                        <?php echo $this->Html->link(__('Responsabilidade Social'), '/social', array('escape'=> false)); ?>
                                </li>
                                <li>
                                        <?php echo $this->Html->link(__('Política de Qualidade'), '/qualidade', array('escape'=> false)); ?>	
                                </li>
                                <li>
                                        <?php echo $this->Html->link(__('Onde Estamos'), '/localizacao', array('escape'=> false)); ?>
                                </li>
                            </ul>
                        </div>
                            <select id="select_menu" onchange="location = this.value">
                                <option value=""><?php echo __('Selecione a pagina'); ?></option>
                                <option value="index"><?php echo __('Home'); ?></option>
                                <option value="quemsomos"><?php echo __('Quem Somos'); ?></option>
                                <option value="linha_reciclagem"><?php echo __('Linhas de Reciclagem'); ?></option>
                                    <option value="reciclagem_baterias"><?php echo __('Linha de Reciclagem de Baterias'); ?></option>
                                    <option value="reciclagem_aluminio"><?php echo __('Linha de Reciclagem de Alumínio'); ?></option>
                                    <option value="reciclagem_plastico"><?php echo __('Linha de Reciclagem de Plásticos'); ?></option>
                                    <option value="enchimento_oxigenio"><?php echo __('Linha de Enchimento de Oxigénio'); ?></option>
                                <option value="social"><?php echo __('Responsabilidade Social'); ?></option>
                                <option value="qualidade"><?php echo __('Política de Qualidade'); ?></option>
                                <option value="localizacao"><?php echo __('Onde Estamos'); ?></option>
                            </select>
                       </div>
                    <div class="clear"></div>
                    </div>
               </div>  </div>   

                       <!-- Main Navigation::END -->
                  <?php echo $this->fetch('content'); ?>

            <footer><!-- Rodapé -->
            <div id="footer" >
                <div class=" container">
                    <div class="row footer_inside ">
                        <div class="six columns">
                           <h3>&nbsp;<?php echo $this->Html->link(__('A Neuerth Angola'), '/quemsomos', array('escape'=> false)); ?></h3>
                           <p>&nbsp;<?php echo __('foi criada para contribuir no desenvolvimento de hábitos de preservação do Meio Ambiente.'); ?></p>
                        </div>
                        <div class="six columns">
                            <h3><?php echo $this->Html->link(__('Serviços'), '/linha_reciclagem', array('escape'=> false)); ?></h3>
                            <div class="footer_news_item clearfix">
                                <div class="footer_pic">
                                    <?php echo $this->Html->link($this->Html->image('footer_th1.png'), '/linha_reciclagem', array('escape' => false)); ?>
                                </div>
                                <h4><a href="linha_reciclagem"><?php echo __('Unidade de Reciclagem.'); ?></a></h4>
                            </div>
                        </div> 
                        <div class="four columns">
                            <h3><?php echo $this->Html->link(__('Fale Connosco'), '/localizacao', array('escape'=> false)); ?></h3>
                            <div class='icon_mail' title='Email'>geral@neuerthangola.co.ao.</div>	
                            <div class='icon_loc' title="<?php echo __('Localização'); ?>">Luanda- Kilamba Kiaxi, na Sapu II.</div>
                        </div> 
                    </div> </div>
                       <div class="clear"></div>
                       <div class="footer_btm">
                        <div class="footer_bt container">
                             <div class="footer_btm_inner ">
                                 <?php echo $this->Html->link('Tweeter', 'http://www.twitter.com/', array('class' => 'icon_tweet','title' => 'Tweeter', 'target' => 'blank', ' escape'=> false)); ?>
                                 <?php echo $this->Html->link('Skype', 'http://www.skype.com/', array('class' => 'icon_skype','title' => 'Skype', 'target' => 'blank', ' escape'=> false)); ?>
                                 <?php echo $this->Html->link('Google+', 'http://www.google.com/', array('class' => 'icon_google','title' => 'Google+', 'target' => 'blank', ' escape'=> false)); ?>
                                 <?php echo $this->Html->link('Facebook', 'http://www.facebook.com/', array('class' => 'icon_facebook','title' => 'Facebook', 'target' => 'blank', ' escape'=> false)); ?>   	
                             </div>	
                             <h8>&nbsp; © 2014 <?php echo __('Desenvolvido por'); $this->Html->link(' ITELnet - Comunicações & Serviços, S.A.', 'http://www.itelnet.co.ao/', array('target' => 'blank')); ?></h8>
                        </div>
                    </div>
                </div>
            </footer><!-- fim rodapé -->
        </div>
    </body>
    <?php echo $this->Html->script('jquery-2.1.1.min'); ?>
    <?php echo $this->Html->script(array('jquery-1.7.2.min.js', 'jquery.easing.1.3.js', 'common.js')); ?>
    <?php echo $this->Html->script(array('sequence.jquery-min.js', 'jquery.qui.jcksand.js')); ?>  
    <?php echo $this->Html->script(array('jquery.flexslider-min.js', 'jquery.prettyPhoto.js', 'jquery.jcarousel.min.js', 'jquery.tipsy.js')); ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#portfolio_carousel').jcarousel({
                scroll: ($(window).width() > 767 ? 4 : 1),
                easing: 'easeInOutExpo',
                animation: 600
            }); });
        // Reload carousels on window resize to scroll only 1 item if viewport is small
    $(window).resize(function() {
         var el = $("#portfolio_carousel"), carousel = el.data('jcarousel'), win_width = $(window).width();
           var visibleItems = (win_width > 767 ? 4 : 1);
           carousel.options.visible = visibleItems;
           carousel.options.scroll = visibleItems;
           carousel.reload();
    });
    </script> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#testimonials_carousel').jcarousel({
                auto: 4,
                scroll: 1,
                wrap: 'last',
                easing: 'easeInOutExpo',
                animation: 600
            });  });	
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#clients_carousel').jcarousel({
                scroll: 1,
                easing: 'easeInOutExpo',
                animation: 600
            }); });	
    </script>
    <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            controlNav: false,
            start: function(slider){
              $('body').removeClass('loading');
            } }); });
    </script>
    <script type="text/javascript">	
        var preloader = ($.browser.msie) ? false : true ;
        $(document).ready(function(){
            var options = {
                autoPlay: true,
                autoPlayDelay: 5000,
                nextButton: true,
                prevButton: true,
                preloader: preloader,
                animateStartingFrameIn: true,
                transitionThreshold: 500,
                fallback: {
                theme: "slide",
                speed: 500
            } };
            var sequence = $("#sequence").sequence(options).data("sequence");
            sequence.afterLoaded = function(){
                $(".info").css('display','block');
                $("#sequence").hover(
                    function() {
                            $(".prev, .next").stop().animate({opacity:0.7},300);	            
                    },
                    function() {        
                            $(".prev, .next").stop().animate({opacity:0},300);
                    });
                $(".prev, .next").hover(
                    function() {
                            $(this).stop().animate({opacity:1},200);	            
                    },
                    function() {        
                            $(this).stop().animate({opacity:0.7},200);
                    }   ); } })
    </script>
</html>

 