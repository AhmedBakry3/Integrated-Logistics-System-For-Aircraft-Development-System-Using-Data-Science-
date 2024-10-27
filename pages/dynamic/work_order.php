


<!-- start of html -->
<!DOCTYPE html>
<html lang="en">


<!-- start of head  -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Work Order</title>
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
        color: white; /* Change text color for table cells to white */
    }

    th {
        color: white; /* Change text color for headers to white */
        background-color:  #283593; /* Change header background color */
        border-bottom: 2px solid #ffffff; /* Add thicker white border bottom for headers */
    }

    /* Work order table style */
    .WORKORDER {
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

    .WORKORDER td {
        padding: 12px;
        text-align: left;
        color: white; /* Change text color for table cells to white */
        border-right: 1px solid white; /* Add white right border for table cells */
        border-left: none; /* Remove left border for table cells */
        position: relative;
    }

    .WORKORDER tr:last-child td {
        border-bottom: none; /* Remove bottom border from last row */
    }

    .WORKORDER tr:nth-child(even) {
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
        window.location.href = 'http://localhost/project/MAIN%20temp/template/pages/basic/aircraft2ata.html';
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


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form for adding data is submitted
    if (isset($_POST['ADD'])) {
        // Database connection parameters
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

            // Retrieve and sanitize form data
            $WORK_ORDER_ID = $_POST['WORK_ORDER_ID'];
            $AIRCRAFT_ID = $_POST['AIRCRAFT_ID'];
            $ATA_CHAPTER = $_POST['ATA_CHAPTER'];
            $ATA_NAME = $_POST['ATA_NAME'];
            $COMPONENT_NAME = $_POST['COMPONENT_NAME'];
            $STATUS = $_POST['STATUS'];
            $START_TIME = $_POST['START_TIME'];
            $END_TIME = $_POST['END_TIME'];
            $PART_NAME = $_POST['PART_NAME'];
            $QUANTITY = $_POST['QUANTITY'];
            $AIRCRAFT_STATUS = $_POST['AIRCRAFT_STATUS'];

            // Validate input data (e.g., ensure required fields are not empty)

            // Prepare SQL statement
            $stmt = $dbh->prepare("INSERT INTO WORK_ORDER (WORK_ORDER_ID, AIRCRAFT_ID, ATA_CHAPTER, ATA_NAME, COMPONENT_NAME, STATUS, START_TIME, END_TIME, DURATION, START_DATE, END_DATE, PART_NAME, QUANTITY, AIRCRAFT_STATUS) 
                                   VALUES (:WORK_ORDER_ID, :AIRCRAFT_ID, :ATA_CHAPTER, :ATA_NAME, :COMPONENT_NAME, :STATUS, :START_TIME, :END_TIME, :DURATION, :START_DATE, :END_DATE, :PART_NAME, :QUANTITY, :AIRCRAFT_STATUS)");

            // Calculate duration and end date
            $startTimeUnix = strtotime($START_TIME);
            $endTimeUnix = strtotime($END_TIME);
            $duration = $endTimeUnix - $startTimeUnix;
            $endDateUnix = $startTimeUnix + $duration;
            $startDate = date("Y-m-d H:i:s", $startTimeUnix);
            $endDate = date("Y-m-d H:i:s", $endDateUnix);

            // Bind parameters
            $stmt->bindParam(':WORK_ORDER_ID', $WORK_ORDER_ID);
            $stmt->bindParam(':AIRCRAFT_ID', $AIRCRAFT_ID);
            $stmt->bindParam(':ATA_CHAPTER', $ATA_CHAPTER);
            $stmt->bindParam(':ATA_NAME', $ATA_NAME);
            $stmt->bindParam(':COMPONENT_NAME', $COMPONENT_NAME);
            $stmt->bindParam(':STATUS', $STATUS);
            $stmt->bindParam(':START_TIME', $START_TIME);
            $stmt->bindParam(':END_TIME', $END_TIME);
            $stmt->bindParam(':DURATION', $duration);
            $stmt->bindParam(':START_DATE', $startDate);
            $stmt->bindParam(':END_DATE', $endDate);
            $stmt->bindParam(':PART_NAME', $PART_NAME);
            $stmt->bindParam(':QUANTITY', $QUANTITY);
            $stmt->bindParam(':AIRCRAFT_STATUS', $AIRCRAFT_STATUS);

            // Execute the statement
            $stmt->execute();

            // Close the connection
            $dbh = null;

            // Display a success message or redirect
            echo "Work order added successfully!";
        } catch (PDOException $e) {
            // Handle connection or execution errors
            echo "Error: " . $e->getMessage();
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
WORK ORDER</span></h1>
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


<?php
// Set the default timezone to Africa/Cairo
date_default_timezone_set('Africa/Cairo');

// Your existing PHP code here...
?>
<!-- Start of the first card -->
<!-- start of php code to print only one row from database-->
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Search For Work Order ID</h5>
            <p class="card-description">Enter the ID you want to search for:</p>
            <form action="\Project\MAIN temp\template\pages\dynamic\work_order.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search_id" placeholder="Enter ID to search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_id'])) {
                $search_id = $_POST['search_id'];
                try {
                    // Establish database connection and set error mode
                    // Replace placeholders with actual database connection details
                    $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
                    $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
                    $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
                    $username = 'YOUR_USERNAME'; // Replace with your Oracle username
                    $password = 'YOUR_PASSWORD'; // Replace with your Oracle password
                    // Connect to Oracle database
                    $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    // Prepare SQL statement to fetch rows matching the specified ID
                    $stmt = $dbh->prepare("SELECT WORK_ORDER_ID, AIRCRAFT_ID, ATA_CHAPTER, ATA_NAME, COMPONENT_NAME, STATUS, START_TIME, END_TIME, DURATION, START_DATE, END_DATE,PART_NAME, QUANTITY, AIRCRAFT_STATUS FROM WORK_ORDER WHERE WORK_ORDER_ID = :search_id");
                    $stmt->bindParam(':search_id', $search_id);
                    $stmt->execute();

                    // Display the search results
                    echo "<div style='overflow: auto; width: 1250px; height: 200px;'>";
                    echo "<table border='1' class='work_orders'>";
                    echo "<tr><th>WORK_ORDER_ID</th><th>AIRCRAFT_ID</th><th>ATA_CHAPTER</th><th>ATA_NAME</th><th>COMPONENT_NAME</th><th>STATUS</th><th>START_TIME</th><th>END_TIME</th><th>DURATION</th><th>START_DATE</th><th>END_DATE</th><th>PART_NAME</th><th>QUANTITY</th><th>AIRCRAFT_STATUS</th><th>REMAINING_TIME</th></tr>";
                    
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $startTimeUnix = strtotime($row['START_TIME']);
                        $endTimeUnix = strtotime($row['END_TIME']);
                        $duration = $endTimeUnix - $startTimeUnix;
                        $startDate = date("Y-m-d H:i:s", $startTimeUnix);
                        $endDate = date("Y-m-d H:i:s", $endTimeUnix);
                        $currentTime = time();
                
                        // Calculate remaining time for each work order individually
                        $remainingTime = $endTimeUnix - $currentTime;
                        echo "<tr>
                            <td>{$row['WORK_ORDER_ID']}</td>
                            <td>{$row['AIRCRAFT_ID']}</td>
                            <td>{$row['ATA_CHAPTER']}</td>
                            <td>{$row['ATA_NAME']}</td>
                            <td>{$row['COMPONENT_NAME']}</td>
                            <td>{$row['STATUS']}</td>
                            <td>{$row['START_TIME']}</td>
                            <td>{$row['END_TIME']}</td>
                            <td>" . gmdate("H:i:s", $duration) . "</td>
                            <td>{$startDate}</td>
                            <td>{$endDate}</td>
                            <td>{$row['PART_NAME']}</td>
                            <td>{$row['QUANTITY']}</td>
                            <td>{$row['AIRCRAFT_STATUS']}</td>";

                        // Check if status is not 'completed' to display remaining time
                        if ($row['STATUS'] !== 'Completed') {
                          if ($remainingTime > 0) {
                              echo "<td class='remaining-time' data-remaining-time='$remainingTime'>" . gmdate("H:i:s", $remainingTime) . "</td>";
                          } else {
                              echo "<td class='remaining-time'>0:00:00</td>"; // Handle case when remaining time is zero or negative
                          }
                      } else {
                          echo "<td class='remaining-time'>0:00:00</td>";
                      }
                      
                        echo "</tr>";
                    }
                    
                    echo "</table>";
                    echo "</div>";
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
            }
            ?>
        </div>
    </div>
</div>
<br>

    
<!-- end of php code to print only one row from database-->
<!-- end of the first card -->



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
            <h5 class="card-title">Delete work order with ID</h5>
            <p class="card-description">Enter the ID you want to delete:</p>
            <form action="\Project\MAIN temp\template\pages\dynamic\work_order.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="delete_id" placeholder="Enter ID to delete">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
            <?php
       $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
       $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
       $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
       $username = 'YOUR_USERNAME'; // Replace with your Oracle username
       $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

            // Check if the delete form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
                $delete_id = $_POST['delete_id'];

                try {
                    // Connect to Oracle database
                    $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);
                    // Set PDO error mode to exception
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Prepare SQL statement to delete the row with the specified ID
                    $stmt = $dbh->prepare("DELETE FROM WORK_ORDER WHERE WORK_ORDER_ID = :delete_id");
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

<!-- End of php code to print All Tables from database-->
<!-- end of the second card -->



<?php
// Set the default timezone to Africa/Cairo
date_default_timezone_set('Africa/Cairo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Orders</title>
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form action="\Project\MAIN temp\template\pages\dynamic\work_order.php" method="post">
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
                        // Query to fetch WORK_ORDER attributes where status is 'in progress' or 'open'
                        $stmt = $dbh->prepare("SELECT WORK_ORDER_ID, AIRCRAFT_ID, ATA_CHAPTER, ATA_NAME, COMPONENT_NAME, STATUS, START_TIME, END_TIME, START_DATE, END_DATE,PART_NAME, QUANTITY, AIRCRAFT_STATUS FROM WORK_ORDER WHERE STATUS = 'in progress' OR STATUS = 'open'");
                        $stmt->execute();
                        // Store rows in an array
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        // Display WORK_ORDER attributes
                        echo "<div style='overflow: auto; width: 1250px; height: 300px;'>";
                        echo "<table border='1' class='work_order' id='work_order_table'>";
                        echo "<tr><th>WORK_ORDER_ID</th><th>AIRCRAFT_ID</th><th>ATA_CHAPTER</th><th>ATA_NAME</th><th>COMPONENT_NAME</th><th>STATUS</th><th>START_TIME</th><th>END_TIME</th><th>DURATION</th><th>START_DATE</th><th>END_DATE</th><th>PART_NAME</th><th>QUANTITY</th><th>AIRCRAFT_STATUS</th><th>REMAINING_TIME</th></tr>";
                        foreach ($rows as $row) {
                            $startTimeUnix = strtotime($row['START_TIME']);
                            $endTimeUnix = strtotime($row['END_TIME']);
                            $duration = $endTimeUnix - $startTimeUnix;
                            $endDateUnix = $startTimeUnix + $duration;
                            $startDate = date("Y-m-d H:i:s", $startTimeUnix);
                            $endDate = date("Y-m-d H:i:s", $endDateUnix);
                            $currentTime = time();
                            $remainingTime = $endTimeUnix - $currentTime;
                            // Check if remaining time is zero or negative
                            if ($remainingTime <= 0) {
                                // Update the status to 'completed'
                                $stmtUpdate = $dbh->prepare("UPDATE WORK_ORDER SET STATUS = 'completed' WHERE WORK_ORDER_ID = :workOrderId");
                                $stmtUpdate->bindParam(':workOrderId', $row['WORK_ORDER_ID']);
                                $stmtUpdate->execute();
                                // Skip this work order if remaining time is zero or negative
                                continue;
                            } else {
                                echo "<tr>
                                    <td>{$row['WORK_ORDER_ID']}</td>
                                    <td>{$row['AIRCRAFT_ID']}</td>
                                    <td>{$row['ATA_CHAPTER']}</td>
                                    <td>{$row['ATA_NAME']}</td>
                                    <td>{$row['COMPONENT_NAME']}</td>
                                    <td>{$row['STATUS']}</td>
                                    <td>{$row['START_TIME']}</td>
                                    <td>{$row['END_TIME']}</td>
                                    <td>" . gmdate("H:i:s", $duration) . "</td>
                                    <td>{$startDate}</td>
                                    <td>{$endDate}</td>
                                    <td>{$row['PART_NAME']}</td>
                                    <td>{$row['QUANTITY']}</td>
                                    <td>{$row['AIRCRAFT_STATUS']}</td>
                                    <td id='remaining_time_{$row['WORK_ORDER_ID']}'></td>
                                </tr>";
                                
                                // JavaScript code to update remaining time dynamically
                                echo "<script>
                                    var endTime{$row['WORK_ORDER_ID']} = new Date({$endTimeUnix} * 1000);
                                    function updateRemainingTime{$row['WORK_ORDER_ID']}() {
                                        var currentTime{$row['WORK_ORDER_ID']} = new Date();
                                        var timeDifference{$row['WORK_ORDER_ID']} = endTime{$row['WORK_ORDER_ID']}.getTime() - currentTime{$row['WORK_ORDER_ID']}.getTime();
                                        if (timeDifference{$row['WORK_ORDER_ID']} <= 0) {
                                            // Move work order to the completed card only if it hasn't been moved before
                                            if ($('#completed_work_order_table').find('td:contains({$row['WORK_ORDER_ID']})').length == 0) {
                                                $('#completed_work_order_table').append('<tr><td>{$row['WORK_ORDER_ID']}</td><td>{$row['AIRCRAFT_ID']}</td><td>{$row['ATA_CHAPTER']}</td><td>{$row['ATA_NAME']}</td><td>{$row['COMPONENT_NAME']}</td><td>completed</td><td>{$row['START_TIME']}</td><td>{$row['END_TIME']}</td><td>" . gmdate("H:i:s", $duration) . "</td><td>{$startDate}</td><td>{$endDate}</td><td>{$row['PART_NAME']}</td><td>{$row['QUANTITY']}</td><td>{$row['AIRCRAFT_STATUS']}</td></tr>');
                                                $('#work_order_table #remaining_time_{$row['WORK_ORDER_ID']}').parent().remove();
                                                // Refresh the table after moving the work order
                                                setTimeout(function() {
                                                    $('#work_order_table').load('\Project\MAIN temp\template\pages\dynamic\work_order.php');
                                                }, 5000); // Refresh after 5 seconds
                                            }
                                        } else {
                                            var hours{$row['WORK_ORDER_ID']} = Math.floor((timeDifference{$row['WORK_ORDER_ID']} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                            var minutes{$row['WORK_ORDER_ID']} = Math.floor((timeDifference{$row['WORK_ORDER_ID']} % (1000 * 60 * 60)) / (1000 * 60));
                                            var seconds{$row['WORK_ORDER_ID']} = Math.floor((timeDifference{$row['WORK_ORDER_ID']} % (1000 * 60)) / 1000);
                                            document.getElementById('remaining_time_{$row['WORK_ORDER_ID']}').innerHTML = hours{$row['WORK_ORDER_ID']} + 'h ' + minutes{$row['WORK_ORDER_ID']} + 'm ' + seconds{$row['WORK_ORDER_ID']} + 's';
                                        }
                                        setTimeout(updateRemainingTime{$row['WORK_ORDER_ID']}, 1000);
                                    }
                                    updateRemainingTime{$row['WORK_ORDER_ID']}();
                                </script>";
                            }
                        }
                        echo "</table>";
                        echo "</div>";
                        // Close the connection
                        $dbh = null;

                    } catch (PDOException $e) {
                        // Handle connection errors
                        echo "Connection failed: " . $e->getMessage();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Work Orders</title>
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form action="\Project\MAIN temp\template\pages\dynamic\work_order.php" method="post">
                    <?php
                    try {
                      $hostname = 'YOUR_HOSTNAME'; // Replace with your Oracle server hostname
                      $port = 'YOUR_PORT'; // Replace with your Oracle listener port (default is usually 1521)
                      $service_name = 'YOUR_SERVICE_NAME'; // Replace with your Oracle service name or SID
                      $username = 'YOUR_USERNAME'; // Replace with your Oracle username
                      $password = 'YOUR_PASSWORD'; // Replace with your Oracle password

                        // Connect to Oracle database
                        $dbh = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))", $username, $password);
                        // Set PDO error mode to exception
                        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // Query to fetch completed WORK_ORDER attributes from the database
                        $stmt = $dbh->query("SELECT WORK_ORDER_ID, AIRCRAFT_ID, ATA_CHAPTER, ATA_NAME, COMPONENT_NAME, STATUS, START_TIME, END_TIME, START_DATE, END_DATE, PART_NAME, QUANTITY, AIRCRAFT_STATUS FROM WORK_ORDER WHERE TRIM(UPPER(STATUS)) = 'COMPLETED'");
                        // Display completed WORK_ORDER attributes
                        echo "<div style='overflow: auto; width: 1250px; height: 350px;'>";
                        echo "<table border='1' class='work_order' id='completed_work_order_table'>";
                        echo "<tr><th>WORK_ORDER_ID</th><th>AIRCRAFT_ID</th><th>ATA_CHAPTER</th><th>ATA_NAME</th><th>COMPONENT_NAME</th><th>STATUS</th><th>START_TIME</th><th>END_TIME</th><th>DURATION</th><th>START_DATE</th><th>END_DATE</th><th>PART_NAME</th><th>QUANTITY</th><th>AIRCRAFT_STATUS</th></tr>";
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Calculate Unix timestamps for start and end time
                            $startTimeUnix = strtotime($row['START_TIME']);
                            $endTimeUnix = strtotime($row['END_TIME']);
                            // Calculate duration
                            $duration = $endTimeUnix - $startTimeUnix;
                            // Calculate end date
                            $endDateUnix = $startTimeUnix + $duration;
                            // Convert Unix timestamps to date strings
                            $startDate = date("Y-m-d H:i:s", $startTimeUnix);
                            $endDate = date("Y-m-d H:i:s", $endDateUnix);
                            // Display row in the table
                            echo "<tr>
                                <td>{$row['WORK_ORDER_ID']}</td>
                                <td>{$row['AIRCRAFT_ID']}</td>
                                <td>{$row['ATA_CHAPTER']}</td>
                                <td>{$row['ATA_NAME']}</td>
                                <td>{$row['COMPONENT_NAME']}</td>
                                <td>{$row['STATUS']}</td>
                                <td>{$row['START_TIME']}</td>
                                <td>{$row['END_TIME']}</td>
                                <td>" . gmdate("H:i:s", $duration) . "</td>
                                <td>{$startDate}</td>
                                <td>{$endDate}</td>
                                <td>{$row['PART_NAME']}</td>
                                <td>{$row['QUANTITY']}</td>
                                <td>{$row['AIRCRAFT_STATUS']}</td>
                            </tr>";
                        }
                        echo "</table>";
                        echo "</div>";
                        // Close the connection
                        $dbh = null;
                    } catch (PDOException $e) {
                        // Handle connection errors
                        echo "Connection failed: " . $e->getMessage();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


        
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
<title>Work Order Form</title>
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
            <h5 class="card-title">Work Order</h5>
            <form action="\Project\MAIN temp\template\pages\dynamic\work_order.php" method="POST" class="forms-sample" onsubmit="return handleFormSubmit()">
                <div class="form-group">
                    <label for="WORK_ORDER_ID" class="form-label"><h5 class="attribute-label">Work Order ID</h5></label>
                    <input type="text" name="WORK_ORDER_ID" class="form-control" id="WORK_ORDER_ID" placeholder="Enter Work Order ID">
                </div>
                <div class="form-group">
                    <label for="AIRCRAFT_ID" class="form-label"><h5 class="attribute-label">Aircraft ID</h5></label>
                    <input type="text" name="AIRCRAFT_ID" class="form-control" id="AIRCRAFT_ID" placeholder="Enter Aircraft ID">
                </div>
                <div class="form-group">
                    <label for="ATA_CHAPTER" class="form-label"><h5 class="attribute-label">ATA Chapter</h5></label>
                    <input type="text" name="ATA_CHAPTER" class="form-control" id="ATA_CHAPTER" placeholder="Enter ATA Chapter">
                </div>
                <div class="form-group">
                    <label for="ATA_NAME" class="form-label"><h5 class="attribute-label">ATA Name</h5></label>
                    <input type="text" name="ATA_NAME" class="form-control" id="ATA_NAME" placeholder="Enter ATA Name">
                </div>
                <div class="form-group">
                    <label for="COMPONENT_NAME" class="form-label"><h5 class="attribute-label">Component Name</h5></label>
                    <input type="text" name="COMPONENT_NAME" class="form-control" id="COMPONENT_NAME" placeholder="Enter Component Name">
                </div>
                <div class="form-group">
                    <label for="STATUS" class="form-label"><h5 class="attribute-label">Status</h5></label>
                    <input type="text" name="STATUS" class="form-control" id="STATUS" placeholder="Enter Status">
                </div>
                <div class="form-group">
                    <label for="START_TIME" class="form-label"><h5 class="attribute-label">Start Time</h5></label>
                    <input type="time" name="START_TIME" class="form-control" id="START_TIME">
                </div>
                <div class="form-group">
                    <label for="END_TIME" class="form-label"><h5 class="attribute-label">End Time</h5></label>
                    <input type="time" name="END_TIME" class="form-control" id="END_TIME">
                </div>
                <div class="form-group">
                    <label for="PART_NAME" class="form-label"><h5 class="attribute-label">Part Name</h5></label>
                    <input type="text" name="PART_NAME" class="form-control" id="PART_NAME" placeholder="Enter part name">
                </div>
                <div class="form-group">
                    <label for="QUANTITY" class="form-label"><h5 class="attribute-label">Quantity</h5></label>
                    <input type="text" name="QUANTITY" class="form-control" id="QUANTITY" placeholder="Enter Quantity">
                </div>
                <div class="form-group">
                    <label for="AIRCRAFT_STATUS" class="form-label"><h5 class="attribute-label">Aircraft Status</h5></label>
                    <select name="AIRCRAFT_STATUS" class="form-control" id="AIRCRAFT_STATUS">
                        <option value="PMC">PMC</option>
                        <option value="NMC">NMC</option>
                    </select>
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

<script>
    function handleFormSubmit() {
        var workOrderID = document.getElementById("WORK_ORDER_ID").value;
        var aircraftID = document.getElementById("AIRCRAFT_ID").value;
        var ataChapter = document.getElementById("ATA_CHAPTER").value;
        var ataName = document.getElementById("ATA_NAME").value;
        var componentName = document.getElementById("COMPONENT_NAME").value;
        var status = document.getElementById("STATUS").value;
        var startTime = document.getElementById("START_TIME").value;
        var endTime = document.getElementById("END_TIME").value;
        var partname = document.getElementById("PART_NAME").value;
        var quantity = document.getElementById("QUANTITY").value;
        var aircraftStatus = document.getElementById("AIRCRAFT_STATUS").value;

        // Check if any of the fields are empty
        if (workOrderID.trim() === '' || aircraftID.trim() === '' || ataChapter.trim() === '' || ataName.trim() === '' || componentName.trim() === '' || status.trim() === '' || startTime.trim() === '' || endTime.trim() === '' || partname.trim() === ''|| quantity.trim() === '' || aircraftStatus.trim() === '') {
            alert("Please fill in all fields.");
            return false; // Prevent form submission
        }

        // Handle the form submission here, if needed
        alert("Your Work Order is added.");
        // If everything is okay, you can proceed with the form submission
        return true;
    }
</script>

</body>
</html>

</body>
</html>

<!-- end of the third card -->



<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------- --------------------------------------------------- -->
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