<div class="slider">
    <div class="slider-slide" id="slider-2">
        <?php foreach( $attributes['slider'] as $slides ): ?>
            <div class="slider-slide-item">
                <div class="slider-image">
                    <img src="<?php echo $slides['slide-image']['url']; ?>" alt="">
                </div>
                <div class="slider-text">
                    <p class="slider-quote">
                        <?php echo $slides['slide-quote'];?>
                    </p>
                    <p class="slider-quote-author">
                        <?php echo $slides['quote-author'];?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>