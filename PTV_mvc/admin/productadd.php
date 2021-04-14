<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php';?>
<?php
    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertProduct = $pd->insert_product($_POST,$_FILES);
        
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm nội dung</h2>
        <div class="block">    
         <?php

                if(isset($insertProduct)){
                    echo $insertProduct;
                }

            ?>             
         <form action="productadd.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tiêu đề</label>
                    </td>
                    <td>
                        <input type="text" name="productName"class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Tử vi</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>Trống</option>
                            <?php
                            $cat = new category();
                            $catlist = $cat->show_category();

                            if($catlist){
                                while($result = $catlist->fetch_assoc()){
                             ?>

                            <option value="<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>

                               <?php
                                  }
                              }
                           ?>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Cung hoàng đạo</label>
                    </td>
                    <td>
                        <select id="select" name="brand">
                            <option>Trống</option>

                             <?php
                            $brand = new brand();
                            $brandlist = $brand->show_brand();

                            if($brandlist){
                                while($result = $brandlist->fetch_assoc()){
                             ?>

                            <option value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>

                               <?php
                                  }
                              }
                           ?>
                           
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Nội dung</label>
                    </td>
                    <td>
                        <textarea name="product_desc"  rows="10" cols="67" ></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" placeholder="Enter Price..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Tải ảnh</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Select Type</option>
                            <option value="0">Featured</option>
                            <option value="1">Non-Featured</option>
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Tải lên" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


