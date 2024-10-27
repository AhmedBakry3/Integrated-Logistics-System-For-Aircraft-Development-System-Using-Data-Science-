
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbaord</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="sky">
    <div class="cloud cloud1">
      <div class="light"></div>
      <img src="./pages/dynamic/EgyptAir-Iraq-removebg-preview.png" />  
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Main Page </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">




  <style>
    /* Custom CSS for styling the navigation icon */
    .menu-icon {
      font-size: 20px;
      margin-right: 10px;
    }
    /* Additional styles for the menu title */
    .menu-title {
      font-size: 16px;
      /* Add more styles as needed */
    }
  </style>
  <!-- start of table style -->
  <style>
    /* Custom CSS for styling the navigation icon */
    .menu-icon {
      font-size: 20px;
      margin-right: 10px;
    }
    /* Additional styles for the menu title */
    .menu-title {
      font-size: 16px;
      /* Add more styles as needed */
    }
  </style>



</head>


<body class="with-welcome-text">
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner"> 
      <div class="col-md-12 p-0 m-0">
      </div>
    </div> 
    <!-- partial:partials/_navbar.html -->


    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo"  href="index.php">
            <img src="./image/logo_edit.png" alt="logo"   style="width: 95x; height: 95px;"></a>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="./image/logo_edit.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"><span style="font-weight: bold; color: black;">Good Morning, Admin &nbsp &nbsp     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp <span style="font-weight: bold; color: #1F3BB3; font-size: 50px;"></span></h1>
            <h3 class="welcome-sub-text"><span style="font-weight: bold; color: black;">System summary</h3>
          </li> 
        </ul>
        <ul class="navbar-nav ms-auto">


          <!-- <li class="nav-item dropdown d-none d-lg-block">
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                  <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                  <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                </div>
              </a>
            </div>
          </li> -->




          <form action="\Project\login\login.php" method="POST" style="text-align: center;">
    <button type="button" onclick="confirmLogout()" style="padding: 10px 20px; font-size: 16px; background-color: #ff5555; color: #ffffff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; outline: none;">Log Out</button>
</form>

<script>
    function confirmLogout() {
        // Display confirmation dialog
        if (confirm("Are you sure you want to log out?")) {
            // If user confirms, submit the form
            document.querySelector('form').submit();
        }
    }
</script>




          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Amr Adel</p>
                <p class="fw-light text-muted mb-0">amradel@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>








































    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

        <li>    </a><img src="./image/background.png" alt="Logo" style="width: 20px; height: 20px;"></a>   </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php">
              <i class="menu-icon fas fa-fighter-jet"></i>
              <!-- <i class="mdi mdi-grid-large menu-icon"></i> -->
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <!-- <i class="menu-icon mdi mdi-card-text-outline"></i> -->
              <i class="menu-icon fas fa-plane"></i>
              <span class="menu-title"> Aviation Basics </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
              <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="../template/pages/basic/aircraft.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Aircraft</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/basic/aircraft2ata.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">ATA</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/basic/component.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Component</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/flights.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Flights</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/Flights_table.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Flights Table</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/component_life_tracking.php" style="color: #283593; font-size: 12.5px; font-weight: bold;">Component Life Tracking</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/work_order.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Work Order</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/check.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Checks</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/fault.php" style="color: #283593; font-size: 14px; font-weight: bold;">fault</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/inventory.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Inventory</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/work_shop.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Work Shop</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/basic/sp.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">SP</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/basic/ad.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">AD</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/basic/supply.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Supply</a></li>
    <li class="nav-item"><a class="nav-link" href="../template/pages/dynamic/Data miner.php" style="color: #283593; font-size: 13.5px; font-weight: bold;">Prediction</a></li>
