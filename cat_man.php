<?php
$sex=$_GET["sex"]

?>
<div class="span3 col">
    <div class="block">
        <ul class="nav nav-list">
            <li class="nav-header">SUB CATEGORIES</li>
            <?php
                $sub_categories=getCategoriesBySex($db,$sex);
                
                foreach($sub_categories as $sub_category)
                {
            ?>
                <li><a href=<?="products.php?sex=".$sex."&category=".$sub_category['category']?>><?= $sub_category['category'] ?></a></li>
            <?php
                }
            ?>
        </ul>
<!--         <br />
        <ul class="nav nav-list below">
        <li class="nav-header">MANUFACTURERS</li>
            <?php
                $brands=getManufacturesBySex($db,$sex);
                foreach($brands as $brand)
                {
            ?>
                <li><a href=<?="products.php?sex=".$sex."&brand=".$brand['brand']?>><?= $brand['brand'] ?></a></li>
            <?php
                }
            ?>
        </ul> -->
    </div>

</div>