<section class="who-we-are">
                <div class="six-section-headers">
                    <h2 class="six-section-headers-subtitle">
                        <?php echo $attributes['section-subtitle'];?>
                    </h2>
                    <h4 class="six-section-headers-title">
                        <?php echo $attributes['section-title'];?>
                    </h4>
                    <div class="separator"></div>
                    <p class="six-section-headers-text">
                        <?php echo $attributes['section-text'];?>
                    </p>
                </div>
                <div class="six-section-content">
                <?php foreach( $attributes['gallary-item'] as $inner ): ?>
                    <div class="six-section-content-item">
                        <div class="six-section-content-item-image">
                            <div class="six-section-content-item-image-container">
                                <img src="<?php echo $inner['gallary-item-image']['url']; ?>" alt="">
                                <div class="media-hover">
                                    <a href="/" class="media facebook"></a>
                                    <a href="/" class="media twitter"></a>
                                    <a href="/" class="media pinterest"></a>
                                    <a href="/" class="media instagram"></a>
                                </div>
                            </div>
                        </div>
                        <div class="six-section-content-item-desc">
                            <p class="who-we-are-name">
                                <?php echo $inner['gallary-item-name'];?>
                            </p>
                            <p class="who-we-are-position">
                                <?php echo $inner['gallary-item-position'];?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="six-section-examples">
                    <?php foreach( $attributes['examples'] as $example ): ?>
                        <div class="example-image">
                            <img src="<?php echo $example['example']['url']; ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>