<?php
	try {
    	switch ($_SESSION["security-level"]){
    		case "0": // This code is insecure.
				$lEnableJavaScriptValidation = FALSE;
				$lEnableHTMLControls = FALSE;
			break;

    		case "1": // This code is insecure.
	   		case "2":
	   		case "3":
	   		case "4":
    		case "5": // This code is fairly secure
    			$lEnableJavaScriptValidation = TRUE;
				$lEnableHTMLControls = TRUE;
    		break;
    	}// end switch

	} catch(Exception $e){
		echo $CustomErrorHandler->FormatError($e, "Error setting up configuration.");
	}// end try
?>

<script type="text/javascript">
<!--
<?php
		if ($_SESSION["loggedin"]=="True") {
			echo "var l_loggedIn = true;" . PHP_EOL;
		}else {
			echo "var l_loggedIn = false;" . PHP_EOL;
		}// end if

		if (isset($lAuthenticationAttemptResult)){
			echo "var lAuthenticationAttemptResultFlag = {$lAuthenticationAttemptResult};" . PHP_EOL;
		}else{
			echo "var lAuthenticationAttemptResultFlag = -1;".PHP_EOL;
		}// end if

		if($lEnableJavaScriptValidation){
			echo "var lValidateInput = \"TRUE\"" . PHP_EOL;
		}else{
			echo "var lValidateInput = \"FALSE\"" . PHP_EOL;
		}// end if
	?>

function onSubmitOfLoginForm( /*HTMLFormElement*/ theForm) {
    try {
        if (lValidateInput == "TRUE") {
            var lUnsafeCharacters = /[`~!@#$%^&*()-_=+\[\]{}\\|;':",./<>?]/;
            if (theForm.username.value.length > 15 ||
                theForm.password.value.length > 15) {
                alert(
                    'Username too long. We dont want to allow too many characters.\n\nSomeone might have enough room to enter a hack attempt.'
                );
                return false;
            }; // end if

            if (theForm.username.value.search(lUnsafeCharacters) > -1 ||
                theForm.password.value.search(lUnsafeCharacters) > -1) {
                alert(
                    'Dangerous characters detected. We can\'t allow these. This all powerful blacklist will stop such attempts.\n\nMuch like padlocks, filtering cannot be defeated.\n\nBlacklisting is l33t like l33tspeak.'
                );
                return false;
            }; // end if
        }; // end if(lValidateInput)

        return true;
    } catch (e) {
        alert("Error: " + e.message);
    }; // end catch
}; // end function onSubmitOfLoginForm(/*HTMLFormElement*/ theForm)
//
-->
</script>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Login</h3>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-end">
        <?php include_once (__ROOT__.'/includes/back-button.inc');?>
    </div>
</div>

<div id="id-log-in-form-div" class="my-4" style="display: none;">
    <form action="index.php?page=login.php" method="post" enctype="application/x-www-form-urlencoded"
        onsubmit="return onSubmitOfLoginForm(this);" id="idLoginForm">
        <div class="container">
            <div class="row justify-content-center" id="id-authentication-failed-td" style="display: none;">
                <div class="col-6">
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <span class="text-secondary">Please sign-in</span>
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-4 text-center">
                    <input class="form-control" type="text" name="username" size="20" placeholder="Username"
                        autofocus="autofocus" <?php
						if ($lEnableHTMLControls) {
							echo('minlength="1" maxlength="15" required="required"');
						}// end if
					?> />
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-4 text-center">
                    <input class="form-control" type="password" name="password" placeholder="Password" size="20" <?php
						if ($lEnableHTMLControls) {
							echo('minlength="1" maxlength="15" required="required"');
						}// end if
					?> />
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-2 text-center d-grid gap-2">
                    <input name="login-php-submit-button" class="btn btn-primary" type="submit" value="Login" />
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col text-center text-secondary">
                    Dont have an account? <a href="index.php?page=register.php"><em>Please register here</em></a>
                </div>
            </div>
        </div>
    </form>
</div>


<!-- <?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?> -->

<div class="container position-relative" id="id-log-out-div" style="height: 40%; display: none;">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col text-center text-secondary">
                <h5>You are logged in as <?php echo $_SESSION['logged_in_user']; ?></h5>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col text-center d-grid gap-2">
                <input class="btn btn-primary" type="button" value="Logout"
                    onclick="document.location='index.php?do=logout'" />
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
var cUNSURE = -1;
var cACCOUNT_DOES_NOT_EXIST = 0;
var cPASSWORD_INCORRECT = 1;
var cNO_RESULTS_FOUND = 2;
var cAUTHENTICATION_SUCCESSFUL = 3;
var cAUTHENTICATION_EXCEPTION_OCCURED = 4;
var cUSERNAME_OR_PASSWORD_INCORRECT = 5;

var lMessage = "";
var lAuthenticationFailed = "FALSE";

switch (lAuthenticationAttemptResultFlag) {
    case cACCOUNT_DOES_NOT_EXIST:
        lMessage = "Account does not exist";
        lAuthenticationFailed = "TRUE";
        break;
    case cPASSWORD_INCORRECT:
        lMessage = "Password incorrect";
        lAuthenticationFailed = "TRUE";
        break;
    case cNO_RESULTS_FOUND:
        lMessage = "No results found";
        lAuthenticationFailed = "TRUE";
        break;
    case cAUTHENTICATION_EXCEPTION_OCCURED:
        lMessage = "Exception occurred";
        lAuthenticationFailed = "TRUE";
        break;
    case cUSERNAME_OR_PASSWORD_INCORRECT:
        lMessage = "Username or password incorrect";
        lAuthenticationFailed = "TRUE";
        break;
};

if (lAuthenticationFailed == "TRUE") {
    document.getElementById("id-authentication-failed-tr").style.display = "";
    document.getElementById("id-authentication-failed-td").innerHTML = lMessage;
} // end if AuthenticationAttemptResultFlag

if (!l_loggedIn) {
    document.getElementById("id-log-in-form-div").style.display = "";
    document.getElementById("id-log-out-div").style.display = "none";
} else {
    document.getElementById("id-log-in-form-div").style.display = "none";
    document.getElementById("id-log-out-div").style.display = "";
} // end if l_loggedIn
</script>