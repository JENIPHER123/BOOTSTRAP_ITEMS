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
                  <h1 class='pb-5'>Figures</h1>
                 
                  <div class="row">
                      <!-- figures example 1 -->
                      <div class="col-sm-6">
                      <div class="h3 pb-4 ">Example 1 !</div>
                      <figure class="figure">
                        <img src="../images/img1.jpg" class="figure-img img-fluid rounded " alt="...">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                      </figure>
                      </div>
                      <!-- figures example 1 ! -->

                      <!-- figures example 1 -->
                      <div class="col-sm-6">
                      <div class="h3 pb-4">Example 2 !</div>
                      <figure class="figure">
                        <img src="../images/img2.jpg" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                      </figure>
                      </div>
                      <!-- figures example 1 ! -->
                  </div>
                 

                  
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>