<?php
  $recipe_cooking_level = get_field('recipe_cooking_level');
  $recipe_cooking_time = get_field('recipe_cooking_time');
  $recipe_cooking_serve = get_field('recipe_cooking_serve');
  $recipe_thumbnail = get_field('recipe_thumbnail');
?>
<div class="c-media-list__item">
  <a class="c-media-list__link" href="<?php echo get_the_permalink(); ?>">
    <div class="c-media-list__card">
      <div class="c-media-list__frame">
        <?php if($recipe_thumbnail['url']!=''): ?><img class="c-media-list__image" src="<?php echo $recipe_thumbnail['url']; ?>" alt="<?php echo $recipe_thumbnail['alt']; ?>"><?php endif; ?>
        <div class="c-badge__list">
          <?php if($recipe_cooking_level!=''): ?>
          <div class="c-badge__item -level">
            <div class="icon"></div>
            <div class="text"><?php echo str_replace(array('Level ', 'Level'), '', $recipe_cooking_level); ?></div>
          </div>
          <?php endif; ?>
          <?php if($recipe_cooking_time !='' ): ?>
          <div class="c-badge__item -time">
            <div class="icon"></div>
            <div class="text"><?php echo $recipe_cooking_time; ?></div>
          </div>
          <?php endif; ?>
          <?php if($recipe_cooking_serve !='' ): ?>
          <div class="c-badge__item -serve">
            <div class="icon"></div>
            <div class="text"><?php echo $recipe_cooking_serve; ?></div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="c-media-list__heading"><?php echo get_the_title(); ?></div>
      <?php if(get_field('recipe_short_description')!=''): ?>
      <div class="c-media-list__text"><?php echo get_field('recipe_short_description'); ?></div>
      <?php endif; ?>
    </div>
  </a>
</div>