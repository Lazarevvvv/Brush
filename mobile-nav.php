</div>
<button class="mobile-nav">
    <hr>
</button>
<div class="mobile-nav-menu">
    <ul class="mobile-nav-ul">
        <li class="mobile-first">
            <span class="mobile-span">Catalog
                <span class="caret"></span>
            </span>
            
            <ul class="mobile-nav-ul ul-first-mobile">
            <?php 
                $categories = get_categories_all();
                foreach ($categories as $category) :
            ?>
                <li><a href="http://brush/categories.php?id=<?php echo $category[id]?>"><?php echo $category[categories_title]?></a></li>
            <?php endforeach; ?>
            </ul>
        
        </li>
        <li class="mobile-twelve">
            <span class="mobile-span">Info
                <span class="caret"></span>
            </span>
            <ul class="mobile-nav-ul ul-twelve-mobile">
                <li><a href="http://brush/orders/contact_us.php">About Us</a></li>
                <li><a href="http://brush/orders/about_us.php">Contact</a></li>
                <li><a href="http://brush/orders/custom_Publishing.php">Custom Publishing</a></li>
                <li><a href="http://brush/orders/acknowledgements.php">Acknowledgements</a></li>
            </ul>
        </li>
    </ul>
</div>