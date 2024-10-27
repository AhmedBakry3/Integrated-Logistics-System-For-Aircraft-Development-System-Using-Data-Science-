<!-- start of html -->
<!DOCTYPE html>
<html lang="en">


<!-- start of head  -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AD</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />


  
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
    /* General table style */
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        border: 1px solid transparent; /* Hide default table border */
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 3px solid #ffffff80; 
        border-right: 3px solid #ffffff80; 
        border-left: 3px solid #ffffff80; 
        position: relative;
        background-color: #343a40;
    }

    th {
        color: white; /* Change text color for headers to black */
        background-color:  #283593; /* Change header background color */
        border-bottom: 2px solid #ffffff; /* Add thicker white border bottom for headers */
    }

    /* Work order table style */
    .AD {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        background-color: #6D4C41; /* Change card background color */
        border: 1px solid transparent; /* Hide default table border */
    }

    .AD td {
        padding: 12px;
        text-align: left;
        color: white; /* Change text color for table cells to white */
        border-right: 1px solid white; /* Add white right border for table cells */
        border-left: none; /* Remove left border for table cells */
        position: relative;
    }

    .AD tr:last-child td {
        border-bottom: none; /* Remove bottom border from last row */
    }

    .AD tr:nth-child(even) {
        background-color: #444; /* Darken even rows for better visibility */
    }

    /* 3D effect using box-shadow */
    th:before,
    td:before {
        content: '';
        position: absolute;
        top: -5px;
        bottom: -5px;
        width: 5px;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
    }

    th:before {
        left: -5px;
    }

    td:before {
        right: -5px;
    }
</style>



<!-- end of table style -->


<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->


<!-- start of script button -->
  <!-- <script>
    function displayPopupMessageAndRedirect() {
        // Display a pop-up window with your message
        alert('your ATA is Added');

        // Redirect the user to a local URL when they click "OK"
        window.location.href = 'http://localhost/project/MAIN%20temp/template/pages/basic/ad.php';
    }
</script> -->
<!-- end of script button -->
</head>
<!-- end of head -->



<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->

<!-- start of body -->
<body>



<!-- start php code to insert data into database -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form for adding data is submitted
    if (isset($_POST['ADD'])) {
        // Proceed with adding data to the database
        $hostname = 'YOUR_HOSTNAME'; // Hostname of the Oracle server
        $port = 'YOUR_PORT'; // Oracle listener port
        $service_name = 'YOUR_SERVICE_NAME'; // Service name or SID of the Oracle database instance
        $username = 'YOUR_USERNAME'; // Oracle username
        $password = 'YOUR_PASSWORD'; // Oracle password

        try {
            // Connect to Oracle database
            $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

            // Set PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve form data for adding data
            $AD_ID = $_POST['AD_ID'];
            $AIRCRAFT_ID = $_POST['AIRCRAFT_ID'];
            $SUBJECT = $_POST['SUBJECT'];
            $ISSUE_DATE = $_POST['ISSUE_DATE'];
            $REVISION_DATE = $_POST['REVISION_DATE'];

            // Prepare SQL statement to insert data into database
            $stmt = $dbh->prepare("INSERT INTO AD (AD_ID, AIRCRAFT_ID, SUBJECT ,ISSUE_DATE,REVISION_DATE) VALUES (:AD_ID, :AIRCRAFT_ID, :SUBJECT, :ISSUE_DATE, :REVISION_DATE)");

            // Bind parameters and execute the statement
            $stmt->bindParam(':AD_ID', $AD_ID);
            $stmt->bindParam(':AIRCRAFT_ID', $AIRCRAFT_ID);
            $stmt->bindParam(':SUBJECT', $SUBJECT);
            $stmt->bindParam(':ISSUE_DATE', $ISSUE_DATE);
            $stmt->bindParam(':REVISION_DATE', $REVISION_DATE);
            $stmt->execute();

            // Close the connection
            $dbh = null;

            // Display a pop-up message or redirect
        } catch (PDOException $e) {
            // Handle connection errors
            echo "Connection failed: " . $e->getMessage();
        }
    } elseif (isset($_POST['SEARCH'])) {
        // Proceed with searching data in the database
        // Your search functionality goes here
    }
}
?>