</ul>





              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Dynamic Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../template/pages/dynamic/maintenance.php">Maintenance</a></li>

                <li class="nav-item"> <a class="nav-link" href="../template/pages/dynamic/eng_order.php"> Engineering Order</a></li>
                <li class="nav-item"> <a class="nav-link" href="../template/pages/dynamic/fault.php">Fault</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item nav-category">pages</li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/login/login.html"> Login </a></li>
              </ul>
            </div>
          </li> -->
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Checks</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Faults</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">Maintenance</a>
                    </li> -->
                  </ul>
                  <div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="statistics-details d-flex align-items-center justify-content-between">
    <div>
    <p class="statistics-title"><B style="font-size: 1.2em;"><span style="font-weight: bold; color: black;">Total aircraft</B></p>
        <?php
$hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
$port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
$service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
$username = 'YOUR_USERNAME'; // Replace with your Oracle username
$password = 'YOUR_PASSWORD'; // Replace with your Oracle password

        try {
            // Connect to Oracle database
            $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

            // Set PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Function to fetch the total count of aircraft
            function getTotalAircraftCount($dbh) {
                $query = "SELECT COUNT(*) AS total_count FROM AIRCRAFT";
                $stmt = $dbh->query($query);
                return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
            }

            // Fetch the total count of aircraft
            $totalAircraftCount = getTotalAircraftCount($dbh);

            // Display the count
            echo "<strong style='font-weight: bold;'></strong> <span style='font-weight: bold; font-size: 1.2em;'>$totalAircraftCount</span><br>";

            // Close the connection
            $dbh = null;
        } catch (PDOException $e) {
            // Handle connection errors
            echo "<strong>Connection failed:</strong> " . $e->getMessage();
        }
        ?>
    </div>

    <div class="d-none d-md-block">
    <p class="statistics-title"><B style="font-size: 1.2em;"><span style="font-weight: bold; color: black;">FMC</B></p>
        <?php
        // Remaining code for FMC count with bold and better number visibility
        $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
        $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
        $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
        $username = 'YOUR_USERNAME'; // Replace with your Oracle username
        $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

        try {
            // Connect to Oracle database
            $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

            // Set PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Function to fetch the count of aircraft with status FMC
            function getCountOfFmcAircraft($dbh) {
                $query = "SELECT COUNT(*) AS fmc_count FROM AIRCRAFT WHERE STATUS = 'FMC'";
                $stmt = $dbh->query($query);
                return $stmt->fetch(PDO::FETCH_ASSOC)['FMC_COUNT'];
            }

            // Fetch the count of aircraft with status FMC
            $fmcAircraftCount = getCountOfFmcAircraft($dbh);

            // Display the count
            echo "<strong style='font-weight: bold;'></strong> <span style='font-weight: bold; font-size: 1.2em;'>$fmcAircraftCount</span><br>";

            // Close the connection
            $dbh = null;
        } catch (PDOException $e) {
            // Handle connection errors
            echo "<strong>Connection failed:</strong> " . $e->getMessage();
        }
        ?>
    </div>

    <div>
        <p class="statistics-title"><B style="font-size: 1.2em;"><span style="font-weight: bold; color: black;">PMC</B></p>

        <?php
        // Remaining code for PMC count with bold and better number visibility
        $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
        $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
        $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
        $username = 'YOUR_USERNAME'; // Replace with your Oracle username
        $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

        try {
            // Connect to Oracle database
            $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

            // Set PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Function to fetch the count of aircraft with status PMC
            function getCountOfPmcAircraft($dbh) {
                $query = "SELECT COUNT(*) AS pmc_count FROM AIRCRAFT WHERE STATUS = 'PMC'";
                $stmt = $dbh->query($query);
                return $stmt->fetch(PDO::FETCH_ASSOC)['PMC_COUNT'];
            }

            // Fetch the count of aircraft with status PMC
            $pmcAircraftCount = getCountOfPmcAircraft($dbh);

            // Display the count
            echo "<strong style='font-weight: bold;'></strong> <span style='font-weight: bold; font-size: 1.2em;'>$pmcAircraftCount</span><br>";

            // Close the connection
            $dbh = null;
        } catch (PDOException $e) {
            // Handle connection errors
            echo "<strong>Connection failed:</strong> " . $e->getMessage();
        }
        ?>
    </div>

    <div>
    <p class="statistics-title"><B style="font-size: 1.2em;"><span style="font-weight: bold; color: black;">NMC</B></p>
        <?php
        // Remaining code for NMC count with bold and better number visibility
        $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
        $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
        $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
        $username = 'YOUR_USERNAME'; // Replace with your Oracle username
        $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

        try {
            // Connect to Oracle database
            $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

            // Set PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Function to fetch the count of aircraft with status NMC
            function getCountOfNmcAircraft($dbh) {
                $query = "SELECT COUNT(*) AS nmc_count FROM AIRCRAFT WHERE STATUS = 'NMC'";
                $stmt = $dbh->query($query);
                return $stmt->fetch(PDO::FETCH_ASSOC)['NMC_COUNT'];
            }

            // Fetch the count of aircraft with status NMC
            $nmcAircraftCount = getCountOfNmcAircraft($dbh);

            // Display the count
            echo "<strong style='font-weight: bold;'></strong> <span style='font-weight: bold; font-size: 1.2em;'>$nmcAircraftCount</span><br>";

            // Close the connection
            $dbh = null;
        } catch (PDOException $e) {
            // Handle connection errors
            echo "<strong>Connection failed:</strong> " . $e->getMessage();
        }
        ?>
    </div>
