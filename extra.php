<div class="single-icon filter-dropdown">
    <select id='cat' name='cat' class="nice-select">
        <?php 
        echo"<option value='$cur_cat_id' selected>$cur_cat_name</option>";

        $cat_query = "SELECT * FROM p_cat";
        $cat_fetch = mysqli_query($con,$cat_query);
        while($cat=mysqli_fetch_array($cat_fetch)){
            $cat_id = $cat['cat_id'];
            $cat_name = $cat['cat_name'];
            
            echo"<option value='$cat_id'>$cat_name</option>";
        }
        ?>
    </select>
</div>
<div class="single-icon filter-dropdown">
    <select id='brand' name='brand' class="nice-select">

    <?php 
        echo"<option value='$cur_brand_id' selected>$cur_brand_name</option>";

        $brand_query = "SELECT * FROM p_brand";
        $brand_fetch = mysqli_query($con,$brand_query);
        while($brand=mysqli_fetch_array($brand_fetch)){
            $brand_id = $brand['brand_id'];
            $brand_name = $brand['brand_name'];
            
            echo"<option value='$brand_id'>$brand_name</option>";
        }
        ?>
    </select>
</div>
&nbsp;&nbsp;&nbsp;
<?php
if($cur_brand_id > 0 || $cur_cat_id > 0){
    echo"
        <button type='submit' name='reset' class='lezada-button lezada-button--small lezada-button--icon lezada-button--icon--left'> <i class='fa fa-refresh'></i> Reset Filter</button>
    ";
}
?>