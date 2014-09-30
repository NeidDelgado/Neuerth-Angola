<?php 
    $this->layout = 'default_home';
?>
<div class="container"><br><br><br><br>
    <!-- FlexSlider -->
    <span class="title sixteen columns"><h1>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<?php echo __('Enterprise'); ?> </h1></span><br>
    <div class="row section_featured_texts section_featured_texts_no_m">
        <div class="column two-thirds">
            <span class="icon big_home"></span>
            
            <h3><?php echo __('The'); ?> <strong><?php echo __('Neuerth Angola'); ?> </strong>
                <?php echo __('is a fully Angolan company that is currently in the process of consolidation of  '); ?>
             <strong><?php echo __('lines of recycling'); ?></strong> <?php echo __('waste aluminum, batteries and plastics.'); ?></h3><br>
            
             <h5> <?php echo __('Where result of which the production of aluminum bars, bars and lead granules of polypropylene and polyethylene 
             reuse by national and international industry.'); ?></h5>
            
             <h5><br> <?php echo __('The Neuerth Angola was created from the desire of its promoters: contribute to the development of habits of preservation 
             Environment and simultaneously to the creation of jobs that ensure the dignity of Angolans..'); ?> <br></h5>
            
             <h5><?php echo __('We know and recognize that the recycling sector is embryonic in the country, with the untreated waste a significant 
             paper polluter with little positive impact for generations to come.'); ?><br>
            <?php echo __('We know and recognize that business operations dedicated to recycling, are long-term investments, whereas the process of fostering 
             cultural recycling lasts at least two generations.'); ?><br>
            
            <br><strong><?php echo __('Business Model'); ?></strong><br>
            <?php echo __('The business model of Neuerth Angola based on the relevance of the Micro Business as a way of sharing wealth and job creation. 
             The business model ensures the development of a network of small businesses that serve the growing entrepreneurial dedicated 
             recycling, with particular emphasis on Micro business that constitutes the principal means of livelihood of families.'); ?>
            </h5><br>
            
            <h7><em>*<?php echo $this->Html->link(__('Click here for more information.'), '/recycling_lines', array('escape'=> false)); ?></em></h7>
        </div>
        <div class="colun two-thirdss">
            <span class="icon big_grap"></span>
            <h4><strong><?php echo __('Lines Recycling'); ?></strong></h4>
            <h5><?php echo __('The Recycling Unit has implemented three recycling lines:'); ?></h5>
            <div class="footer_news_item clearfix">
                <p class="footer_pic">
                     <?php echo $this->Html->link($this->Html->image('footer_th3.png'), '/battery_recycling', array('escape' => false)); ?>
                </p>
                <h6><a href="battery_recycling"><?php echo __('1.Line Battery '); ?> <strong><?php echo __('Recycling'); ?></strong>.</a></h6>
                <p class="footer_pic">
                    <?php echo $this->Html->link($this->Html->image('footer_th5.png'), '/aluminum_recycling', array('escape' => false)); ?>
                </p>
                <h6><a href="aluminum_recycling"><?php echo __('2.Line of Aluminum '); ?><strong><?php echo __('Recycling'); ?></strong>.</a></h6>
                <p class="footer_pic">
                    <?php echo $this->Html->link($this->Html->image('footer_th4.png'), '/plastic_recycling', array('escape' => false)); ?>
                </p>
                <h6><a href="plastic_recycling"><?php echo __('3.Line of Plastic (PP e PE)'); ?> <strong><?php echo __('Recycling'); ?></strong>.</a></h6>
                <p class="footer_pic">
                    <?php echo $this->Html->link($this->Html->image('footer_th7.png'), '/oxygen_line', array('escape' => false)); ?>
                </p>
                <h6><a href="oxygen_line"><?php echo __('The unit also has to support a '); ?><strong>
                    <?php echo __('production of oxygen'); ?></strong><?php echo __(' for industrial utilization. '); ?></a></h6><br><br>
            </div>
        </div>		
    <div class="row">
        <h2 class="title sixteen columns"><span><?php echo __('Our Services'); ?></span></h2>
        <div class="clear"></div>
        <div class="half_padded_block carousel_section">
            <div class='carousel_arrows_bgr'></div>
            <ul id="portfolio_carousel">
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
            </ul>
        </div>
    </div><!--FIM DE Portfolio -->
</div>    