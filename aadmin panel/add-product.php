<?php 
    include('header.php');
     $result=$obj->addProduct();
     if (!$_SESSION['user']) {
         # code...
         echo("<script>window.location.href='signin.php'</script>"); 
     }
?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Product</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
         </ol>
	   </div>

	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a href="javaScript:void();" class="dropdown-item">Action</a>
                    <a href="javaScript:void();" class="dropdown-item">Another action</a>
                    <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                </div>
            </div>
       </div>
     </div>
    <!-- End Breadcrumb-->
	<?php 
         
    ?>
    <div class="alert"></div>
	<div class="row ">
	  <div class="col-12 col-lg-13 col-xl-13">
	      <div class="card">
			  <div class="card-header text-uppercase">Add Product</div>
			  <div class="card-body">
				    <form method="post" action="" enctype="multipart/form-data"  >
				
		
					  
                        
                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom03" name="name" required placeholder="Enter name">
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="validationCustom03" name="stock" required placeholder="Enter stock">
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>
					
                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Buy Price</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="validationCustom03" name="b_price" required placeholder="Enter buy price">
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>    

                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Sell Price</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="validationCustom03" name="s_price" required placeholder="Enter sell price">
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                <select name="c_id" id="" class="form-control" >
                                    <option value="">Select One</option>
                                    <?php 
                                        foreach ($obj->selectCategories() as $row) {
                                            # code...
                                            ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                        <?php 
                                        }
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Images</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="validationCustom03" name="img[]" required placeholder="Enter name" multiple="true">
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="validationCustom03" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                        <textarea name="dec" class="form-control" id="validationCustom03" cols="30" rows="10" required></textarea>

                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                                <!-- <label for="validationCustom07" class=" col-form-label"></label> -->
                                <div class="col-lg-4">    
                                <button class="btn btn-light" type="submit" name="btn1">Add</button>
                            </div>
                        </div>
                    
				    </form>
			  </div>
			</div>
        </div>
			
    </div>
<!--start overlay-->
	  <div class="overlay"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
<?php 
    include('footer.php') 
?>