<?php include_once '../partials/header.php'?>
<?php include_once '../partials/navbar.php'?>
<div style="margin-top:-40px;"></div>
<?php include_once '../partials/sidebar1.php'?>  

          <!-- Page Content Holder -->
        <div id="content" >
     
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="32x32" type="image/png">
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">
        <style>
              .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
              }

              @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                  font-size: 3.5rem;
                }
              }
              body {
          min-height: 100vh;
          min-height: -webkit-fill-available;
        }

        html {
          height: -webkit-fill-available;
        }

        main {
          display: flex;
          flex-wrap: nowrap;
          height: 100vh;
          height: -webkit-fill-available;
          max-height: 100vh;
          overflow-x: auto;
          overflow-y: hidden;
        }

        .b-example-divider {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .bi {
          vertical-align: -.125em;
          pointer-events: none;
          fill: currentColor;
        }

        .dropdown-toggle { outline: 0; }

        .nav-flush .nav-link {
          border-radius: 0;
        }

        .btn-toggle {
          display: inline-flex;
          align-items: center;
          padding: .25rem .5rem;
          font-weight: 600;
          color: rgba(0, 0, 0, .65);
          background-color: transparent;
          border: 0;
        }
        .btn-toggle:hover,
        .btn-toggle:focus {
          color: rgba(0, 0, 0, .85);
          background-color: #d2f4ea;
        }

        .btn-toggle::before {
          width: 1.25em;
          line-height: 0;
          content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
          transition: transform .35s ease;
          transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
          color: rgba(0, 0, 0, .85);
        }
        .btn-toggle[aria-expanded="true"]::before {
          transform: rotate(90deg);
        }

        .btn-toggle-nav a {
          display: inline-flex;
          padding: .1875rem .5rem;
          margin-top: .125rem;
          margin-left: 1.25rem;
          text-decoration: none;
        }
        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
          background-color: #d2f4ea;
        }

        .scrollarea {
          overflow-y: auto;
        }

        .fw-semibold { font-weight: 600; }
        .lh-tight { line-height: 1.25; }

            </style>

            
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
                          <h1 class='pb-5'>Sidebar</h1>
                          <main>
        

          <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#"/></svg>
              <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Products
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Customers
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>

          <div class="b-example-divider"></div>

          <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Products
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Customers
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>

          <div class="b-example-divider"></div>

          <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
            <a href="#" class="d-block p-3 link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              <span class="visually-hidden">Icon-only</span>
            </a>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
              <li class="nav-item">
                <a href="#" class="nav-link active py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                  <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"/></svg>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                  <svg class="bi" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"/></svg>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
                  <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"/></svg>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
                  <svg class="bi" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"/></svg>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
                  <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"/></svg>
                </a>
              </li>
            </ul>
            <div class="dropdown border-top">
              <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>

          <div class="b-example-divider"></div>

          <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
              <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-5 fw-semibold">Collapsible</span>
            </a>
            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                  Home
                </button>
                <div class="collapse show" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                    <li><a href="#" class="link-dark rounded">Updates</a></li>
                    <li><a href="#" class="link-dark rounded">Reports</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Dashboard
                </button>
                <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                    <li><a href="#" class="link-dark rounded">Weekly</a></li>
                    <li><a href="#" class="link-dark rounded">Monthly</a></li>
                    <li><a href="#" class="link-dark rounded">Annually</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                  Orders
                </button>
                <div class="collapse" id="orders-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">New</a></li>
                    <li><a href="#" class="link-dark rounded">Processed</a></li>
                    <li><a href="#" class="link-dark rounded">Shipped</a></li>
                    <li><a href="#" class="link-dark rounded">Returned</a></li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                  Account
                </button>
                <div class="collapse" id="account-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">New...</a></li>
                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>

          <div class="b-example-divider"></div>

          <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
            <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
              <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-5 fw-semibold">List group</span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea">
              <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small>Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>

              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
            </div>
          </div>

          <div class="b-example-divider"></div>
        </main>

                    </div>
                    

        </div>



        <script>
          /* global bootstrap: false */
        (function () {
          'use strict'
          var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
          tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
          })
        })()

        </script>
          <!-- end body section-->

        <?php include_once '../partials/footer.php'?>