<!-- end of php code to insert data -->
  

<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->

<!-- start of html code -->
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"><span style="font-weight: bold; color: black;">
AD </span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
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
                  <img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
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
              <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
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
      <!-- partial:../../partials/_settings-panel.html -->
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
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
            <i class="menu-icon fas fa-fighter-jet"></i>
              <!-- <i class="mdi mdi-grid-large menu-icon"></i> -->
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements" >
            <i class="menu-icon fas fa-plane"></i>
              <span class="menu-title">Aviation basics </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <!-- href for BASIC Tables -->
                <li class="nav-item"><a class="nav-link" href="../../pages/basic/aircraft.php" style="color: #FF5733; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Aircraft</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/basic/aircraft2ata.php" style="color: #36D7B7; font-weight: bold; font-size: 13.5px; color: #283593 !important;">ATA</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/basic/component.php" style="color: #FFC300; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Component</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/flights.php" style="color: #36D7B7; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Flights</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/Flights_table.php" style="color: #36D7B7; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Flight Table</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/component_life_tracking.php" style="color: #FF5733; font-weight: bold; font-size: 12.5px; color: #283593 !important;">Component Life Tracking</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/work_order.php" style="color: #3498DB; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Work Order</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/check.php" style="color: #FFC300; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Checks</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/Fault.php" style="color: #FFC300; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Fault</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/inventory.php" style="color: #1ABC9C; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Inventory</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/Work_Shop.php" style="color: #9B59B6; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Work Shop</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/basic/sp.php" style="color: #3498DB; font-weight: bold; font-size: 13.5px; color: #283593 !important;">SP</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/basic/ad.php" style="color: #9B59B6; font-weight: bold; font-size: 13.5px; color: #283593 !important;">AD</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/basic/supply.php" style="color: #E74C3C; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Supply</a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/dynamic/Data miner.php" style="color: #E74C3C; font-weight: bold; font-size: 13.5px; color: #283593 !important;">Prediction</a></li>


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
                 href for Dyanmic Tables
                                <li class="nav-item"> <a class="nav-link" href="../../pages/dynamic/eng_order.html">Engineering Order</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/dynamic/fault.html">Fault</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/dynamic/maintenance.html">Maintenance</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/login/login.html"> Login </a></li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <!-- start of the class card -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-12 grid-margin stretch-card">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-12 grid-margin stretch-card">
            </div>



<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->



<!-- Start of the first card -->
<!-- start of php code to print only one row from database-->
<div class="col-12 grid-margin">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Search for AD ID</h5>
        <p class="card-description">Enter the ID you want to search for:</p>
        <form action="\Project\MAIN temp\template\pages\basic\ad.php" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search_id" placeholder="Enter ID to search">
                <button type="submit" class="btn btn-primary">Search</button>

        <?php
