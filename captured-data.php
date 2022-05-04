<?php
	/* Known Vulnerabilities
	 * Cross Site Scripting, Cross Site Scripting via HTTP Headers, 
	 * Denial of Service via Logging
	 */

	switch ($_SESSION["security-level"]){
   		case "0": // This code is insecure
   		case "1": // This code is insecure
   			// DO NOTHING: This is insecure		
			$lEncodeOutput = FALSE;
			$lLimitOutput= FALSE;
		break;
	    		
   		case "2":
   		case "3":
   		case "4":
   		case "5": // This code is fairly secure
  			/* 
  			 * NOTE: Input validation is excellent but not enough. The output must be
  			 * encoded per context. For example, if output is placed in HTML,
  			 * then HTML encode it. Blacklisting is a losing proposition. You 
  			 * cannot blacklist everything. The business requirements will usually
  			 * require allowing dangerous charaters. In the example here, we can 
  			 * validate username but we have to allow special characters in passwords
  			 * least we force weak passwords. We cannot validate the signature hardly 
  			 * at all. The business requirements for text fields will demand most
  			 * characters. Output encoding is the answer. Validate what you can, encode it
  			 * all.
  			 */
   			// encode the output following OWASP standards
   			// this will be HTML encoding because we are outputting data into HTML
			$lEncodeOutput = TRUE;
			
			/*
			 *  If DOS defenses are enabled, we limit output. An attacker can easily cause 
			 *  the logs to fill . This in itself may or may not pose a problem. 
			 *  But filling logs which display is a type of ampliphication attack. 
			 *  If one attacker puts 10,000 rows in the log then 10 innocent 
			 *  users view those logs, the system will have to display 100,000 log rows (10 users * 10,000 rows). 
			 *  Amplifications attacks are also done by sending single IP packets to networks 
			 *  which will broadcast the packet thus ampliphying the packet many times.
			 */
			$lLimitOutput= TRUE;
   		break;
   	}// end switch		

   	if(isset($_GET["deleteLogs"])){
		try{
			$SQLQueryHandler->deleteCapturedData();
		} catch (Exception $e) {
			echo $CustomErrorHandler->FormatError($e, $lQueryString);
		}// end try
	}// end if isset
   	
?>

<script>
var DeleteCapturedData = function() {
    if (window.confirm("Please confirm all captured data should be deleted")) {
        document.location = "index.php?page=captured-data.php&deleteLogs=deleteLogs";
    };
};
</script>

<div class="container mb-5">
    <div class="row">
        <div class="col text-center">
            <h3>Captured Data</h3>
        </div>
    </div>
    <div class="row row-cols-auto justify-content-end">
        <?php include_once (__ROOT__.'/includes/back-button.inc');?>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <p>
                This page shows the data captured by page <a
                    href="index.php?page=capture-data.php">capture-data.php</a>.
                There should also be a file with the same data since capture-data.php tries to save the data to a table
                and a file. The table contents are being displayed on this page. On this system, the
                file should be found in <?php print pathinfo($_SERVER["SCRIPT_FILENAME"], PATHINFO_DIRNAME); ?>.
                The database table is named captured_data.
            </p>
        </div>
    </div>
</div>

<!-- <?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?> -->

<!-- BEGIN HTML OUTPUT  -->

<?php
	try{
		$lQueryResult = $SQLQueryHandler->getCapturedData();
?>
<table class="table table-hover table-striped">
    <thead class="table-light">
        <tr class="text-end">
            <td colspan="10">
                <span>
                    <i class="fas fa-calculator mx-2"></i>
                    <?php echo $lQueryResult->num_rows ?> captured records found
                </span>
                <span title="Click to visit capture data page. Your data will be captured."
                    onclick="document.location='./index.php?page=capture-data.php';"
                    style="cursor: pointer;margin-left:35px;margin-right:35px;white-space:nowrap;font-weight:bold;">
                    <i class="fas fa-file-medical-alt mx-2"></i>
                    Capture Data
                </span>
                <span title="Click to refresh captured data log" onclick="document.location.reload(true);"
                    style="cursor: pointer;margin-left:35px;margin-right:35px;white-space:nowrap;font-weight:bold;">
                    <i class="fas fa-redo mx-2"></i>
                    Refresh
                </span>
                <span
                    title="Click to delete captured data log. This deletes the database table only. The text file is not affected."
                    onclick="DeleteCapturedData();" style="cursor: pointer;white-space:nowrap;font-weight:bold;">
                    <i class="fas fa-trash mx-2"></i>
                    Delete Capured Data
                </span>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;">Hostname</td>
            <td style="font-weight:bold;">Client IP Address</td>
            <td style="font-weight:bold;">Client Port</td>
            <td style="font-weight:bold;">User Agent</td>
            <td style="font-weight:bold;">Referrer</td>
            <td style="font-weight:bold;">Data</td>
            <td style="font-weight:bold;">Date/Time</td>
        </tr>
        <?php
			if ($lLimitOutput){
				echo '<tr><td class="table-danger text-center" colspan="10">Note: DOS defenses enabled. Rows limited to last 20.</td></tr>';
			}// end if
		?>
    </thead>
    <?php
	  $lRowNumber = 0;
	  while($row = $lQueryResult->fetch_object()){
			$lRowNumber++;
			if(!$lEncodeOutput){
				$lHostname = $row->hostname;
				$lClientIPAddress = $row->ip_address;
				$lClientPort = $row->port;
				$lClientUserAgentString = $row->user_agent_string;
				$lClientReferrer = $row->referrer;				
				$lData = $row->data;
				$lCaptureDate = $row->capture_date;
			}else{
				$lHostname = $Encoder->encodeForHTML($row->hostname);
				$lClientIPAddress = $Encoder->encodeForHTML($row->ip_address);
				$lClientPort = $Encoder->encodeForHTML($row->port);
				$lClientUserAgentString = $Encoder->encodeForHTML($row->user_agent_string);
				$lClientReferrer = $Encoder->encodeForHTML($row->referrer);
				$lData = $Encoder->encodeForHTML($row->data);
				$lCaptureDate = $Encoder->encodeForHTML($row->capture_date);				
			}// end if
				echo "<tr>
						<td>{$lHostname}</td>
						<td>{$lClientIPAddress}</td>
						<td>{$lClientPort}</td>
						<td>{$lClientUserAgentString}</td>
						<td>{$lClientReferrer}</td>
						<td>{$lData}</td>
						<td>{$lCaptureDate}</td>
					</tr>\n";
		}//end while $row
		echo "</table>";
	} catch (Exception $e) {
		echo $CustomErrorHandler->FormatError($e, "Error writing rows.");
	}// end try;
	?>

</table>