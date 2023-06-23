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
                  <h1 class='pb-5'>Bootstrap Popovers</h1>
                  
                  <div class="row">
                    <div class="col-sm-4">
                        <!-- popover example 1 -->
                        <h1 class='pb-4'>Example 1 !</h1>
                        <button type="button" class="btn btn-secondary m-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                            Popover on top
                          </button>
                          <button type="button" class="btn btn-secondary m-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                            Popover on right
                          </button>
                          <button type="button" class="btn btn-secondary m-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            Popover on bottom
                          </button>
                          <button type="button" class="btn btn-secondary m-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                            Popover on left
                          </button>
                          <br><br><br>
                        <!-- popover example 1 ! -->
                    </div>
                    <div class="col-sm-4">
                          <!-- popover example 2 -->
                          <h1 class='pb-4'>Example 2 !</h1>
                          <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                          <br><br><br>
                          <!-- popover example 2 ! -->
                    </div>
                    <div class="col-sm-4">
                       <!-- popover example 3 -->
                        <h1 class='pb-4'>Example 3 !</h1>
                        <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                        <br><br><br>
                        <!-- popover example 3 ! -->
                    </div>
                  </div>


               

                  

                   
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>