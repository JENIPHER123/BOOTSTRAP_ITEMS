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
                  <h1 class='pb-5'>Forms</h1>


                 <!-- dropdown example 1 -->
                 <div class="h3 pb-4">Example 1 !</div>
                 <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!-- dropdown example 1 ! -->

                   <!-- dropdown example 2 -->
                   <br><br>
                 <div class="h3 pb-4">Example 2 !</div>
                 <label for="inputPassword5" class="form-label">Password</label>
                  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                  <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </div>
                  <!-- dropdown example 2 ! -->

                <!-- dropdown example 3 -->
                <br><br><br>
                 <div class="h3 pb-4">Example 3 disabled !</div>
                 <form>
                  <fieldset disabled>
                    <legend>Disabled fieldset example</legend>
                    <div class="mb-3">
                      <label for="disabledTextInput" class="form-label">Disabled input</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                      <label for="disabledSelect" class="form-label">Disabled select menu</label>
                      <select id="disabledSelect" class="form-select">
                        <option>Disabled select</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                          Can't check this
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </fieldset>
                </form>
                <!-- dropdown example 3 ! -->
            </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>