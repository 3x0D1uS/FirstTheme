<section class="blogs-and-info"  id="blog">
                    <div class="info">
                        <div class="info-text">
                            <h3>MoGo</h3>
                            <p>
                                <?php echo $attributes['info-description'];?>
                            </p>
                            <span id="number"><?php echo $attributes['followers-count'];?>k</span><span id="followers">followers</span>
                        </div>
                        <div class="info-follow">
                            <span>Follow Us:</span>
                            <a href="/"><img src="<?php echo get_theme_file_uri()?>/images/follow-facebook.png" alt=""></a>
                            <a href="/"><img src="<?php echo get_theme_file_uri()?>/images/follow-twitter.png" alt=""></a>
                            <a href="/"><img src="<?php echo get_theme_file_uri()?>/images/follow-instagram.png" alt=""></a>
                            <a href="/"><img src="<?php echo get_theme_file_uri()?>/images/follow-pinterest.png" alt=""></a>
                            <a href="/"><img src="<?php echo get_theme_file_uri()?>/images/follow-youtube.png" alt=""></a>
                        </div>
                        <div class="info-form">
                            <input type="text" placeholder=" Your Email...">
                            <input type="submit" value="subscribe">
                        </div>
                    </div>
                    <div class="blogs">
                        <h5>blogs</h5>
                        <?php foreach( $attributes['blogs'] as $blog ): ?>
                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="<?php echo $blog['blog-image']['url']; ?>" alt="">
                                </div>
                                <div class="blog-text">
                                    <p class="blog-name">
                                        <?php echo $blog['blog-short'];?></p>
                                    <p class="blog-date"><?php echo $blog['blog-date'];?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="instagram">
                        <h5>Instagram</h5>
                        <div class="instagram-images">
                        <?php foreach( $attributes['instagram'] as $img ): ?>
                            <img src="<?php echo $img['insta-img']['url']; ?>" alt="">
                        <?php endforeach; ?>
                        </div>
                        <a href="/">View more photos</a>
                    </div>
            </section>