$hostname = 'YOUR_HOSTNAME'; // Hostname of the Oracle server
$port = 'YOUR_PORT'; // Oracle listener port
$service_name = 'YOUR_SERVICE_NAME'; // Service name or SID of the Oracle database instance
$username = 'YOUR_USERNAME'; // Oracle username
$password = 'YOUR_PASSWORD'; // Oracle password
        // Check if the search form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_id'])) {
            $search_id = $_POST['search_id'];
            
            try {
                // Connect to Oracle database
                $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);
                
                // Set PDO error mode to exception
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepare SQL statement to fetch rows matching the specified ID
                $stmt = $dbh->prepare("SELECT AD_ID, AIRCRAFT_ID, SUBJECT,ISSUE_DATE,REVISION_DATE FROM AD WHERE AD_ID = :search_id");
                $stmt->bindParam(':search_id', $search_id);
                $stmt->execute();

                // Display the search results
                echo "<div style='overflow: auto; width: 1250px; height: 130px;'>";
                echo "<table border='1' class='AD'>";
                echo "<tr><th>AD_ID</th><th>AIRCRAFT_ID</th><th>SUBJECT</th><th>ISSUE_DATE</th><th>REVISION_DATE</th></tr>";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td>{$row['AD_ID']}</td><td>{$row['AIRCRAFT_ID']}</td><td>{$row['SUBJECT']}</td><td>{$row['ISSUE_DATE']}</td><td>{$row['REVISION_DATE']}</td></tr>";
                }
                echo "</table>";
                echo "</div>";

                // Close the connection
                // $dbh = null;
            } catch (PDOException $e) {
                // Handle connection errors
                echo "Connection failed: " . $e->getMessage();
            }
        }
        ?>
    </div>
</div>

                  </form>
                </div>
              </div>
              <div>&nbsp;</div>

<!-- end of php code to print only one row from database-->
<!-- end of the second card -->


<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->


<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Delete AD with ID</h5>
            <p class="card-description">Enter the ID you want to delete:</p>
            <form action="\Project\MAIN temp\template\pages\basic\ad.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="delete_id" placeholder="Enter ID to delete">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
            <?php
$hostname = 'YOUR_HOSTNAME'; // Hostname of the Oracle server
$port = 'YOUR_PORT'; // Oracle listener port
$service_name = 'YOUR_SERVICE_NAME'; // Service name or SID of the Oracle database instance
$username = 'YOUR_USERNAME'; // Oracle username
$password = 'YOUR_PASSWORD'; // Oracle password

            // Check if the delete form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
                $delete_id = $_POST['delete_id'];

                try {
                    // Connect to Oracle database
                    $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);
                    // Set PDO error mode to exception
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Prepare SQL statement to delete the row with the specified ID
                    $stmt = $dbh->prepare("DELETE FROM AD WHERE AD_ID = :delete_id");
                    $stmt->bindParam(':delete_id', $delete_id);
                    $stmt->execute();

                    echo "Record with ID $delete_id deleted successfully.";

                    // Close the connection
                    // $dbh = null;
                } catch (PDOException $e) {
                    // Handle connection errors
                    echo "Connection failed: " . $e->getMessage();
                }
            }
            ?>
        </div>
    </div>
</div>
            <br>


<!-- end Deleteing card -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->


<!-- Start of the second card -->
<!-- start of php code to print All Tables from database-->
<div class="card">
    <div class="card-body">
        <div class="input-group mb-3">
            <form action="\Project\MAIN temp\template\pages\basic\ad.php" method="post">
                <?php
$hostname = 'YOUR_HOSTNAME'; // Hostname of the Oracle server
$port = 'YOUR_PORT'; // Oracle listener port
$service_name = 'YOUR_SERVICE_NAME'; // Service name or SID of the Oracle database instance
$username = 'YOUR_USERNAME'; // Oracle username
$password = 'YOUR_PASSWORD'; // Oracle password
                //tables of php
                try {
                    // Connect to Oracle database
                    $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);

                    // Set PDO error mode to exception
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Query to fetch AD attributes from the database
                    $stmt = $dbh->query("SELECT AD_ID, AIRCRAFT_ID, SUBJECT,ISSUE_DATE,REVISION_DATE FROM AD"); // Replace 'AD' with your actual table name

                    // Store rows in an array
                    $rows = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $rows[] = $row;
                    }

                    // Reverse the array
                  

                    // Display AD attributes
                    echo "<div style='overflow: auto; width: 1250px; height: 350px;'>";
                    echo "<table border='1' class='AD'>";
                    echo "<tr><th>AD_ID</th><th>AIRCRAFT_ID</th><th>SUBJECT</th><th>ISSUE_DATE</th><th>REVISION_DATE</th></tr>";
                    foreach ($rows as $row) {
                        echo "<tr><td>{$row['AD_ID']}</td><td>{$row['AIRCRAFT_ID']}</td><td>{$row['SUBJECT']}</td><td>{$row['ISSUE_DATE']}</td><td>{$row['REVISION_DATE']}</td></tr>";
                    }
                    // Add more rows as needed
                    echo "</table>";
                    echo "</div>";

                    // Close the connection
                    $dbh = null;
                } catch (PDOException $e) {
                    // Handle connection errors
                    // echo "Connection failed: " . $e->getMessage();
                }
                ?>
            </form>
        </div>
    </div>
