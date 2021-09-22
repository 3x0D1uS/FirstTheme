<div class="slider">
    <div id="slider-1" class="slider-slide">
        <?php foreach( $attributes['slider'] as $slides ): ?>
            <div class="slider-slide-item">
                <div class="slider-image">
                    <img src="<?php echo $slides['slide-image']['url']; ?>" alt="">
                </div>
                <div class="slider-text">
                    <?php if(isset($slides['slide-quote'])):?>
                        <p class="slider-quote">
                            <?php echo $slides['slide-quote'];?>
                        </p>
                    <?php endif; ?>
                    <?php if(isset($slides['quote-author'])):?>
                        <p class="slider-quote-author">
                            <?php echo $slides['quote-author'];?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>