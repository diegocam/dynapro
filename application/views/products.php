<div id="page_title_container_outter">
    <div id="page_title_container_inner">
        <div id="breadcrumbs">
            <a class="inactive" href="<?= base_url() ?>">Home</a>
            <span class="separator">></span>
            <a class="actve"><?= $page_name ?></a>
        </div>
        <div class="clear_float"></div>
    </div>
</div>
<div class="page_conatiner">
    <?php foreach ($products as $product) { ?>
        <div class="product_tile">
            <div class="image"><?= $product->product_img_name ?></div>
            <div class="title"><?= $product->product_name ?></div>
            <div><?= $product->product_description ?></div>
            <div class="highlight">
                <ul>
                    <?php
                    $highlights = json_decode($product->product_highlights);
                    $num = 0;
                    foreach ($highlights as $highlight) {
                        if ($num % 2 == 0) {
                            echo "<li class='even'>$highlight</li>";
                        } else {
                            echo "<li class='odd'>$highlight</li>";
                        }
                        $num++;
                    }
                    ?>
                </ul>
            </div>
            <div class="footer">
                <button>Test</button>
            </div>
        </div>
    <?php } ?>
</div>