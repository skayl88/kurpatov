<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage eveXA-clean-theme
 */
get_header(); // подключаем header.php ?> 

<div class="b1 b1-5">
  <div class="container">
    <div class="box">
      <div class="page-title"><?php echo single_cat_title(); ?></div>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
      </p>
    </div>
  </div>
</div>  

<div class="container">
  <div class="page-sidebar">
    <div class="sedebar-menu-btn">Открыть меню</div>
    <div class="sidebar">
      <div class="sidebar-menu mb-40">
        <?php
                $categories = get_categories(array(
                  'orderby' => 'name',
                  'order' => 'ASC',
                  'child_of' => '2',
                ));
                foreach( $categories as $category ){
                  echo '<div class="item">
          <a href="' . get_category_link( $category->term_id ) . '" class="ttl-lnk act">'. $category->name .'</a>
        </div>';
                }
                
               ?>
      </div>
      <div class="btn-box">
        <a class="btn3" href="">Купить</a>
        <a class="btn4 v2" href=""><span>Демо - доступ</span></a>
      </div>
    </div>
    <div class="content">
      <div class="posts-list grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
        <div class="grid-item">
          <a class="item" href="<?php the_permalink(); ?>">
            <div class="img" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>') center center no-repeat;"></div>
            <div class="desc">
              <div class="ttl"><?php the_title(); ?></div>
              <div class="exerpt">
                <?php echo get_excerpt(110); ?>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; // конец цикла
        else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>  
          
          
      </div>
      <div class="loading"><?php pagination(); // пагинация, функция нах-ся в function.php ?></div>
    </div>
  </div>
</div>




<?php get_footer(); // подключаем footer.php ?>

<script>
    var $grid = $('.grid').masonry({
      itemSelector: '.grid-item',
      //columnWidth: '.grid-sizer',
      percentPosition: true
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry('layout');
    });
  </script>