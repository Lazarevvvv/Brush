<div class="col-xs-9 col-sm-9 col-md-8 col-lg-8">
    <div class="home">
        <div class="row">
        <?php 
            $singles = get_singles_all(); 
            foreach ($singles as $single): 
            $author = get_authors_by_id($single[author_id]);
            $category_by_id = get_categories_by_id($single[category_id]);
        ?> 
            <div class="col-md-6">
                <div class="homepage-panel">
                    <h3>
                        <?php echo $category_by_id[categories_title]?>
                    </h3>
                    <div class="homepage-feature">
                        <a href="http://brush/books/stuck.php?id=<?php echo $single[id]?>">
                            <img src="http://brush/img/<?php echo $single[img]?>" alt="">
                        </a>
                        <h4>
                            <a href="http://brush/books/stuck.php?id=<?php echo $single[id]?>"><?php echo $single[title]?></a>
                        </h4>
                        <h5>
                            <?php echo $single[subtitle]?>
                        </h5>
                        <h6>
                            <?php echo $author[name] ?>
                        </h6>
                        <small>
                            <?php echo $single[text]?>
                        </small>
                        <p>
                            <?php echo $single[views]?> просмотров
                        </p>
                        <button onClick='location.href="http://brush/books/stuck.php?id=<?php echo $single[id]?>"' class="btn-more">More</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
            
            
        </div>
    </div>
    <hr>
    <a href="orders/remembering-dr-gregory-younging.html" class="copyright">Remembering Dr. Gregory Younging </a>
</div>