<?php
/**
 * Title: Comedical Clients
 * Slug: comedical/clients
 * Categories: featured
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cm-clients","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group cm-clients">
  <!-- wp:group {"className":"cm-container cm-clients__inner","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
  <div class="wp-block-group cm-container cm-clients__inner">
    <!-- wp:paragraph {"className":"cm-clients__label"} -->
    <p class="cm-clients__label">Kunden</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"className":"cm-clients__list","layout":{"type":"constrained"}} -->
    <div class="wp-block-group cm-clients__list" aria-label="Kundenlogos">
      <div class="cm-clients__track">
        <div class="wp-block-group cm-clients__item">
          <img class="cm-clients__logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/AstraZeneca_logo.svg' ); ?>" alt="AstraZeneca" loading="lazy" decoding="async" />
        </div>
        <div class="wp-block-group cm-clients__item">
          <img class="cm-clients__logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Logo_Bayer.svg' ); ?>" alt="Bayer" loading="lazy" decoding="async" />
        </div>
        <div class="wp-block-group cm-clients__item" aria-hidden="true">
          <img class="cm-clients__logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/AstraZeneca_logo.svg' ); ?>" alt="" loading="lazy" decoding="async" />
        </div>
        <div class="wp-block-group cm-clients__item" aria-hidden="true">
          <img class="cm-clients__logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Logo_Bayer.svg' ); ?>" alt="" loading="lazy" decoding="async" />
        </div>
      </div>
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
