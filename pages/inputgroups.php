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
                  <h1 class='pb-5'>Input Group</h1>
                
                  <!-- inputgroup example 1 -->
                  <div class="h3 pb-4">Example 1 !</div>
                  <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                      <span class="input-group-text">With textarea</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  <!-- inputgroup example 1! -->


                 <!-- inputgroup example 2 -->
                 <br><br><br>
                      <div class="h3 pb-4">Example 2 !</div>
                      <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                      </div>
                  <!-- inputgroup example 2 ! -->


                  <!-- inputgroup example 3 -->
                  <br><br><br>
                  <div class="h3 pb-4">Example 3 !</div>
                  <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>

                  <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                  </div>

                <!-- inputgroup example 3 ! -->


                <!-- inputgroup example 4 -->
                <br><br><br>
                <div class="h3 pb-4">Example 4 !</div>
                <div class="input-group mb-3">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                </div>

                <div class="input-group mb-3">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                  <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                </div>

                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>

                <!-- inputgroup example 4 ! -->


                  <!-- inputgroup example 5 -->
                  <br><br><br>
                      <div class="h3 pb-4">Example 5 !</div>
                      <div class="input-group mb-3">
                          <label class="input-group-text" for="inputGroupFile01">Upload</label>
                          <input type="file" class="form-control" id="inputGroupFile01">
                        </div>

                        <div class="input-group mb-3">
                          <input type="file" class="form-control" id="inputGroupFile02">
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>

                        <div class="input-group mb-3">
                          <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                          <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>

                        <div class="input-group">
                          <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                        </div>
                  <!-- inputgroup example 5 ! -->
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>