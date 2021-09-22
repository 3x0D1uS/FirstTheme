<section class="happy-clients">
                <div class="eight-section-headers">
                    <h2 class="eight-section-headers-subtitle">
                        <?php echo $attributes['section-subtitle'];?>
                    </h2>
                    <h4 class="eight-section-headers-title">
                        <?php echo $attributes['section-title'];?>
                    </h4>
                    <div class="separator"></div>
                </div>
                <div class="eight-section-content">
                        <?php foreach( $attributes['list-item'] as $item ): ?>
                            <div class="eight-section-content-list-item">
                                <div class="eight-section-content-list-item-image">
                                    <img src="<?php echo $item['list-item-image']['url']; ?>" alt="">
                                </div>
                                <div class="eight-section-content-list-item-text">
                                    <h3 class="eight-section-content-name">
                                        <?php echo $item['list-item-name'];?>
                                    </h3>
                                    <h5 class="eight-section-content-position">
                                        <?php echo $item['list-item-position'];?>
                                    </h5>
                                    <div class="separator"></div>
                                    <p class="eight-section-content-text">
                                        <?php echo $item['list-item-text'];?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
            </section>