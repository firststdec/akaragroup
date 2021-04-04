<?php
  $tags = get_the_terms( get_the_ID(), 'news_category' );
  if ( !empty( $tags ) ){
    $tags = $tags;
  } else {
    $tags = array();
  }
?>
<div class="c-media-list__item"><a class="c-media-list__link" href="<?php echo get_permalink(); ?>">
  <div class="c-media-list__card">
    <div class="c-media-list__frame">
    <?php $news_thumbnail = get_field('news_thumbnail'); ?>
    <?php if($news_thumbnail['url'] != ''): ?>
      <img class="c-media-list__image" src="<?php echo $news_thumbnail['url']; ?>" alt="<?php echo $news_thumbnail['alt']; ?>">
    <?php else: ?>
      <img class="c-media-list__image" src="/assets/img/news/img_news_dummy.png" alt="News">
    <?php endif; ?>

    <?php if($tags[0]->term_id != ''): ?>
      <div class="c-media-list__category">
        <?php if($tags[0]->slug == 'social-activity'): ?>
        <div class="icon -print">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17">
            <text id="_" data-name="" transform="translate(7 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-6.5" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'marketing-activity'): ?>
        <div class="icon -tv">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18">
            <text id="_" data-name="" transform="translate(11 15)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-10" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'news'): ?>
        <div class="icon -press">
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16">
            <text id="_" data-name="" transform="translate(9 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-9" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'video'): ?>
        <div class="icon -press">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17">
            <text id="ico_tv" transform="translate(10 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-10" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php elseif($tags[0]->slug == 'article'): ?>
        <div class="icon -press">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17">
            <text id="ico_article" transform="translate(6 14)" fill="#777" font-size="16"
              font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
              <tspan x="-6" y="0"></tspan>
            </text>
          </svg>
        </div>
        <?php endif; ?>

        <div class="text"><?php echo $tags[0]->name; ?></div>
      </div>

    </div>
    <?php endif; ?>
    <div class="c-media-list__heading"><?php echo get_the_title(); ?></div>
    <div class="c-media-list__text"><?php echo get_field('news_short_description'); ?></div>
  </div></a>
</div>