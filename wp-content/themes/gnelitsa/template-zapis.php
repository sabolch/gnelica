<?php 
/*
Template name: Запись на прием
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
            <form action="" class="priom" >
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="text" name="uname" placeholder="Имя">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="text" name="phone" placeholder="Телефон">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 form_error">
                    <div class="col-md-12">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img//error_icon.png" alt="">
                        ОШИБКА! Пожалуйста, заполните все поля перед отправкой заявки!</p>
                    </div>
                </div>
                <div class="col-md-12 form_sended">
                    <div class="col-md-12">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img//error_icon.png" alt="">
                        Спасибо. Ваша заявка принята. Наш меджер свяжется с вами в ближайшее время </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
                </div>
                <div class="col-md-2 pull-right">
                    <input type="submit" id="send-form-button" value="ОтпрАвить">
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>


                
