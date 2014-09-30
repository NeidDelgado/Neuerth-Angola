<?php 
    $this->layout = 'default_home';
?>
<div class="container"><br><br><br><br>
    <span class="title sixteen columns"><h1>&nbsp;&nbsp; &nbsp;<?php echo __('Units of Recycles'); ?></h1></span>
    <div class="row section_featured_texts section_featured_texts_no_m">
        <div class="row">
            <div class="nine columns flexslider"><br>	
                <ul class="slides services_list">
                  <li><?php echo $this->Html->image('imagem7.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem34.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem21.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem31.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem6.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem4.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem3.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem15.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem13.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem22.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem12.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem20.png'); ?></li>
                  <li><?php echo $this->Html->image('imagem18.png'); ?></li>
                </ul>	
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
            <div class="sixteen columns clearfix">
                <h2 class="title"><span><?php echo __('Recycling Unit'); ?></span></h2>
                <table class="aqua_table" width="100%">
                    <tbody>
                        <tr>
                            <th class="b"><?php echo __('Line'); ?></th>
                            <th><?php echo __('Input Capacity'); ?></th>
                            <th><?php echo __('Output Capacity'); ?></th>
                            <th><?php echo __('Target Market (Parents / Client)'); ?></th>
                            <th><?php echo __('Applications'); ?></th>
                        </tr>
                        <tr>
                            <td class="b"><?php echo __('Batteries'); ?></td>
                            <td><?php echo __('800 Ton of batteries'); ?></td>
                            <td><?php echo __('400 Ton of bars reusable lead (85.0% purity)'); ?></td>
                            <td><?php echo __('International (Asia and Middle East)'); ?></td>
                            <td><?php echo __('batteries; Material for Radiation Protection'); ?></td>
                        </tr>
                        <tr class="odd">
                            <td class="b"><?php echo __('Aluminum'); ?></td>
                            <td><?php echo __('1200 Ton of aluminum'); ?></td>
                            <td><?php echo __('1000 Reusable ton of aluminum bars (98.5% purity)'); ?></td>
                            <td><?php echo __('International (Asia and Middle East)'); ?></td>
                            <td><?php echo __('Engines, Chassis, Wheels'); ?></td>
                        </tr>
                        <tr>
                            <td class="b"><?php echo __('Plastic (PP, PE e HDPE)'); ?></td>
                            <td><?php echo __('100 Ton of plastic used'); ?></td>
                            <td><?php echo __('100 Ton of Granules (PP and PE)'); ?></td>
                            <td><?php echo __('National'); ?></td>
                            <td><?php echo __('PP - Boxes, Vases, Bowls, Buckets, PE - Bags, Baskets, HDPE - Chairs, Tables'); ?></td>
                        </tr>
                        <tr>
                            <td class="b"><?php echo __('Industrial oxygen'); ?></td>
                            <td><?php echo __('n.a.'); ?></td>
                            <td><?php echo __('5.500 cylinders'); ?></td>
                            <td><?php echo __('National'); ?></td>
                            <td><?php echo __('Metal Cutting'); ?></td>
                        </tr>
                    </tbody>
                </table>
                <br /><br/>
            </div>
        </div>
    </div>
    <div class="h20"></div>
</div><!--// .conteudo_geral -->