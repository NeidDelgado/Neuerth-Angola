<?php 
    $this->layout = 'default_home';
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
                            <h2>&nbsp;<?php echo __('Conserving resources '); ?> &nbsp;</h2>
                            <h3>&nbsp; <?php echo __('Enriching Lives Creating Value'); ?></h3>    
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
                            <h2> &nbsp;<?php echo __('Protecting '); ?>  &nbsp;</h2>
                            <h3>&nbsp;<?php echo __('The Environment  '); ?> </h3>
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
                            <h2>&nbsp;<?php echo __('Contributing'); ?> &nbsp;</h2>
                            <h3>&nbsp; <?php echo __('To Development'); ?></h3>
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
             <h3><?php echo __('Modern equipment'); ?></h3>
            <p><?php echo __('For greater efficiency, agility and safety for the flow of materials, we have the most diverse specialist equipment and infrastructure for each Line Recycling.'); ?></p>
        </div>
        <div class="column one-third">
            <span class="icon big_grap"></span>
            <h3><?php echo __('Quality Program'); ?></h3>
            <p> <?php echo __('Cherish for the Environment, Hygiene, Health and Safety of our employees and business partners and the community about the impact of their actions.'); ?></p>
        </div>
        <div class="column one-third">
            <span class="icon big_user"></span>
            <h3><?php echo __('Contribute to Development'); ?></h3>
            <p> <?php echo __('Contributes to reduce the pollution of soil, water and air. Improves cleaning the city and quality of life the population. Gives jobs to ensure the dignity of Angolans.'); ?></p>
            
        </div>
    </div>			
    <div class="row">
        <h2 class="title sixteen columns"><span><?php echo __('Our Services'); ?></span></h2>
        <div class="clear"></div>
        <div class="half_padded_block carousel_section">
            <div class='carousel_arrows_bgr'></div>
            <ul id="portfolio_carousel">
                <li class="four columns portfolio_item">
                    <a href="battery_recycling" rel="prettyPhoto" class="pic" title="<?php echo __('Battery Recycling'); ?>"><img src="img/imagem36.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Battery Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="plastic_recycling" rel="prettyPhoto" class="pic" title="<?php echo __('Plastic Recycling'); ?>"><img src="img/imagem31.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Plastic Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="aluminum_recycling" rel="prettyPhoto"class="pic" title="<?php echo __('Aluminum Recycling'); ?>"><img src="img/imagem12.png"/><div class="img_overlay"></div>
                        <h5><?php echo __(' Line of Aluminum Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="plastic_recycling" rel="prettyPhoto" class="pic" title="<?php echo __('Plastic Recycling'); ?>"><img src="img/imagem17.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Plastic Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="oxygen_line" rel="prettyPhoto" class="pic" title="<?php echo __('Oxygen Line'); ?>"><img src="img/imagem22.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Oxygen Line'); ?></h5>
                    </a>
                </li> 
                <li class="four columns portfolio_item">
                    <a  href="aluminum_recycling" rel="prettyPhoto" class="pic" title="<?php echo __('Aluminum Recycling'); ?>"><img src="img/imagem13.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Aluminum Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="plastic_recycling" rel="prettyPhoto" class="pic" title="<?php echo __('Plastic Recycling'); ?>"><img src="img/imagem15.png"/><div class="img_overlay"></div>
                        <h5><?php echo __(' Line of Plastic Recycling'); ?> </h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="oxygen_line" rel="prettyPhoto" class="pic" title="<?php echo __('Oxygen Line'); ?>"><img src="img/imagem20.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Oxygen Line'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="battery_recycling" rel="prettyPhoto" class="pic" title="<?php echo __('Battery Recycling'); ?>"><img src="img/imagem6.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Battery Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="battery_recycling" rel="prettyPhoto" class="pic" title=" <?php echo __('Battery Recycling'); ?>"><img src="img/imagem7.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Battery Recycling'); ?></h5>
                    </a>
                </li>
                <li class="four columns portfolio_item">
                    <a href="oxygen_line" rel="prettyPhoto" class="pic" title="<?php echo __('Oxygen Line'); ?>"><img src="img/imagem21.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Oxygen Line'); ?></h5>
                    </a>
                </li> 
                <li class="four columns portfolio_item">
                    <a href="aluminum_recycling" rel="prettyPhoto"class="pic" title="<?php echo __('Aluminum Recycling'); ?>"><img src="img/imagem10.png"/><div class="img_overlay"></div>
                        <h5><?php echo __('Line of Aluminum Recycling'); ?></h5>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--FIM DE Portfolio -->
</div>