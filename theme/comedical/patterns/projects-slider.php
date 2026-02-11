<?php
/**
 * Title: Comedical Projects Slider
 * Slug: comedical/projects-slider
 * Categories: featured
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cm-projects cm-section","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group cm-projects cm-section">
  <!-- wp:group {"className":"cm-container","layout":{"type":"constrained"}} -->
  <div class="wp-block-group cm-container">
    <!-- wp:heading {"level":2,"className":"cm-projects__title"} -->
    <h2 class="wp-block-heading cm-projects__title">Unsere bisherigen Projekte.</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"cm-projects__intro"} -->
    <p class="cm-projects__intro">Ein Auszug aus aktuellen Projekten zeigt, wie wir medizinische Inhalte visuell aufbereiten, digital zugänglich machen und mit hoher fachlicher Präzision realisieren.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"className":"cm-projects__actions"} -->
    <div class="wp-block-buttons cm-projects__actions">
      <!-- wp:button {"className":"cm-btn--outline"} -->
      <div class="wp-block-button cm-btn--outline"><a class="wp-block-button__link wp-element-button" href="/projekte">Alle Projekte im Überblick</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group {"className":"cm-slider","layout":{"type":"constrained"}} -->
    <div class="wp-block-group cm-slider" data-cm-slider>
      <button type="button" class="cm-slider__nav cm-slider__nav--prev" aria-label="Vorheriges Projekt" data-cm-slider-prev>
        <span aria-hidden="true">&#10094;</span>
      </button>

      <!-- wp:query {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"cm-slider__query"} -->
      <div class="wp-block-query cm-slider__query">
        <!-- wp:post-template {"className":"cm-slider__track"} -->
        <!-- wp:group {"className":"cm-slide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group cm-slide">
          <!-- wp:post-featured-image {"isLink":true,"height":"220px"} /-->

          <!-- wp:group {"className":"cm-slide__body","layout":{"type":"constrained"}} -->
          <div class="wp-block-group cm-slide__body">
            <!-- wp:post-title {"isLink":true,"level":3,"className":"cm-slide__title"} /-->

            <!-- wp:post-excerpt {"moreText":"","excerptLength":18,"className":"cm-slide__excerpt"} /-->

            <!-- wp:read-more {"content":"Mehr Infos","className":"cm-slide__more"} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->

      <button type="button" class="cm-slider__nav cm-slider__nav--next" aria-label="Nächstes Projekt" data-cm-slider-next>
        <span aria-hidden="true">&#10095;</span>
      </button>
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
