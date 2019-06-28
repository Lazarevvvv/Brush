<?php require 'header.php'?>
    <link rel="stylesheet" href="http://brush/css/style_new.css">
    <?php 
        $singles = get_allsingles_by_id($_GET["id"]);
        $category_by_id = get_categories_by_id($_GET["id"]);
    ?>
    <title><?php echo $category_by_id[categories_title];?></title>
</head>
<?php require 'under-head.php'?>
    <div class="col-md-5">
        <a href="/">Home</a>   / <?php echo $category_by_id[categories_title];?>
    </div>
<?php require 'mobile-nav.php'?>
    </div>
</header>
<main>
<?php require 'left-sidebar.php'?>
    <div class="col-md-9">
        <div class="main-content-area">
            <div class="page-header">
                <h1>
                    <?php echo $category_by_id[categories_title];?>
                </h1>
    <?php if($_GET["id"] ==5){
        echo '<ul class="nav nav-pills">
                <li><a href="http://brush/catalog/Education,Social Sciences/Math_in_A_Cultural_Context.php">Math in A Cultural Context</a></li>
                <li><a href="http://brush/categories.php?id=7">Indigenous</a></li>
            </ul>';
    };?>
<?php require 'table-main.php'?>

<?php require 'footer.php'?>