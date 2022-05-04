<?php
/*
 * Vulnerabilities
 * Reflected Cross-site Scripting
 * JavaScript Injection
 * Method Tampering
 * DOM-based Cross-site Scripting
 */
	try {
		$lUsernameForJS = "";
		$lPasswordJSMessage = "";
		
    	switch ($_SESSION["security-level"]){
	    		case "0": // This code is insecure.
	    		case "1": // This code is insecure.
					// Grab inputs insecurely. $_REQUEST allows any input paramter. Not just POST.
					if (isset($_REQUEST["username"])){
	    				$lUsernameForJS = $_REQUEST["username"]; // allow javascript and xss injection
					}//end if
	    		break;

	    		case "2":
	    		case "3":
	    		case "4":
	    		case "5": // This code is fairly secure
					/* Protect against one form of patameter pollution 
					 * by grabbing inputs only from GET parameters. */ 
					if (isset($_GET["username"])){
	    				$lUsernameForJS = $Encoder->encodeForJavaScript($_GET["username"]);
					}
					break;
	    	}// end switch
	    	
	    	if (strlen($lUsernameForJS) > 0) {
	    		$lPasswordJSMessage = "This password is for {$lUsernameForJS}";	
	    	}
	    	
    	} catch (Exception $e) {
			echo $CustomErrorHandler->FormatError($e, "Input: " . $lUsernameForHTML);
    	}// end try
?>

<script>
function onSubmitOfGeneratorForm( /*HTMLFormElement*/ theForm) {
    try {

        var lPasswordText = "";
        var lPasswordCharset =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-+=[]{}\|;',./:?";

        for (var i = 0; i < 15; i++) {
            lPasswordText += lPasswordCharset.charAt(Math.floor(Math.random() * lPasswordCharset.length));
        } // end for i

        document.getElementById("idPasswordInput").innerHTML =
            "Password: <span style=\"color:red;border-width:1px;border-color:black;\">" + lPasswordText + "</span>";
        document.getElementById("idPasswordTableRow").style.display = "";
        return false;

    } catch (e) {
        alert("Error: " + e.message);
    } // end catch
} // end function onSubmitOfGeneratorForm(/*HTMLFormElement*/ theForm)
</script>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Password Generator</h3>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-end">
        <?php include_once (__ROOT__.'/includes/back-button.inc');?>
    </div>
</div>

<!-- <?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?> -->

<div class="container" id="id-generator-form-div">
    <form enctype="application/x-www-form-urlencoded" id="idGeneratorForm">
        <div class="text-center">
            <p>
                Making strong passwords is important.
                <br />
                Click the button below to generate a password.
            </p>
            <br>
            <span id="idUsernameInput" class="label"></span>
            <div id="idPasswordTableRow" style="display: none;">
                <span class="label" id="idPasswordInput"></span>
            </div>
            <div class="mt-5">
                <input name="password-generator-php-submit-button" autofocus="autofocus" class="btn btn-primary"
                    type="button" value="Generate Password" onclick="onSubmitOfGeneratorForm(this.form);" />
            </div>
        </div>
    </form>
</div>

<script>
try {
    document.getElementById("idUsernameInput").innerHTML = "<?php echo $lPasswordJSMessage; ?>";
} catch (e) {
    alert("Error: " + e.message);
} // end catch
</script>