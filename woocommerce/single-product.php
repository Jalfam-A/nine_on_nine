<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');

?>

<main id="primary" class="site-main">
  <div class="container">
    <?php
    while (have_posts()) :
      the_post();
      ?>
      <div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
        <div class="single-product-content">
          <div class="product-image-summary-wrap">
            <div class="product-image">
              <?php woocommerce_show_product_images(); ?>
            </div>
            <div class="product-summary">
              <?php
              woocommerce_template_single_title();
              woocommerce_template_single_rating();
              woocommerce_template_single_price();
              woocommerce_template_single_excerpt();
              woocommerce_template_single_add_to_cart();
              woocommerce_template_single_meta();
              woocommerce_template_single_sharing();
              ?>
            </div>
          </div>
          <div class="product-tabs">
            <?php woocommerce_output_product_data_tabs(); ?>
          </div>
        </div>
      </div>

    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php
get_footer('shop');
