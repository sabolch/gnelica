<?php 
/*
Template name: Лечение
*/
?>
<?php get_header(); ?>

<div class="container-fluid jo_container_fluid">
    <div class="container">
        <div class="row">
            <?php include_once ('breadcramp.php') ?>
            <div class="jo_big_title col-md-12">
                <h1><?php the_title(); ?></h1>
                <hr>
            </div>
            
            <?php 
            $args = array(
                'post_type' => 'disease',
                'disease_category' => 'коленный-сустав',
            );
            $query = new WP_Query( $args );
            ?>
            111111111 <br> 
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <?php the_title(); ?>  <br><br>      
            <?php endwhile; ?>
            222222222
            <div class="jo_treat_block">
                <h2>КОЛЕННЫЙ СУСТАВ</h2>
                <div class="col-md-2 col-sm-2 col-xs-4 jo_md2_img jo_md2_1"></div>
                <div class="col-md-10 col-sm-10 col-xs-8 jo_md10_block">
                    <div class="jo_md_mid">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/treat_min1.png" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">ПРОЦЕДУРЫ</h4>
                            <p>Диагностика, артроскопические и малоинвазивные операции, <br>
лечение травм и заболеваний коленного сустава.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 jo_md12_block">
                    <h3>ЗАБОЛЕВАНИЯ</h3>
                    <hr>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв передней крестообразной <br>связки (пластика связок)</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Одновременный разрыв передней <br>
и задней крестообразной связок</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрывы менисков</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Сшивание и резекция мениска</span></a>
                    </div>
                    <hr>
                    <div class="jo_nomd">
                        <a href="#">Показать ещё</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="jo_treat_block">
                <h2>Плечевой СУСТАВ</h2>
                <div class="col-md-2 col-sm-2 col-xs-4 jo_md2_img jo_md2_2"></div>
                <div class="col-md-10 col-sm-10 col-xs-8 jo_md10_block">
                    <div class="jo_md_mid">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/treat_min2.png" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">ПРОЦЕДУРЫ</h4>
                            <p>Диагностика, артроскопические и малоинвазивные операции, <br>
лечение травм и заболеваний плечевого сустава.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 jo_md12_block">
                    <h3>ЗАБОЛЕВАНИЯ</h3>
                    <hr>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Вывих в плечевом суставе</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Привычный вывих <br>
в плечевом суставе</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв сухожилий вращательной<br> манжеты (частичный/полный)</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Частичный разрыв сухожилия <br>
надостной мышцы</span></a>
                    </div>
                    <hr>
                    <div class="jo_nomd">
                        <a href="#">Показать ещё</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="jo_treat_block">
                <h2>голеностопный СУСТАВ</h2>
                <div class="col-md-2 col-sm-2 col-xs-4 jo_md2_img jo_md2_3"></div>
                <div class="col-md-10 col-sm-10 col-xs-8 jo_md10_block">
                    <div class="jo_md_mid">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/treat_min3.png" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">ПРОЦЕДУРЫ</h4>
                            <p>Диагностика, артроскопические и малоинвазивные операции, <br>
лечение травм и заболеваний голеностопного сустава.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 jo_md12_block">
                    <h3>ЗАБОЛЕВАНИЯ</h3>
                    <hr>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Хроническая нестабильность<br> голеностопного сустава</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв наружной связки<br> голеностопного сустава</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв дельтовидной связки</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв дистального <br>
межберцового синдесмоза</span></a>
                    </div>
                    <hr>
                    <div class="jo_nomd">
                        <a href="#">Показать ещё</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="jo_treat_block">
                <h2>локтевой СУСТАВ</h2>
                <div class="col-md-2 col-sm-2 col-xs-4 jo_md2_img jo_md2_4"></div>
                <div class="col-md-10 col-sm-10 col-xs-8 jo_md10_block">
                    <div class="jo_md_mid">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/treat_min4.png" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">ПРОЦЕДУРЫ</h4>
                            <p>Диагностика, атроскопические и малоинвазивные операции, <br>
лечение травм и заболеваний локтевого сустава.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 jo_md12_block">
                    <h3>ЗАБОЛЕВАНИЯ</h3>
                    <hr>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв латеральной коллатеральной<br> связки локтевого сустава</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Разрыв медиальной коллатеральной<br> связки локтевого сустава</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Латеральный/медиальный<br> эпикондилит</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Отрыв сухожилия бицепса </span></a>
                    </div>
                    <hr>
                    <div class="jo_nomd">
                        <a href="#">Показать ещё</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="jo_treat_block">
                <h2>тАЗОБЕДРЕННЫЙ СУСТАВ</h2>
                <div class="col-md-2 col-sm-2 col-xs-4 jo_md2_img jo_md2_5"></div>
                <div class="col-md-10 col-sm-10 col-xs-8 jo_md10_block">
                    <div class="jo_md_mid">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/treat_min5.png" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">ПРОЦЕДУРЫ</h4>
                            <p>Диагностика, артроскопические и малоинвазивные операции, <br>
лечение травм и заболеваний тазобедренного сустава.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 jo_md12_block">
                    <h3>ЗАБОЛЕВАНИЯ</h3>
                    <hr>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Импенджемент <br>
тазобедренного сустава</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Повреждение суставной губы</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Хондральные повреждения<br> тазобедренного сустава</span></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 jo_md3_block">
                        <a href="#"><i></i><span>Хондроматоз тазобедренного сустава</span></a>
                    </div>
                    <hr>
                    <div class="jo_nomd">
                        <a href="#">Показать ещё</a>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

<?php get_footer(); ?>                