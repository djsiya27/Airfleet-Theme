<?php 

$className = 'header';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<div class="<?php echo esc_attr($className);  ?> ">
<div class="container-fluid header-background">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="header__text"><?php the_field('header_title'); ?></h1>
            <p class="header__description">
              <?php the_field('header_description'); ?>
            </p>
            <?php $contact_us_button = get_field('contact_us_button');	?>
            <a class="btn btn-contact" href="<?php echo $contact_us_button['url']; ?>" target="<?php echo $contact_us_button['target']; ?>" role="button"><?php echo $contact_us_button['title']; ?></a>
            <?php $read_more_button = get_field('read_more_button');  ?>
            <a class="btn btn-read" href="<?php echo $read_more_button['url']; ?>" target="<?php echo $read_more_button['target']; ?>"role="button"><?php echo $read_more_button['title']; ?></a>
          </div>
          <div class="col-md-6 image">
          <?php
          $header_image = get_field('header_image');
          $imageurl =  $header_image['sizes']['large']; 
          $mobile_image = get_field('mobile_image');
          $picture = $mobile_image['sizes']['large'];
          ?>
            <img
              src="<?php echo $imageurl; ?>"
              alt=""
              class="illustration-desktop"
            />
          
          </div>
          <img
              src="<?php echo $picture; ?>"
              alt=""
              class="illustration-mobile"
            />
        </div>
      </div>
    </div>
</div>