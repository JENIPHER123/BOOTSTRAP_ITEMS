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
                  <h1 class='pb-5'>Bootstrap Breadcrum</h1>
                 
                  <!-- breadcrum example 1 -->
                  <div class="h3">Example 1 !</div>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                  </nav>

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                  </nav>

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Library</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                  </nav>
                  <br>
                  <!-- breadcrum example 1 ! -->
      

         </div>

  <!-- end body section-->

<?php include_once '../partials/footer.php'?>