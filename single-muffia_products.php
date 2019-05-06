<?php
get_header();
?>
<?php
$pdf_url = get_post_meta(get_the_ID(), 'muffia_product_spec', true);
echo $pdf_url;
echo apply_filters('the_content', '[flipbook  pdf="' . $pdf_url . '" download="none"]');
?>
<?php
get_footer();
?>
