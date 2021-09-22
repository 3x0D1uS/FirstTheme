<section class="service" id="second">
    <div class="fifth-section-headers">
        <h2 class="fifth-section-subtitle">
            <?php echo $attributes['section-subtitle'];?>
        </h2>
        <h4 class="fifth-section-title">
            <?php echo $attributes['section-title'];?>
        </h4>
        <div class="separator"></div>
        <p class="fifth-section-headers-text">
            <?php echo $attributes['section-text'];?> 
        </p>
    </div>
    <div class="fifth-section-content">
        <div class="fifth-section-content-image">
            <img src="<?php echo $attributes['content-image']['url']; ?>" alt="">
        </div>
            <div class="accordion">
            <?php foreach( $attributes['accordion-item'] as $key => $inner ): ?>
                <?php $open = ($key == 0) ? ' open' : ''; ?>
                <div class="accordion-item<?php echo $open;?>">
                    <div class="accordion-item-head"><img src="<?php echo $inner['accordion-img']['url']; ?>" alt=""><?php echo $inner['accordion-item-name'];?></div>
                    <div class="accordion-item-content">
                        <p><?php echo $inner['accordion-item-text'];?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        
    </div>
</section>