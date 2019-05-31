<?php
get_header();
?>
<style>
    .ead-preview {
        width: 50%;
        padding: 30px;
    }

    @media (max-width: 575.98px) {
        .ead-preview {
            width: 100%;
            padding: 30px;
        }
    }

</style>
<?php
$pdf_url = get_post_meta(get_the_ID(), 'muffia_product_spec', true);
if ($pdf_url):
    echo apply_filters('the_content', '[embeddoc  url="' . $pdf_url . '" download="none"]');
endif;
?>
<?php
get_footer();
?>
