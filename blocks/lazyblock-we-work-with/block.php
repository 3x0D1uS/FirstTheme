<section class="we-work-with">
    <div class="third-section-headers">
        <h2 class="third-section-subtitle">
            <?php echo $attributes['section-subtitle'];?>
        </h2>
        <h4 class="third-section-title">
            <?php echo $attributes['section-title'];?>
        </h4>
        <div class="separator"></div>
    </div>
    <div class="third-section-content">
        <div class="third-section-list">
        <?php foreach( $attributes['items'] as $inner ): ?>
            <div class="third-section-list-item">
                <div class="list-item-image">
                    <img src="<?php echo $inner['item-image']['url']; ?>" alt="">
                </div>
                <div class="list-item-content">
                    <p class="list-item-title"><?php echo $inner['item-header']; ?></p>
                    <p class="list-item-text"><?php echo $inner['item-text']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>