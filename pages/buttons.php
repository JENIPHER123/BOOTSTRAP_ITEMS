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
                  <h1 class='pb-5'>Bootstrap Buttons</h1>

                  <!-- button example 1 -->
                  <div class="h3 pb-3">Example 1 !</div>
                  <button type="button" class="btn btn-primary">Primary</button>
                  <button type="button" class="btn btn-secondary">Secondary</button>
                  <button type="button" class="btn btn-success">Success</button>
                  <button type="button" class="btn btn-danger">Danger</button>
                  <button type="button" class="btn btn-warning">Warning</button>
                  <button type="button" class="btn btn-info">Info</button>
                  <button type="button" class="btn btn-light">Light</button>
                  <button type="button" class="btn btn-dark">Dark</button>
                  <button type="button" class="btn btn-link">Link</button>
                  <!-- button example 1 ! -->

                  <!-- button example 2 -->
                  <div class="h3 pb-3 pt-5">Example 1 outline !</div>
                  <button type="button" class="btn btn-outline-primary">Primary</button>
                  <button type="button" class="btn btn-outline-secondary">Secondary</button>
                  <button type="button" class="btn btn-outline-success">Success</button>
                  <button type="button" class="btn btn-outline-danger">Danger</button>
                  <button type="button" class="btn btn-outline-warning">Warning</button>
                  <button type="button" class="btn btn-outline-info">Info</button>
                  <button type="button" class="btn btn-outline-light">Light</button>
                  <button type="button" class="btn btn-outline-dark">Dark</button>    
                  <!-- button example 2 ! -->

                  <!-- button example 3 -->
                  <div class="h3 pb-3 pt-5">Example 1 size !</div>
                  <button type="button" class="btn btn-primary btn-lg">Large button</button>
                  <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                  <button type="button" class="btn btn-primary btn-sm">Small button</button>
                  <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                  <!-- button example 3 ! -->

                  <!-- button example 4 -->
                  <div class="h3 pb-3 pt-5">Example 1 disabled !</div>
                  <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
                  <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                  <!-- button example 4 ! -->

                  <!-- button example 4 -->
                  <div class="h3 pb-3 pt-5">Example 1 block !</div>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                  </div>
                  <!-- button example 4 ! -->
                 
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>