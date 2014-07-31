<?php 
   
?>
<div class="container"><br><br><br><br>
    <!-- FlexSlider -->
    <span class="title sixteen columns"><h1>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<?php echo __('Quem Somos'); ?> </h1></span><br>
    <div class="row section_featured_texts section_featured_texts_no_m">
        <div class="column two-thirds">
            <span class="icon big_home"></span>
            
            <h3><?php echo __('A'); ?> <strong><?php echo __('Neuerth Angola'); ?> </strong>
                <?php echo __('é uma empresa totalmente Angolana que se encontra neste momento em fase de consolidação das'); ?>
             <strong><?php echo __('linhas de reciclagem'); ?></strong> <?php echo __('de desperdícios de alumínio, de baterias e de plásticos.'); ?></h3><br>
            
             <h5> <?php echo __('Onde das quais resultam a produção de barras de alumínio, barras de chumbo e granulado de polipropileno e polietileno para
            reutilização pela indústria nacional e internacional.'); ?></h5>
            
             <h5><br> <?php echo __('A Neuerth Angola foi criada da vontade dos seus promotores de: contribuir para o desenvolvimento de hábitos de preservação 
            do Meio Ambiente e simultaneamente para a criação de postos de trabalho que garantam a dignidade dos Angolanos..'); ?> <br></h5>
            
             <h5><?php echo __('Sabemos e reconhecemos que o sector da reciclagem está em fase embrionária no País, tendo os resíduos não tratados um significativo
            papel poluidor com consequências pouco positivas para as gerações vindouras.'); ?><br>
            <?php echo __('Sabemos e reconhecemos que as operacoes empresariais dedicadas a reciclagem, são investimentos de longo prazo, considerando que o processo de fomento
            cultural de reciclagem dura pelo menos duas gerações.'); ?><br>
            
            <br><strong><?php echo __('Modelo de Negócio'); ?></strong><br>
            <?php echo __('O modelo de negócio da Neuerth Angola assenta na relevância do Micro Negócio como forma de partilha de riqueza e de criação de emprego.
            O modelo de negócio garante o desenvolvimento de uma rede de pequenos negócios que servem o crescimento do tecido empresarial dedicado
            a reciclagem, com particular enfase no Micro Negocio que constitui o principal meio de subsistencia das Familias.'); ?>
            </h5><br>
            
            <h7><em>*<?php echo $this->Html->link(__('Clique aqui para mais informações.'), '/linhas_reciclagem', array('escape'=> false)); ?></em></h7>
        </div>
        <div class="colun two-thirdss">
            <span class="icon big_grap"></span>
                <h4><strong><?php echo __('Linhas de Reciclagem'); ?></strong></h4>
                <h5><?php echo __('A Unidade de Reciclagem tem implementadas três linhas de reciclagem:'); ?></h5>
                <div class="footer_news_item clearfix">
                    <p class="footer_pic">
                        <?php echo $this->Html->link($this->Html->image('footer_th5.png'), '/reciclagem_aluminio', array('escape' => false)); ?>
                        <h6><a href="reciclagem_aluminio"><?php echo __('2.Linha de Reciclagem de '); ?><strong><?php echo __('Alumínio'); ?></strong>.</a></h6>
                    </p><br>
                    <br><br>
                    <p class="footer_pic">
                        <?php echo $this->Html->link($this->Html->image('footer_th4.png'), '/reciclagem_plastico', array('escape' => false)); ?>
                        <h6><a href="reciclagem_plastico"><?php echo __('3.Linha de Reciclagem de '); ?><strong><?php echo __('Plástico (PP e PE)'); ?></strong>.</a></h6>
                    </p><br><br>
                    <br>
                    <p class="footer_pic">
                        <?php echo $this->Html->link($this->Html->image('footer_th7.png'), '/enchimento_oxigenio', array('escape' => false)); ?>
                        <h6><a href="enchimento_oxigenio"><?php echo __('A Unidade também possui como suporte uma unidade de '); ?><strong>
                <?php echo __('produção de oxigénio para utilização industrial.'); ?></a></h6>
                    </p>
                    
                </div>
    </div>		
    <div class="row">
        <h2 class="title sixteen columns"><span><?php echo __('Nossos Serviços'); ?></span></h2>
        <div class="clear"></div>
        <div class="half_padded_block carousel_section">
            <div class='carousel_arrows_bgr'></div>
            <ul id="portfolio_carousel">
                <li class="four columns portfolio_item">
                    <a href="reciclagem_baterias" rel="prettyPhoto" class="pic" title="<?php echo __('Reciclagem de Baterias'); ?>"><img src="img/imagem6.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Baterias'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a  href="reciclagem_aluminio" rel="prettyPhoto" class="pic" title="<?php echo __('Reciclagem de Alumínio'); ?>"><img src="img/imagem13.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Alumínio'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="reciclagem_plastico" rel="prettyPhoto" class="pic" title="<?php echo __('Reciclagem de Plástico'); ?>"><img src="img/imagem15.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Plástico'); ?> </h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="enchimento_oxigenio" rel="prettyPhoto" class="pic" title="<?php echo __('Enchimento de Oxigénio'); ?>"><img src="img/imagem20.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Enchimento de Oxigénio'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="reciclagem_baterias" rel="prettyPhoto" class="pic" title="<?php echo __('Reciclagem de Baterias'); ?>"><img src="img/imagem36.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Baterias'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="reciclagem_aluminio" rel="prettyPhoto"class="pic" title="<?php echo __('Reciclagem de Alumínio'); ?>"><img src="img/imagem10.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Alumínio'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="reciclagem_plastico" rel="prettyPhoto" class="pic" title="<?php echo __('Reciclagem de Plástico'); ?>"><img src="img/imagem17.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Plástico'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="enchimento_oxigenio" rel="prettyPhoto" class="pic" title="<?php echo __('Enchimento de Oxigénio'); ?>"><img src="img/imagem21.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Enchimento de Oxigénio'); ?></h5>
                    </a>
                </li> 
                <li class="four columns portfolio_item">
                    <a href="reciclagem_baterias" rel="prettyPhoto" class="pic" title=" <?php echo __('Reciclagem de Baterias'); ?>"><img src="img/imagem7.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Baterias'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="reciclagem_aluminio" rel="prettyPhoto"class="pic" title="<?php echo __('Reciclagem de Alumínio'); ?>"><img src="img/imagem12.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Alumínio'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="reciclagem_plastico" rel="prettyPhoto" class="pic" title="<?php echo __('Reciclagem de Plástico'); ?>"><img src="img/imagem31.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Reciclagem de Plástico'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="enchimento_oxigenio" rel="prettyPhoto" class="pic" title="<?php echo __('Enchimento de Oxigénio'); ?>"><img src="img/imagem22.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Linha de Enchimento de Oxigénio'); ?></h5>
                    </a>
                </li> 

            </ul>
        </div>
    </div><!--FIM DE Portfolio -->
</div>    