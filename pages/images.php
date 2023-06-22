<?php include_once '../partials/header.php'?>
<?php include_once '../partials/navbar.php'?>
<div style="margin-top:-40px;"></div>
<?php include_once '../partials/sidebar1.php'?> 

  <!-- Page Content Holder -->
<div id="content" >
  
<!-- NAVIGATION SECTION OF PAGE -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>  
                </div>
            </nav>
            
 <!-- END NAVIGATION SECTION OF PAGE -->
            <div class="body-content p-3">
                  <h1 class='pb-5'>Images</h1>
                  
                  <div class="row">
                    <div class="col-sm-6">
                        <!-- images example 1 -->
                        <div class="h3 pb-4">Example 1 responsive image !</div>
                        <img src="../images/img2.jpg" class="img-fluid" alt="..." >
                        <!-- images example 1 ! -->
                    </div>
                    <div class="col-sm-6">
                        <!-- images example 2 -->
                        <div class="h3 pb-4">Example 2 thumbnail image !</div>
                        <img src="../images/img1.jpg" class="img-thumbnail" alt="...">
                        <!-- images example 2 ! -->
                    </div>
                  </div>
                  
                  <!-- images example 3 -->
                  <br><br>
                  <div class="h3 pb-4">Example 3 with rounded edges!</div>
                  <img src="../images/img.jpg" class="rounded float-start" alt="..."style="width:40%;">
                  <img src="../images/img5.jpg" class="rounded float-end" alt="..."style="width:40%;">
                   <!-- images example 3 ! -->
                  
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>