<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/customer.php');
include_once ($filepath.'/../helpers/format.php');

 ?>
<?php
   
    if(!isset($_GET['customerid']) || $_GET['customerid']==NULL){
       echo "<script>window.location ='inbox.php'</script>";
    }else{
         $id = $_GET['customerid']; 
    }
     $cs = new customer();
  

?>
<?php  ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa danh mục</h2>

               <div class="block copyblock"> 
                
                <?php
                    $get_customer = $cs->show_customers($id);
                    if($get_customer){
                        while($result = $get_customer->fetch_assoc()){
                       
                ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['name'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['phone'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['city'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['country'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['address'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Zipcode</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['zipcode'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['email'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                      
						
                    </table>
                </form>

                <?php
                }
            }
                

                ?>

                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>