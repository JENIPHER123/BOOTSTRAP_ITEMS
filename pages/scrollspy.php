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
                  <h1 class='pb-5'>ScrollSpy</h1>
                 
                  <!-- scrollspy example 1 -->
                  <a href="https://getbootstrap.com/docs/5.0/components/scrollspy/"class="btn btn-success text-light" target="_blank" rel="noopener noreferrer">Click to See Example!</a>
                  <br><br>
                  <div class="cont15"data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
                    <p>For this set the overflow @ scroll and add styling and script to customize view.</p>
                  </div>
                  <!-- scrollspy example 1 ! -->
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>