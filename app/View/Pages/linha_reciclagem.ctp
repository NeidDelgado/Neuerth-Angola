<?php 

?>
<div class="container"><br><br><br><br>
    <span class="title sixteen columns"><h1>&nbsp;&nbsp; &nbsp;<?php echo __('Unidades de Reciclagens'); ?></h1></span>
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
            <div class="colun one-third">
                <span class="icon big_grap"></span>
                <h4><strong><?php echo __('Linhas de Reciclagem'); ?></strong></h4>
                <h5><?php echo __('A Unidade de Reciclagem tem implementadas três linhas de reciclagem:'); ?></h5>
                <div class="footer_news_item clearfix">
                    <p class="footer_pic">
                        <?php echo $this->Html->link($this->Html->image('footer_th5.png'), '/reciclagem_aluminio', array('escape' => false)); ?>
                    </p><br>
                    <h6><a href="reciclagem_aluminio"><?php echo __('2.Linha de Reciclagem de '); ?><strong><?php echo __('Alumínio'); ?></strong>.</a></h6><br>
                    <p class="footer_pic">
                        <?php echo $this->Html->link($this->Html->image('footer_th4.png'), '/reciclagem_plastico', array('escape' => false)); ?>
                    </p><br>
                    <h6><a href="reciclagem_plastico"><?php echo __('3.Linha de Reciclagem de '); ?><strong><?php echo __('Plástico (PP e PE)'); ?></strong>.</a></h6><br>
                    <p class="footer_pic">
                        <?php echo $this->Html->link($this->Html->image('footer_th7.png'), '/enchimento_oxigenio', array('escape' => false)); ?>
                    </p>
                    <h6><a href="enchimento_oxigenio"><?php echo __('A Unidade também possui como suporte uma unidade de produção'); ?><strong>
                        <?php echo __(' de oxigénio'); ?></strong>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <?php echo __('para utilizacao industrial.'); ?></a></h6>

                </div>
            </div>
        <div class="sixteen columns clearfix">
            <h2 class="title"><span><?php echo __('Unidade de Reciclagem'); ?></span></h2>
            <table class="aqua_table" width="100%">
                <tbody>
                    <tr>
                        <th class="b"><?php echo __('Linha'); ?></th>
                        <th><?php echo __('Capacidade Input'); ?></th>
                        <th><?php echo __('Capacidade Output'); ?></th>
                        <th><?php echo __('Mercado Alvo (Pais/Cliente)'); ?></th>
                        <th><?php echo __('Aplicações'); ?></th>
                    </tr>
                    <tr>
                        <td class="b"><?php echo __('Baterias'); ?></td>
                        <td><?php echo __('800 Ton de baterias usadas'); ?></td>
                        <td><?php echo __('400 Ton de barras de chumbo reutilizáveis (85.0 % pureza)'); ?></td>
                        <td><?php echo __('Internacional (Asia e Medio Oriente)'); ?></td>
                        <td><?php echo __('Baterias; Material de Protecção contra Radiação'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td class="b"><?php echo __('Alumínio'); ?></td>
                        <td><?php echo __('1200 Ton de alumínio'); ?></td>
                        <td><?php echo __('1000 Ton de barras de alumínio reutilizáveis (98.5% pureza)'); ?></td>
                        <td><?php echo __('Internacional (Asia e Medio Oriente)'); ?></td>
                        <td><?php echo __('Motores, Chassis, Jantes'); ?></td>
                    </tr>
                    <tr>
                        <td class="b"><?php echo __('Plástico (PE, PP e HDPE)'); ?></td>
                        <td><?php echo __('100 Ton de plástico usado'); ?></td>
                        <td><?php echo __('100 Ton de Granulado (PP e PE)'); ?></td>
                        <td><?php echo __('Nacional'); ?></td>
                        <td><?php echo __('PP -Caixas, Vasos, Bacias, Baldes, PE – Sacos, Cestos, HDPE – Cadeiras, Mesas'); ?></td>
                    </tr>
                    <tr>
                        <td class="b"><?php echo __('Oxigénio Industrial'); ?></td>
                        <td><?php echo __('n.a.'); ?></td>
                        <td><?php echo __('5.500 cilindros'); ?></td>
                        <td><?php echo __('Nacional'); ?></td>
                        <td><?php echo __('Corte de Metal'); ?></td>
                    </tr>
                </tbody>
            </table>
            <br /><br/>
        </div>
        </div>
    </div>
    <div class="h20"></div>
</div><!--// .conteudo_geral -->