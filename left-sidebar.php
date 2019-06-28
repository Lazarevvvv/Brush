
<div class="container"> 
            <div class="row main-area">
                <div class="col-sm-2 col-xs-3 block-side-nav">
                    <ul>
                    <?php 
                    $categories = get_categories_all();
                    foreach ($categories as $category) :
                    ?>
                        <li><a href="http://brush/categories.php?id=<?php echo $category[id]?>"><?php echo $category[categories_title]?></a></li>
                    <?php endforeach; ?>
                        <li class="last">
                            <a href="https://www.dogtrainingpress.com/">
                                <div class="blocklooking">
                                    <small>Looking for our K9 titles?</small>
                                    <img src="http://brush/img/dog.svg" alt="dogtrainingpress">
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="catalog">
                        <h4>Catalog Download</h4>
                        <a href="#">
                            <img src="http://brush/img/catalog.jpg" alt="catalog">
                        </a>
                        <a href="#">2019 Catalogue</a>
                    </div>
                </div>