</div>

<!-- 
                           </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">problems</p>
                            <h3 class="rate-percentage">15</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Total Technician</p>
                            <h3 class="rate-percentage">100</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Total Personal</p>
                            <h3 class="rate-percentage">300</h3>
                          </div> -->
                        </div>
                      </div>
                    </div> 
 
                          </div>
                          
                        </div>
                        
                      </div>
                      
                    </div>

                    <!-- 1st div -->

                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
 
                                </div>
                                <div class='tableauPlaceholder' id='viz1713998027835' style='position: relative'><noscript><a href='#'><img alt='Total Info About A&#47;C ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;B9&#47;B93574Q74&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='path' value='shared&#47;B93574Q74' /> <param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;B9&#47;B93574Q74&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1713998027835');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>


                      <!-- 2nd div -->
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                              <h4 class="card-title card-title-dash text-white mb-4"> Transactions
                                  <hr style="border-top: 5px solid black; margin-top: 5px;"></h4>                                <div class="row">
<div>
<br>

    <?php
$hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
$port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
$service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
$username = 'YOUR_USERNAME'; // Replace with your Oracle username
$password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of work orders
        function getTotalflightsCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM FLIGHTS";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of work orders
        $getTotalflightsCount = getTotalflightsCount($dbh);

        // Display the count
        echo "<div style='color: white; display: inline-block; margin-right: 20px;'>";
        echo "<strong>Total Flights:</strong>";
        echo "<span>$getTotalflightsCount</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
    ?>
</div>

<div>
<br>

