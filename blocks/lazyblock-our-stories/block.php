<section class="our-stories">
<div class="our-stories-headers">
    <h2 class="subtitle">
        <?php echo $attributes['section-subtitle'];?>
    </h2>
    <h4 class="title">
        <?php echo $attributes['section-title'];?>
    </h4>
    <div class="separator"></div>
</div>
<div class="our-stories-content">
    <?php foreach( $attributes['stories'] as $inner ): ?>
        <div class="our-stories-content-item">
            <div class="our-stories-image">
                <img src="<?php echo $inner['story-image']['url']; ?>" alt="">
                <div class="our-stories-date">
                <p class="date-day"><?php echo $inner['day']; ?></p>
                <p class="date-month"><?php echo $inner['month']; ?></p>
                </div>
            </div>
            <div class="our-stories-text">
                <p class="our-stories-name">
                    <?php echo $inner['story-name']; ?>
                </p>
                <p class="our-stories-desc">
                    <?php echo $inner['story-description']; ?>
                </p>
            </div>
            <div class="our-stories-statistics">
                <img src="<?php echo get_theme_file_uri()?>/images/our-stories-views.png" alt="">
                <span><?php echo $inner['story-views']; ?></span>
                <img src="<?php echo get_theme_file_uri()?>/images/our-stories-comments.png" alt="">
                <span><?php echo $inner['story-comments']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
    </div>    
</section>