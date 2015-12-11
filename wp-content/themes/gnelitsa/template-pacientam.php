<?php 
/*
Template Name: Пациентам

*/
 ?>

<?php get_header(); ?>

<div class="container-fluid jo_container_fluid">
        <div class="container">
            <div class="row">
              <?php include_once ('breadcramp.php') ?>
               
                <div class="jo_big_title col-md-12">
                    <h1>ИНФОБЛОГ</h1>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-12 jo_main_left">
                    <?php require_once('infoblog-menu.php'); ?>
                </div>
                <div class="col-lg-8 col-md-12 jo_main_right">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs jo_nav_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" class="jo_tab_fbtn">Предоперационная<br> подготовка</a></li>
                            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" class="jo_tab_sbtn">Где сделать МРТ?</a></li>
                            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" class="jo_tab_thbtn">Лечение в клинике</a></li>
                            <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab" class="jo_tab_fobtn">Где пройти<br> реабилитацию?</a></li>
                            <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab" class="jo_tab_fvbtn">Лечение по <br>
ОМС \ ДМС \ квоте</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content jo_tab_content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                              <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК</h2>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    <div class="media">
                                      <div class="media-left media-middle">
                                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/mid_img.png" alt="mid_img">
                                      </div>
                                      <div class="media-body">
                                        <p>
                                            Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                      </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК</h2>
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div id="carousel-example-generic" class="carousel slide jo_slide" data-ride="carousel">
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                  </div>
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  </a>
                                </div>
                                <div class="col-md-12">
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                                </div>
                                
                                <div class="jo_download">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="text.txt" download>анализы (txt)</a>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="file.doc.pdf" download>подготовка к операции <br>(pdf)</a>
                                    </div>
                                </div>
						        

                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК1</h2>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    <div class="media">
                                      <div class="media-left media-middle">
                                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/mid_img.png" alt="mid_img">
                                      </div>
                                      <div class="media-body">
                                        <p>
                                            Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                      </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК</h2>
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div id="carousel-example-generic" class="carousel slide jo_slide" data-ride="carousel">
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                  </div>
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  </a>
                                </div>
                                <div class="col-md-12">
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                               
                                <div class="jo_download">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="text.txt" download>анализы (txt)</a>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="file.doc.pdf" download>подготовка к операции <br>(pdf)</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab3">
                                
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК2</h2>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    <div class="media">
                                      <div class="media-left media-middle">
                                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/mid_img.png" alt="mid_img">
                                      </div>
                                      <div class="media-body">
                                        <p>
                                            Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК</h2>
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div id="carousel-example-generic" class="carousel slide jo_slide" data-ride="carousel">
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                  </div>
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  </a>
                                </div>
                                <div class="col-md-12">
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                               
                                <div class="jo_download">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="text.txt" download>анализы (txt)</a>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="file.doc.pdf" download>подготовка к операции <br>(pdf)</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab4">
                                
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК3</h2>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    <div class="media">
                                      <div class="media-left media-middle">
                                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/mid_img.png" alt="mid_img">
                                      </div>
                                      <div class="media-body">
                                        <p>
                                            Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                      </div>
                                    </div>
                                </div>
                             
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК</h2>
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div id="carousel-example-generic" class="carousel slide jo_slide" data-ride="carousel">
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                  </div>
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  </a>
                                </div>
                                <div class="col-md-12">
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                            
                                <div class="jo_download">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="text.txt" download>анализы (txt)</a>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="file.doc.pdf" download>подготовка к операции <br>(pdf)</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab5">
                                
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК4</h2>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    <div class="media">
                                      <div class="media-left media-middle">
                                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/mid_img.png" alt="mid_img">
                                      </div>
                                      <div class="media-body">
                                        <p>
                                            Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                      </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-12">
                                    <h2>подЗАГОЛОВОК</h2>
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div id="carousel-example-generic" class="carousel slide jo_slide" data-ride="carousel">
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/big_img.jpg" alt="big_img">
                                    </div>
                                  </div>
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  </a>
                                </div>
                                <div class="col-md-12">
                                    <p>Felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                </div>
                              
                                <div class="jo_download">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="text.txt" download>анализы (txt)</a>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/file_icon.png" alt="file_icon">
                                        <p>Скачать файл:</p>
                                        <a href="file.doc.pdf" download>подготовка к операции <br>(pdf)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<?php get_footer(); ?>