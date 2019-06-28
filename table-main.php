</div> 
    <?php foreach ($singles as $single): 
        $author = get_authors_by_id($single[author_id]);
        $category_by_id = get_categories_by_id($single[category_id]);?>
        <ul>
            <li>
                <div class="media">
                    <a href="http://brush/books/stuck.php?id=<?php echo $single[id]?>">
                        <img src="http://brush/img/<?php echo $single[img]?>" alt="">
                    </a>
                    <div class="book-details">
                        <h3>
                            <a href="http://brush/books/stuck.php?id=<?php echo $single[id]?>"><?php echo $single[title]?></a>
                        </h3>
                        <h4>
                        <?php echo $single[subtitle]?>
                        </h4>
                        <h5>
                        <?php echo $author[name]?>
                        </h5>
                        <p>
                        <?php echo $single[text]?>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    <?php endforeach; ?>
    </div>
            </div>
        </div>
    </div>
</main>