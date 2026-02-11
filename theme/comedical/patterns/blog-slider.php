<?php
/**
 * Title: Comedical Blog Slider
 * Slug: comedical/blog-slider
 * Categories: featured
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cm-blog-slider cm-section","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group cm-blog-slider cm-section">
  <!-- wp:group {"className":"cm-container","layout":{"type":"constrained"}} -->
  <div class="wp-block-group cm-container">
    <!-- wp:group {"className":"cm-blog-slider__intro","layout":{"type":"constrained"}} -->
    <div class="wp-block-group cm-blog-slider__intro">
      <!-- wp:heading {"level":2,"className":"cm-blog-slider__title"} -->
      <h2 class="wp-block-heading cm-blog-slider__title">Unser Expertenblog</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"cm-blog-slider__text"} -->
      <p class="cm-blog-slider__text">Hier finden Sie aktuelle Fachbeiträge, Einordnungen und praxisnahe Insights aus Medical Writing, Kommunikation und Healthcare Marketing.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"cm-btn--outline"} -->
        <div class="wp-block-button cm-btn--outline"><a class="wp-block-button__link wp-element-button" href="/blog">Zur Bibliothek</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <div class="cm-slider cm-blog-slider__slider" data-cm-slider>
      <button class="cm-slider__arrow cm-slider__arrow--prev" type="button" aria-label="Vorherige Beiträge">
        <span aria-hidden="true">‹</span>
      </button>

      <div class="cm-slider__viewport" data-cm-slider-viewport>
        <!-- wp:query {"queryId":12,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"cm-slider__query"} -->
        <div class="wp-block-query cm-slider__query">
          <!-- wp:post-template {"className":"cm-slider__track"} -->
            <!-- wp:group {"tagName":"article","className":"cm-blog-card","layout":{"type":"constrained"}} -->
            <article class="wp-block-group cm-blog-card">
              <!-- wp:post-date {"format":"d.m.Y","className":"cm-blog-card__date"} /-->

              <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"cm-blog-card__image"} /-->

              <!-- wp:group {"className":"cm-blog-card__body","layout":{"type":"constrained"}} -->
              <div class="wp-block-group cm-blog-card__body">
                <!-- wp:post-title {"level":3,"isLink":true,"className":"cm-blog-card__title"} /-->

                <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":18,"className":"cm-blog-card__excerpt"} /-->

                <!-- wp:read-more {"content":"Mehr Infos","className":"cm-blog-card__button"} /-->
              </div>
              <!-- /wp:group -->
            </article>
            <!-- /wp:group -->
          <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
      </div>

      <button class="cm-slider__arrow cm-slider__arrow--next" type="button" aria-label="Nächste Beiträge">
        <span aria-hidden="true">›</span>
      </button>
    </div>
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
