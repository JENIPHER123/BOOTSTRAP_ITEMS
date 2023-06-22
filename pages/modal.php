<?php include_once '../partials/header.php'?>
<?php include_once '../partials/navbar.php'?>
<div style="margin-top:-40px;"></div>

          <div class="wrapper" style="font-family:serif; perspective: none;">
                  <!-- Sidebar Holder -->
                  <nav id="sidebar" class='p-3'>
                      <a href="index.php">
                      <div class="sidebar-header fw-bold">
                          <h3>BI-Home</h3>
                      </div>
                      </a>
                    

                      <ul class="list-unstyled components">
                          <p class='fw-bold h4' style="font-family:serif;">Code With Jenny</p>
                          <li class="active">
                              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Documentation</a>
                              <ul class="collapse list-unstyled" id="homeSubmenu">
                                  <li>
                                      <a href="#">Items Page</a>
                                  </li>
                                  <li>
                                      <a href="#">Utilities</a>
                                  </li>
                                
                              </ul>
                          </li>
                          <li class="">
                              <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Section 1</a>
                              <ul class="collapse list-unstyled" id="homeSubmenu1">
                                  <li>
                                    <a href="alerts.php">Alerts</a>  
                                  </li>
                                  <li>
                                    <a href="sidebar.php">Sidebar</a>  
                                  </li>
                                  <li>
                                      <a href="borders.php">Borders</a>
                                  </li>
                                  <li>
                                      <a href="breadcrum.php">BreadCrams</a>
                                  </li>
                                  <li>
                                      <a href="buttons.php">Buttons</a>
                                  </li>
                              </ul>
                          </li>
                          <li class="">
                              <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Section 2</a>
                              <ul class="collapse list-unstyled" id="homeSubmenu2">
                                  <li>
                                    <a href="card.php">Cards</a>
                                  </li>
                                  <li>
                                      <a href="carousel.php">Carousel</a>
                                  </li>
                                  <li>
                                      <a href="closebutton.php">Close Button</a>
                                  </li>
                                  <li>
                                      <a href="collapse.php">collapse</a>
                                  </li> <li>
                                      <a href="containers.php">Containers</a>
                                  </li>
                              </ul>
                          </li>
                          
                          <li class="">
                              <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Section 3</a>
                              <ul class="collapse list-unstyled" id="homeSubmenu3">
                                <li>
                                      <a href="dropdowns.php">Dropdowns</a>
                                  </li>
                                  <li>
                                      <a href="figures.php">Figures</a>
                                  </li>
                                  <li>
                                      <a href="forms.php">Forms</a>
                                  </li>
                                  <li>
                                      <a href="images.php">Images</a>
                                  </li>
                                  <li>
                                      <a href="inputgroups.php">Input Groups</a>
                                  </li>
                                  <li>
                                      <a href="listgroup.php">List Groups</a>
                                  </li>
                              </ul>
                          </li>
                          
                          <li class="">
                              <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Section 4</a>
                              <ul class="collapse list-unstyled" id="homeSubmenu4">
                                      <li>
                                          <a href="modal.php">Modal</a>
                                      </li>
                                      <li>
                                          <a href="nav.php">Nav</a>
                                      </li>
                                      <li>
                                          <a href="navbar.php">Navbar</a>
                                      </li>
                                      <li>
                                          <a href="pagniation.php">Pagniation</a>
                                      </li>
                                      <li>
                                          <a href="popovers.php">Popovers</a>
                                      </li>
                                      <li>
                                          <a href="position.php">Position</a>
                                      </li>
                              </ul>
                          </li>
                        
                          <li class="">
                              <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Section 5</a>
                              <ul class="collapse list-unstyled" id="homeSubmenu5">
                                  <li>
                                      <a href="progress.php">Progress</a>
                                  </li>
                                  <li>
                                      <a href="scrollspy.php">Scrollspy</a>
                                  </li>
                                  <li>
                                      <a href="tables.php">Tables</a>
                                  </li>
                                  <li>
                                      <a href="tooltips.php">Tooltips</a>
                                  </li>
                                  <li>
                                      <a href="video_embeded.php">Video Embedded</a>
                                  </li>
                              </ul>
                          </li>
                        
                          
                      </ul>

                      <ul class="list-unstyled CTAs">
                          <li>
                              <a href="https://github.com/JENIPHER123"target="blank" class="download">My Github Profile</a>
                          </li>
                          <li>
                              <a href="https://jenipher-kuki.000webhostapp.com/" target="blank"class="article">My Portfolio Website</a>
                          </li>
                      </ul>
                  </nav>

      

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
                                  <h1 class='pb-5'>Modal</h1>
                                  <!-- modal example 1 -->
                                     <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      Launch demo modal
                                    </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                        
                                        </div>
                                        <div class="modal-body">
                                          ...
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <!-- modal example 1 ! -->

                                <!-- modal example 2 -->
                                
                                <!-- modal example 2 ! -->
                       </div>
            

</div>




  <!-- end body section-->

<?php include_once '../partials/footer.php'?>