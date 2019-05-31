<?php
get_header();
?>
<style>
    .ead-preview {
        width: calc(50% - 60px);
        padding: 30px 30px 0 30px;
        display: inline-block;
    }

    .ead-document {
        box-shadow: 0px 0px 20px #e61b33;
        border-radius: 10px;
        overflow: hidden;
    }

    @media (max-width: 575.98px) {
        .ead-preview {
            width: calc(100% - 60px);
        }
    }

    #product-content {
        width: calc(50% - 60px);
        padding: 30px 30px 0 30px;
        display: inline-block;
        float: right;
    }

</style>
<?php
$pdf_url = get_post_meta(get_the_ID(), 'muffia_product_spec', true);
if ($pdf_url):
    echo apply_filters('the_content', '[embeddoc  url="' . $pdf_url . '" download="none"]');
endif;
?>
<div id="product-content">
    <?php
    $content_post = get_post(get_the_ID());
    $content = $content_post->post_content;
    echo apply_filters('the_content', $content_post->post_content);
    ?>
</div>
<?php
get_footer();
?>
