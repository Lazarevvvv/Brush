<?php require '../header.php'?> 
    <link rel="stylesheet" href="../css/books.css">

    <title>Stuck!</title>
</head>
<?php require '../under-head.php' ?>
<?php views_update($_GET["id"]); ?>
<?php $single = get_singles_by_id($_GET["id"]); ?>

<?php $category_name = get_categories_by_id($single[category_id]); ?>
<?php $author_name = get_authors_by_id($single[author_id]); ?>   
                <div class="col-md-6">
                        <a href="/">Home</a>  / 
                        <a href="http://brush/categories.php?id=<?php echo $category_name[id]?>"><?php echo $category_name[categories_title]?></a> / <?php echo $single[title]?>
                </div>
<?php require '../mobile-nav.php' ?>
        </div>
    </header>
    <main>
<?php require '../left-sidebar.php'?>
 

                <div class="col-md-3">
                   <div class="main-content-area">
                        <img src="http://brush/img/<?php echo $single[img]?>" alt="">
                        <small>
                            $<?php echo $single[price_print]?> - print
                        </small>
                        <small>
                            $<?php echo $single[price_ebook]?> - ebook
                        </small>
                        <div class="book-details">
                            <dl>
                                <dt>
                                    <small>
                                        Published
                                    </small>
                                </dt>
                                <dd>
                                    <small>
                                        April 2019
                                    </small>
                                </dd>
                                <dt>
                                    <small>
                                        Pages
                                    </small>
                                </dt>
                                <dd>
                                    <small>
                                        <?php echo $single[pages]?>
                                    </small>
                                </dd>
                                <dt>
                                    <small>
                                        Binding
                                    </small>
                                </dt>
                                <dd>
                                    <small>
                                        Paperback
                                    </small>
                                </dd>
                                <dt>
                                    <small>
                                        Dimensions
                                    </small>
                                </dt>
                                <dd>
                                    <small>
                                        6x9in
                                    </small>
                                </dd>
                                <dt>
                                    <small>
                                        ISBN Print
                                    </small>
                                </dt>
                                <dd>
                                    <small>
                                        9781550597837
                                    </small>
                                </dd>
                                <dt>
                                    <small>
                                        ISBN eBook
                                    </small>
                                </dt>
                                <dd>
                                    <small>
                                        9781550597868
                                    </small>
                                </dd>
                            </dl>
                        </div>
                        <div class="area">
                            <span>
                                <a href="#">
                                    Browse Inside
                                </a>
                            </span>
                        </div>
                        <h4>
                            Available
                        </h4>
                        <h5>
                            Purchase From
                        </h5>
                        <small>
                            Please note: If your preferred Internet retailer is not listed below or if your preferred Internet retailer is out-of-stock or indicates weeks or months for delivery, please click UTP, where you can purchase directly from our distributor. Credit card required.
                        </small>
                        <div class="buy-link">
                            <div><a href="#">Amazon.ca</a></div>
                            <div><a href="#">Indigo</a></div>
                            <div><a href="#">Amazon.com</a></div>
                            <div><a class="last" href="#">Barnes & Noble</a></div>
                        </div>
                   </div>
                </div>
                <div class="col-md-7">
                    <div class="page-header">
                        <h1>
                            <?php echo $single[title]?>
                        </h1>
                        <h2>
                            <?php echo $single[subtitle]?> 
                        </h2>
                        <h3>
                            <a href="#"><?php echo $author_name[name]?></a>
                        </h3>
                    </div>
                    <div class="book-descr">
                        <p>
                            <?php echo $single[text]?>
                        </p>
                    </div>
                    <ul>
                        <li>Understand visual storytelling elements to tighten up your script and eliminate unnecessary dialogue.</li>
                        <li>See effective screenwriting elements in action with instructive examples from more than 200 classic and contemporary films.</li>
                        <li>Learn the secrets to creating unforgettable characters that drive the narrative forward and add depth to your story.</li>
                        <li>Create effective setups and payoffs to give your story internal logic, yet maintain the element of surprise.</li>
                        <li>Master elements of screenwriting craft, such as flashbacks and flash-forwards, time locks, subplots, twists, and more.</li>
                    </ul>
                    <h4>
                        Josh Miller
                    </h4>
                    <p class="info-book">
                        Josh Miller is an award-winning writer/producer who has penned or produced television programs for Paramount, Lifetime, Hallmark, Dick Clark Productions, Viacom, Disney Channel, PBS, Showtime, Family Channel, The Movie Network, Movie Central, Super Channel, Discovery Kids, YTV, CBC, APTN, Bravo, TVO, Omni 1, SCN, Knowledge Network and Access as well as feature films released by Universal, Warner Bros., Momentum, eOne, Equinoxe, First Look, DARO and Vision Films.
                    </p>
                </div>
            </div>
        </div>
    </main>
<?php require '../footer.php'?>