<?php
    // Similar structure for Total Work Orders with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of work orders
        function getTotalWORKORDERCOUNT($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM Work_Order";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of work orders
        $getTotalWORKORDERCOUNT = getTotalWORKORDERCOUNT($dbh);

        // Display the count
        echo "<div style='color: white; display: inline-block; margin-right: 20px;'>";
        echo "<strong>Total Work Orders:</strong>";
        echo "<span>$getTotalWORKORDERCOUNT</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
    ?>
    </div>
<div>
<br>

<?php
    // Similar structure for Total Checks with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of checks
        function getTotalCheckCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM Check_";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of checks
        $getTotalCheckCount = getTotalCheckCount($dbh);

        // Display the count on the same line with margin-right for spacing
        echo "<div style='color: white; display: inline-block;'>";
        echo "<strong>Total Checks:</strong>";
        echo "<span>$getTotalCheckCount</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
?>
</div>
<div>
<br>

<?php
    // Similar structure for Total Checks with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of checks
        function getTotalfaultCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM FAULT";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of checks
        $getTotalfaultCount = getTotalfaultCount($dbh);

        // Display the count on the same line with margin-right for spacing
        echo "<div style='color: white; display: inline-block;'>";
        echo "<strong>Total Fault:</strong>";
        echo "<span>$getTotalfaultCount</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
?>
</div>
<div>
      <br>
<?php
    // Similar structure for Total Checks with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of checks
        function getTotalSPCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM SP";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of checks
        $getTotalSPCount = getTotalSPCount($dbh);

        // Display the count on the same line with margin-right for spacing
        echo "<div style='color: white; display: inline-block;'>";
        echo "<strong>Total SP:</strong>";
        echo "<span>$getTotalSPCount</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
?>
</div>
<div>
      <br>
<?php
    // Similar structure for Total Checks with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of checks
        function getTotalADCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM AD";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of checks
        $getTotalADCount = getTotalADCount($dbh);

        // Display the count on the same line with margin-right for spacing
        echo "<div style='color: white; display: inline-block;'>";
        echo "<strong>Total AD:</strong>";
        echo "<span>$getTotalADCount</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
?>
</div>
<div>
      <br>
<?php
    // Similar structure for Total Checks with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of checks
        function getTotalWORKSHOPCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM Work_Shop";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of checks
        $getTotalWORKSHOPCount = getTotalWORKSHOPCount($dbh);

        // Display the count on the same line with margin-right for spacing
        echo "<div style='color: white; display: inline-block;'>";
        echo "<strong>Total Work Shop:</strong>";
        echo "<span>$getTotalWORKSHOPCount</span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
?>
</div>
<div>
      <br>
<?php
    // Similar structure for Total Checks with margin-right for spacing
    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

    try {
        // Connect to Oracle database
        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

        // Set PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to fetch the total count of checks
        function getTotalSUPPLYCount($dbh) {
            $query = "SELECT COUNT(*) AS total_count FROM SUPPLY";
            $stmt = $dbh->query($query);
            return $stmt->fetch(PDO::FETCH_ASSOC)['TOTAL_COUNT'];
        }

        // Fetch the total count of checks
        $getTotalSUPPLYCount = getTotalSUPPLYCount($dbh);

        // Display the count on the same line with margin-right for spacing
        echo "<div style='color: white; display: inline-block;'>";
        echo "<strong>Total Supply:</strong>";
        echo "<span>$getTotalSUPPLYCount </span>";
        echo "</div>";

        // Close the connection
        $dbh = null;
    } catch (PDOException $e) {
        // Handle connection errors
        echo "<strong>Connection failed:</strong> " . $e->getMessage();
    }
?>
</div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
 
                                </div>
                                <div class='tableauPlaceholder' id='viz1713998073967' style='position: relative'><noscript><a href='#'><img alt='Componant Usage ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa2&#47;ComponantUsage&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='last_dataa2&#47;ComponantUsage' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa2&#47;ComponantUsage&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1713998073967');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      
                    <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
 
                                </div>
                                <div class='tableauPlaceholder' id='viz1713998101391' style='position: relative'><noscript><a href='#'><img alt='Total Fault For Every A&#47;C ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa3&#47;TotalFaultForEveryAC&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='last_dataa3&#47;TotalFaultForEveryAC' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa3&#47;TotalFaultForEveryAC&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1713998101391');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                                            
                    <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
 
                                </div>
                                <div class='tableauPlaceholder' id='viz1713998138984' style='position: relative'><noscript><a href='#'><img alt='Most Countries We Visited ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa4&#47;MostCountriesWeVisited&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='last_dataa4&#47;MostCountriesWeVisited' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa4&#47;MostCountriesWeVisited&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1713998138984');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                                            
                    <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
 
                                </div>
                                <div class='tableauPlaceholder' id='viz1713998163821' style='position: relative'><noscript><a href='#'><img alt='Total Info About emp ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa5&#47;TotalInfoAboutemp&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='last_dataa5&#47;TotalInfoAboutemp' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;la&#47;last_dataa5&#47;TotalInfoAboutemp&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1713998163821');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>


            </div>
          </div>
        </div>

        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright By MTI Team</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/chart.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <!-- <script src="../../js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>

