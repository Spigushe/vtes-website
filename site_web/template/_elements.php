<?php
function separateur($anchor = "", $color = "dark") {
    ?>
    <div class="col-6 ms-auto me-auto mb-4" id="<?php print($anchor) ?>">
        <div style="clear:both;"></div>
        <div class="w-100 border-bottom border-<?php print($color) ?> border-opacity-50 border-1 mt-2"></div>
    </div>
<?php
}

function vdb_link($link="#") {
    ?>
    <a class="vdb-button" id="vdb-button" <?php if ($link != "#") print("target=\"_blank\" href=\"$link\""); ?> rel="external">
        <img src="https://vdb.im/favicon.ico">
        VDB
    </a>
<?php
}

?>
