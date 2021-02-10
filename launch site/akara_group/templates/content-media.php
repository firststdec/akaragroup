<?php
  $tags = get_the_terms( get_the_ID(), 'media_category' );
  if ( !empty( $tags ) ){
    $tags = $tags;
  } else {
    $tags = array();
  }
?>
<div class="c-media-list__item"><a class="c-media-list__link" href="<?php echo get_permalink(); ?>">
  <div class="c-media-list__card">
    <div class="c-media-list__frame">
    <?php $media_thumbnail = get_field('media_thumbnail'); ?>
    <?php if($media_thumbnail['url'] != ''): ?>
      <img class="c-media-list__image" src="<?php echo $media_thumbnail['url']; ?>" alt="<?php echo $media_thumbnail['alt']; ?>">
    <?php else: ?>
      <img class="c-media-list__image" src="/assets/img/media/img_media_01.png" alt="News">
    <?php endif; ?>

    <?php if($tags[0]->term_id != ''): ?>
      <div class="c-media-list__category">
        <?php if($tags[0]->slug == 'article'): ?>
        <div class="icon -print">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17">
            <text id="ico_article" transform="translate(6 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-6" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'press-release'): ?>
        <div class="icon -tv">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
            <text id="ico_press" transform="translate(9 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-8" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'print-media'): ?>
        <div class="icon -press">
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16">
            <text id="ico_print" transform="translate(9 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-9" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'tv-commercial'): ?>
        <div class="icon -press">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17">
            <text id="ico_tv" transform="translate(10 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-10" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php endif; ?>
        <div class="text"><?php echo $tags[0]->name; ?></div>
      </div>

    </div>
    <?php endif; ?>
    <div class="c-media-list__heading"><?php echo get_the_title(); ?></div>
    <div class="c-media-list__text"><?php echo get_field('media_short_description'); ?></div>
  </div></a>
</div>