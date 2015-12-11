<?php get_header(); ?>

<div class="container-fluid jo_container_fluid">
    <div class="container">
        <div class="row">
            <?php include_once ('breadcramp.php') ?>
            <?
            $args = array(
				'orderby'       => 'id', 
				'order'         => 'ASC',
				'hide_empty'    => true, 
				'exclude'       => array(), 
				'exclude_tree'  => array(), 
				'include'       => array(),
				'number'        => '', 
				'fields'        => 'all',
				'slug'          => $term,
				'parent'         => '',
				'hierarchical'  => true, 
				'child_of'      => 0, 
				'get'           => '', 
				'name__like'    => '',
				'pad_counts'    => false, 
				'offset'        => '', 
				'search'        => '', 
				'cache_domain'  => 'core',
				'name'          => '', 
				'childless'     => false, 
			); 

			$myterms = get_terms( array( 'disease_category' ), $args );
			?>
            <div class="jo_big_title col-md-12">
                <h1><?php echo $myterms[0]->name; ?></h1>
                <hr>
            </div>
            <?php 
	        foreach( $myterms as $cat ){ 
	            $taxonomy = $cat -> taxonomy;
	            $term_id = $cat -> term_id;  
	            $thumbnail = get_field('миниатюра', $taxonomy . '_' . $term_id);
	            $proc_img = get_field('иконка_сустава', $taxonomy . '_' . $term_id);
	        ?>
	        <div class="jo_treat_block">
	            <h2><?php echo $cat -> name; ?></h2>
	            <div class="col-md-2 col-sm-2 col-xs-4 jo_md2_img">
	                <img src="<?php echo $thumbnail['url']; ?>" alt="">
	            </div>
	            <div class="col-md-10 col-sm-10 col-xs-8 jo_md10_block">
	                
	                <div class="jo_md_mid">
	                    <div class="media">
	                        
	                      <div class="media-left">
	                          <img class="media-object" src="<?php echo $proc_img['url']; ?>" alt="">
	                      </div>
	                      <div class="media-body">
	                        <h4 class="media-heading">ПРОЦЕДУРЫ</h4>
	                        <p><?php the_field('процедуры', $taxonomy . '_' . $term_id); ?></p>
	                      </div>
	                    </div>
	                </div>
	            </div>
	            
	            <div class="col-md-12 col-xs-12 col-sm-12 jo_md12_block">
	                <h3>ЗАБОЛЕВАНИЯ</h3>
	                <?php 
	                $args = array(
	                    'post_type' => 'disease',
	                    'disease_category' => $cat->name,
	                );
	                $query = new WP_Query( $args );
	                ?>
	                <?php $i = 0; ?>
	                <?php while ($query->have_posts()) : $query->the_post(); ?>
	                
	                <?php $is_start = false; ?>
	                <?php if ($i > 2){ $is_start = true; ?>
	                <div class="clear"></div>
	                <div class="treatment-href_hidden">
	                <?php } ?>
	                <a href="<?php the_permalink(); ?>" class="treatment-href"><?php the_title(); ?></a>
	                <?php $i++; ?>
	                <?php endwhile; ?>
	                <?php if ($is_start == true){ ?>
	                </div>
	                <?php } ?>

	                <div class="clear"></div> 
	            </div>
	            
	            <div class="clearfix"></div>
	            <div class="col-dm-12">
	                <div class="jo_nomd">
	                    <a href="#" class="see_more_disease">Показать ещё</a>
	                </div>
	            </div>
	        </div>    
	        <?php          
	        }
	        ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
