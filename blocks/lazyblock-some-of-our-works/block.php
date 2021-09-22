<section class="seventh-section" id="third">
                <div class="seventh-section-headers">
                    <h2 class="seventh-section-headers-subtitle">
                        <?php echo $attributes['section-subtitle'];?>
                    </h2>
                    <h4 class="seventh-section-headers-title">
                        <?php echo $attributes['section-title'];?>
                    </h4>
                    <div class="separator"></div>
                    <p class="seventh-section-headers-text">
                        <?php echo $attributes['section-text'];?>
                    </p>
                </div>
                <div class="seventh-section-gallary">
                    <?php foreach( $attributes['gallary-item'] as $inner ): ?>
                        <div class="seventh-section-gallary-item">
                            <div class="seventh-section-gallary-item-image">
                                <img src="<?php echo $inner['gallary-item-image']['url']; ?>" alt="">
                            </div>
                            <div class="gallary-item-hover">
                                <img src="<?php echo $inner['hover-image']['url']; ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>