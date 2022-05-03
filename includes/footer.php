<?php

    $lUserAgentString = "";
    if(isset($_SERVER['HTTP_USER_AGENT'])){
        $lUserAgentString = $_SERVER['HTTP_USER_AGENT'];
    }// end if

	switch ($_SESSION["security-level"]){
   		case "0": // This code is insecure
   		case "1": // This code is insecure
   			// DO NOTHING: This is equivalent to using client side security
			$lPHPVersion = "PHP Version: " . phpversion();
   		break;

   		case "2":
   		case "3":
   		case "4":
   		case "5": // This code is fairly secure
   			// encode the entire message following OWASP standards
   			// this is HTML encoding because we are outputting data into HTML
   		    $lUserAgentString = $Encoder->encodeForHTML($lUserAgentString);
			$lPHPVersion = "PHP Version: Not Available (Secure mode doesn't reveal the server version)";
		break;
   	}// end switch
?>

<!-- End Content -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-2 text-muted">
                <?php /* Note: $C_VERSION_STRING in index.php */
			    echo $C_VERSION_STRING;
			?>
            </div>
            <div class="col-5 text-muted">
                <span><?php echo $lSecurityLevelMessage; ?></span>
            </div>
            <div class="col-3 text-muted">
                <span><?php echo $lHintsMessage; ?></span>
            </div>
            <div class="col-2 text-muted">
                <span><?php echo $lAuthenticationStatusMessage ?></span>
            </div>

        </div>
        <div class="row mt-1">
            <div class="col-12 text-center text-muted">
                Browser: <?php echo $lUserAgentString; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center text-muted">
                <?php echo $lPHPVersion; ?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>