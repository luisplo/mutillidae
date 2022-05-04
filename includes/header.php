<?php
    $lSecurityLevel = $_SESSION["security-level"];

    switch ($lSecurityLevel){
        case "0": // This code is insecure
            $lSecurityLevelMessage = "Security Level: ".$lSecurityLevel." (Hosed)";
            break;
        case "1": // This code is insecure
            // DO NOTHING: This is equivalent to using client side security
            $lSecurityLevelMessage = "Security Level: ".$lSecurityLevel." (Client-Side Security)";
            break;

        case "2":
        case "3":
        case "4":
        case "5": // This code is fairly secure
            $lSecurityLevelMessage = "Security Level: ".$lSecurityLevel." (Secure)";
            break;
    }// end switch

	if($_SESSION['loggedin'] == "True"){

	    switch ($lSecurityLevel){
	   		case "0": // This code is insecure
	   		case "1": // This code is insecure
	   			// DO NOTHING: This is equivalent to using client side security
				$logged_in_user = $_SESSION['logged_in_user'];
			break;

	   		case "2":
	   		case "3":
	   		case "4":
	   		case "5": // This code is fairly secure
	   			// encode the entire message following OWASP standards
	   			// this is HTML encoding because we are outputting data into HTML
				$logged_in_user = $Encoder->encodeForHTML($_SESSION['logged_in_user']);
			break;
	   	}// end switch

	   	$lUserID = $_SESSION['uid'];

	   	$lUserAuthorizationLevelText = 'User';

	   	if ($_SESSION['is_admin'] == 'TRUE'){
	   		$lUserAuthorizationLevelText = 'Admin';
	   	}// end if

		$lAuthenticationStatusMessage =
			'Logged In ' .
			$lUserAuthorizationLevelText . ": " .
			'<span class="logged-in-user">'.$logged_in_user.'</span>'.
			'<a href="index.php?page=edit-account-profile.php&uid='.$lUserID.'">'.
            '<img src="images/edit-icon-20-20.png" /></a>';
	} else {
		$logged_in_user = "anonymous";
		$lAuthenticationStatusMessage = "Not Logged In";
	}// end if($_SESSION['loggedin'] == "True")

	if ($_SESSION["EnforceSSL"] == "True"){
		$lEnforceSSLLabel = "Drop TLS";
	}else {
		$lEnforceSSLLabel = "Enforce TLS";
	}//end if

	$lHintsMessage = "Hints: ".$_SESSION["hints-enabled"];

?>
<!DOCTYPE HTML
    PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>

<head>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="styles/global-styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/ddsmoothmenu/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="javascript/jQuery/colorbox/colorbox.css" />
    <link rel="stylesheet" type="text/css" href="styles/gritter/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/sidebar.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script src="javascript/jQuery/jquery.js"></script>
    <script src="javascript/jQuery/colorbox/jquery.colorbox-min.js"></script>
    <script src="javascript/ddsmoothmenu/ddsmoothmenu.js"></script>
    <script src="javascript/gritter/jquery.gritter.min.js"></script>
    <script src="javascript/hints/hints-menu.js"></script>
    <script src="javascript/inline-initializers/jquery-init.js"></script>
    <script src="javascript/inline-initializers/ddsmoothmenu-init.js"></script>
    <script src="javascript/inline-initializers/populate-web-storage.js"></script>
    <script src="javascript/inline-initializers/gritter-init.js"></script>
    <script src="javascript/inline-initializers/hints-menu-init.js"></script>
</head>
<style>
.footer {
    width: 100%;
    margin-top: 80px;
    height: 50px;
    /* Set the fixed height of the footer here */
    background-color: #f5f5f5;
}
/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */
</style>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <h3>OWASP Mutillidae</h3>
                <strong>OS</strong>
            </div>
            <?php include_once(__ROOT__."/includes/main-menu.php"); ?>
            <a href="https://github.com/webpwnized/mutillidae">
                <img src="images/coykillericon-50-38.png" />
            </a>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <div class="row">
                <div class="col-1 text-center">
                    <button type="button" id="sidebarCollapse" class="btn btn-default">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
                <div class="col-10 text-center">
                    <h1>OWASP Mutillidae II</h1>
                </div>
                <div class="col-1 text-center">
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h4>Keep Calm and Pwn On</h4>
                </div>
            </div>
            <div class="row mb-5 ">
                <div class="col">
                    <ul class="nav justify-content-center">
                        <li class="nav-item ">
                            <a class="nav-link text-body"
                                href="index.php?page=home.php&popUpNotificationCode=HPH0">Home</a>
                        </li>
                        <li class="nav-item ">
                            <?php
							if ($_SESSION['loggedin'] == 'True'){
								echo '<a class="nav-link text-body" href="index.php?do=logout">Logout</a>';
							} else {
								echo '<a class="nav-link text-body" href="index.php?page=login.php">Login/Register</a>';
							}// end if
						?>
                        </li>
                        <li class="nav-item">
                            <?php
							if ($_SESSION['security-level'] == 0){
								echo '<a class="nav-link text-body" href="index.php?do=toggle-hints&page='.$lPage.'">Toggle Hints</a>';
							}// end if
						?>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-body"
                                href="index.php?do=toggle-security&page=<?php echo $lPage?>">Toggle
                                Security</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-body"
                                href="index.php?do=toggle-enforce-ssl&page=<?php echo $lPage?>"><?php echo $lEnforceSSLLabel; ?></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-body" href="set-up-database.php">Reset DB</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-body" href="index.php?page=show-log.php">View Log</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-body" href="index.php?page=captured-data.php">View Captured Data</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="line"></div> -->
            <table class="main-table-frame">


        </div>
    </div>



    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>