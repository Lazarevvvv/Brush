<div class="col-sm-2 col-xs-3 block-side-nav">
    <?php $sidebars_right = get_about_us();
    foreach ($sidebars_right as $sidebar_right):
    ?>
    <ul>
        <li><a href="http://brush/orders/<?php echo $sidebar_right[title]?>.php"><?php echo $sidebar_right[title]?></a></li>
    </ul>
    <?php endforeach;?>
</div>