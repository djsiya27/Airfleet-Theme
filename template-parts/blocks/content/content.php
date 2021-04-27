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


    <div class="container">
    <?php  if(have_rows('content_section') ): ?>
                                    <?php while(have_rows('content_section') ): the_row(); ?>

                                            <?php if (get_row_layout() == 'column_section_one'): 
                                                
                                                $content = get_sub_field('content');
                                            ?>
        <div class="row">
        <?php foreach($content as $content): ?>
            <div class="col-md-6">
            <h1 class="second-title"><?php echo $content['title']; ?></h1>
            <p class="second-description">
            <?php echo $content['description']; ?>
            </p>
            <a class="btn-learn" href="<?php echo $content['button']['url']; ?>" target="<?php echo $content['button']['target']; ?>" role="button"><?php echo $content['button']['title']; ?></a>
            </div>
            <div class="col-md-6">
            <img
                src="<?php echo ($content['image']['url']); ?>"
                alt=""
                class="image-one image-fluid"
            />
            </div>
        </div>
        <?php endforeach; ?>
        </div>

    <div class="container-fluid background-content">
      <div class="container">
      <?php elseif(get_row_layout() == 'column_section_two'): 
								
								$content = get_sub_field('content');

								?>
        <div class="row">
        <?php foreach($content as $content): ?>
          <div class="col-md-6">
            <img
              src="<?php echo ($content['image']['url']); ?>"
              alt=""
              class="third-image image-fluid"
            />
          </div>
          <div class="col-md-6">
            <h1 class="third-title"><?php echo $content['title']; ?></h1>
            <p class="third-description">
            <?php echo $content['description']; ?>
            </p>
            <a class="btn-read-more" href="<?php echo $content['button']['url']; ?>" target="<?php echo $content['button']['target']; ?>" role="button"><?php echo $content['button']['title']; ?></a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
    </div>