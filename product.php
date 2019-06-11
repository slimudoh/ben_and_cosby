<?php
    include "assets/inc/header.php";
?>


<body class="page page-id-33 page-parent subpage products-brands has_sidebar"
      style="background-image: url(http://www.nicholasandco.com/uploads/2014/03/lrg9390.jpg);">
<div id="pagewrap"><!--[if lt IE 8]>
    <div class="alert alert-warning">You are using an <strong>outdated</strong> browser. Please <a
            href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </div><![endif]-->
     <?php
        include "assets/inc/nav.php";
    ?>
    <div id="page-main">
        <div id="jumboimage" class="container visible-xs"><img
                    src="http://www.nicholasandco.com/uploads/2014/03/lrg9390.jpg" class="img-responsive"></div>
        <div class="wrap container" role="document">
            <div class="content row">
                <nav id="breadcrumb" role="navigation"><span xmlns:v="http://rdf.data-vocabulary.org/#"><ul
                                class="breadcrumb"><li><span typeof="v:Breadcrumb"><a
                                            href="http://www.nicholasandco.com/" rel="v:url" property="v:title">Home</a> / <strong
                                            class="breadcrumb_last">Products &#038; Brands</strong></span></li></ul></span>
                </nav>
                <aside id="left-sidebar" class="featured-image col-sm-3 col-sm-offset-0 hidden-xs" role="complementary">
                    <figure class="featured-image"><img
                                src="http://www.nicholasandco.com/uploads/2014/03/foodiesfeed.com_amazing-colorful-italian-cuisine-ingredients3-683x1024.jpg"
                                width="100%"></figure>
                </aside>
                <main id="content" class="main col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0 col-md-6" role="main">
                    <div class="page-header"><h1> Products &#038; Brands</h1></div>
                    <h2>The Brands You Want, The Brands You Need</h2>
                    <p>With exclusive brands, specialty services and the best vendor partners in the business, Nicholas
                        and Company has an extensive inventory of products to offer our clients.</p>
                    <ul>
                        <li>Leader in food safety</li>
                        <li>Over 10,000 products</li>
                        <li>Next Day service on fresh products</li>
                        <li>Market trend forecasting and product suggestions</li>
                        <li>Unsurpassed quality control</li>
                        <li>Consistent high quality products</li>
                    </ul>
                    <h2>Inventory Search</h2>
                    <div class="inventory_search well"><h4>Inventory Search</h4>
                        <p>Nicholas and Company has an extensive inventory of items.</p>
                        <form method='post' name='searchform' action='http://inventory.nicholasandco.com/'>
                            <table>
                                <tr>
                                    <td><b>Search For:</b></td>
                                    <td><input name='searchbox' size='20'></td>
                                    <td><b>Sort By:</b></td>
                                    <td><select name=sortby>
                                            <option value=ITITEM>Item Number
                                            <option value=ITDESC>Description
                                            <option value=ITPKR>Brand
                                        </select></td>
                                </tr>
                                <tr>
                                    <td align='center'><input type='SUBMIT' name='submit' value='search'></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </main>
                <?php
                              include "assets/inc/aside.php";
                       ?>
            </div>
        </div>
    </div>
  <?php
        include "assets/inc/bottom.php";
    ?>
    <div id='push'></div>
</div>

<?php
    include "assets/inc/footer.php";
?>