</div>
<br>
<!-- End of php code to print All Tables from database-->
<!-- end of the second card -->


<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->



<!-- Start of the third card -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Service Pack Form</title>
<!-- Link to Bootstrap CSS (assuming you are using Bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Custom styles */
    .card-title {
        color: #1F3BB3; /* Blue color */
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: bold;
        color: #555;
    }

    /* Style for attributes */
    .attribute-label {
        font-size: 1.1rem; /* Adjust size as needed */
        font-weight: bold;
        color: #1F3BB3; /* Blue color */
        margin-bottom: 5px;
    }
</style>
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">AD</h5>
            <form action="/Project/MAIN temp/template/pages/basic/ad.php" method="POST" class="forms-sample" onsubmit="return handleFormSubmit()">
                <div class="form-group">
                    <label for="AD_ID" class="form-label"><h5 class="attribute-label">AD ID</h5></label>
                    <input type="text" name="AD_ID" class="form-control" id="AD_ID" placeholder="Enter AD ID">
                </div>
                <div class="form-group">
                    <label for="AIRCRAFT_ID" class="form-label"><h5 class="attribute-label">AIRCRAFT ID</h5></label>
                    <input type="text" name="AIRCRAFT_ID" class="form-control" id="AIRCRAFT_ID" placeholder="Enter Aircraft ID">
                </div>
                <div class="form-group">
                    <label for="SUBJECT" class="form-label"><h5 class="attribute-label">SUBJECT</h5></label>
                    <input type="text" name="SUBJECT" class="form-control" id="SUBJECT" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label for="ISSUE_DATE" class="form-label"><h5 class="attribute-label">ISSUE DATE</h5></label>
                    <input type="date" name="ISSUE_DATE" class="form-control" id="ISSUE_DATE">
                </div>
                <div class="form-group">
                    <label for="REVISION_DATE" class="form-label"><h5 class="attribute-label">REVISION DATE</h5></label>
                    <input type="date" name="REVISION_DATE" class="form-control" id="REVISION_DATE">
                </div>
                <button type="submit" name="ADD" class="btn btn-primary">ADD</button>
            </form>
        </div>
    </div>
</div>
<!-- Link to Bootstrap JS and any other scripts if needed -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script>
    function handleFormSubmit() {
        var AdID = document.getElementById("AD_ID").value;
        var aircraftID = document.getElementById("AIRCRAFT_ID").value;
        var subject = document.getElementById("SUBJECT").value;
        var issueDate = document.getElementById("ISSUE_DATE").value;
        var revisionDate = document.getElementById("REVISION_DATE").value;

        // Check if any of the fields are empty
        if (AdID.trim() === '' || aircraftID.trim() === '' || subject.trim() === '' || issueDate.trim() === '' || revisionDate.trim() === '') {
            alert("Please fill in all fields.");
            return false; // Prevent form submission
        }
       
        // Handle the form submission here, if needed
        alert("Your AD is added.");
        // If everything is okay, you can proceed with the form submission
        return true;
    }
</script>



<!-- end of the third card -->



<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->


           </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
          </div>
        </div>
<!-- end of the class card -->


<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->

<!-- start of footer -->
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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

<!-- End of footer -->

<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->

  <!-- container-scroller -->
  <!-- plugins:js -->
    <!-- plugins:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

<!-- end of body -->

</html>

<!-- end of html -->


