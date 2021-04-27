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
      <div class="row">
      <?php if( have_rows('icon_section') ): ?>
		<?php while( have_rows('icon_section') ) : the_row();

		$icon_background = get_sub_field('icon_background');
		$icon_title = get_sub_field('icon_title');
		$icon_description = get_sub_field('icon_description');
		$button_link = get_sub_field('button_link');
		$icon = get_sub_field('icon');
		$imageurl = $icon['sizes']['medium'];
        $button_background = get_sub_field('button_background');

		?>
        <div class="col-md-4">
          <div class="<?php echo $icon_background; ?>">
            <img src="<?php echo $imageurl; ?>" alt="lock" class="icon" />
          </div>
          <h1 class="icon-title"><?php echo $icon_title; ?></h1>
          <p class="icon-description">
           <?php echo $icon_description ?>
          </p>
          <a class="<?php echo $button_background; ?>" href="<?php echo $button_link['url'] ?>" target="<?php echo $button_link['target']; ?>" role="button"><?php echo $button_link['title']; ?></a>
        </div>
        <?php endwhile; ?>
			<?php endif; ?>
      </div>
    </div>
</div>