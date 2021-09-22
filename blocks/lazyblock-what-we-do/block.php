<section class="what-we-do">
        <div class="second-section-main-content">
            <div class="main-content-text">
                <h4 class="second-section-subtitle">
                    <?php echo $attributes['section-subtitle'];?>
                </h4>
                <h2 class="second-section-title">
                    <?php echo $attributes['section-title'];?>
                </h2>
                <div class="separator"></div>
                <p class="main-text">
                    <?php echo $attributes['section-text'];?>
                </p>
            </div>
            <div class="main-content-gallary">
                <?php foreach( $attributes['gallary-item'] as $inner ): ?>
                <div class="gallary-item">
                    <div class="gallary-image">
                        <img src="<?php echo $inner['gallary-item-image']['url']; ?>" alt="">
                    </div>
                    <div class="gallary-item-logo">
                        <img src="<?php echo $inner['gallary-hover-image']['url']; ?>" width="119px" height="48px" alt="">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="statistics">
            <?php foreach( $attributes['statistics-item'] as $stat ): ?>
                <div class="statistics-item">
                    <p class="statistics-count"><?php echo $stat['statistics-number']; ?></p>
                    <p class="statistics-description"><?php echo $stat['statistics-description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>