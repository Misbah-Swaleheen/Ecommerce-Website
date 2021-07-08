<?php 
    include('header.php');
     $result=$obj->addCategory();
?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Category</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
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
			  <div class="card-header text-uppercase">Add Category</div>
			  <div class="card-body">
				    <form method="post" action="" class="needs-validation" novalidate >
				
		
					  <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group ">
                                <!-- <label for="validationCustom03" class="col-sm-2 col-form-label">Categoy</label> -->
                                
                                <input type="text" class="form-control" id="validationCustom03" name="category" required>
                                <div class="invalid-feedback">
                                    This field is required.
                                </div>
                            </div>
                        </div>
					
				
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="validationCustom07" class=" col-form-label"></label> -->
                                
                                <button class="btn btn-light" type="submit" name="btn1">Add</button>
                            </div>
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