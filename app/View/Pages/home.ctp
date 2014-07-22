<?php 
?>
<div class="container">
    <div id="sliderh">
        <div id="slider_holder" >
            <div id="sequence">
                <div class="prev" ><span></span></div>
                <div class="next" ><span></span></div>
                <ul>
                    <!-- Layer 1 -->
                    <li>
                        <div class="info">
                            <h2>&nbsp;<?php echo __(' Conservando recursos'); ?> &nbsp;</h2>
                            <h3>&nbsp; <?php echo __('Enriquecendo Vidas Criando Valores'); ?></h3>    
                        </div>
                        <?php echo $this->Html->image('1.png', array('class' => 'slider_bgr animate-in', ' escape'=> false)); ?>
                    </li>
                    <!-- Layer 2 -->
                    <li>
                        <div class="info">
                        </div>
                        <?php echo $this->Html->image('33.png', array('class' => 'slider_bgr animate-in', ' escape'=> false)); ?>
                        <?php echo $this->Html->image('bateria.png', array('class' => 'slider_img animate-in', ' escape'=> false)); ?>
                    </li>
                    <!-- Layer 3 -->
                    <li>
                        <div class="info">
                            <h2> &nbsp;<?php echo __('Protegendo '); ?>  &nbsp;</h2>
                            <h3>&nbsp;<?php echo __('O Meio Ambiente '); ?> </h3>
                        </div>
                        <?php echo $this->Html->image('13.png', array('class' => 'slider_bgr animate-in', ' escape'=> false)); ?>
                    </li>
                     <!-- Layer 4 -->
                    <li>
                        <div class="info">
                        </div>
                        <?php echo $this->Html->image('4_0.png', array('class' => 'slider_bgr animate-in', ' escape'=> false)); ?>
                        <?php echo $this->Html->image('aluminio.png', array('class' => 'slider_img animate-in', ' escape'=> false)); ?>
                    </li>
                    <!-- Layer 5 -->
                    <li>
                        <div class="info">
                            <h2>&nbsp;<?php echo __(' Contribuir'); ?> &nbsp;</h2>
                            <h3>&nbsp; <?php echo __('Para o Desenvolvimento'); ?></h3>
                        </div>
                        <?php echo $this->Html->image('22.png', array('class' => 'slider_bgr animate-in', ' escape'=> false)); ?>
                    </li>
                    <!-- Layer 6 -->
                    <li>
                        <div class="info">
                        </div>
                        <?php echo $this->Html->image('reciclagem.png', array('class' => 'slider_bgr animate-in', ' escape'=> false)); ?>
                        <?php echo $this->Html->image('plastico.png', array('class' => 'slider_img animate-in', ' escape'=> false)); ?>
                    </li>					
                </ul>
            </div>
        </div>
    </div>
    <!-- FlexSlider -->
    <div class="row section_featured_texts section_featured_texts_no_m">
        <div class="column one-third">
            <span class="icon big_conf"></span>
             <h3><?php echo __('Equipamentos Modernos'); ?></h3>
            <p><?php echo __('Para maior eficiência, agilidade e segurança no fluxo dos materiais, dispomos dos mais diversos equipamentos e infra-estrutura especializadas para cada Linha de Reciclagem.'); ?></p>
        </div>
        <div class="column one-third">
            <span class="icon big_grap"></span>
            <h3><?php echo __('Programa de Qualidade'); ?></h3>
            <p> <?php echo __('Primamos pelo Meio Ambiente, Higiene, Saude e Seguranca dos nossos colaboradores e parceiros de negocios ou da comunidade sobre o impacto das suas acções.'); ?></p>
        </div>
        <div class="column one-third">
            <span class="icon big_user"></span>
            <h3><?php echo __('Contribuir para o Desenvolvimento'); ?></h3>
            <p> <?php echo __('Contribui para diminuir a poluição do solo, água e ar. Melhora a limpeza da cidade e a qualidade de vida da população.Gera postos de trabalho que garantam a dignidade dos Angolanos.'); ?></p>
            
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