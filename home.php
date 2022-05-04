<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <div class="row ">
                <a title="Usage Instructions" href="./index.php?page=documentation/usage-instructions.php">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-info fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span class="">What Should I Do?</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3 p-4">
            <div class="row">
                <a href="http://www.youtube.com/user/webpwnized" target="_blank">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-play fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Video Tutorials</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3 p-4">
            <div class="row">
                <a href="./index.php?page=./documentation/vulnerabilities.php">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-bell fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Listing of vulnerabilities</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3 p-4">
            <div class="row">
                <a href="https://twitter.com/webpwnized" target="_blank">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-dove fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Release Announcements</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3 p-4">
            <div class="row">
                <a title="Latest Version" href="https://github.com/webpwnized/mutillidae" target="_blank">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-code-branch fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Latest Version</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3 p-4">
            <div class="row">
                <a href="documentation/mutillidae-test-scripts.txt" target="_blank">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-door-open fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Helpful hints and scripts</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3 p-4">
            <div class="row">
                <a href="configuration/openldap/mutillidae.ldif" target="_blank">
                    <div class="col">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-database fa-3x"></i>
                            </div>
                        </div>
                        <div class="my-2"></div>
                        <div class="row">
                            <div class="col text-center">
                                <span>Mutillidae LDIF File</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

<?php
	/* Check if required software is installed. Issue warning if not. */
 
	if (!$RequiredSoftwareHandler->isPHPCurlIsInstalled()){
		echo $RequiredSoftwareHandler->getNoCurlAdviceBasedOnOperatingSystem();
	}// end if

	if (!$RequiredSoftwareHandler->isPHPJSONIsInstalled()){
		echo $RequiredSoftwareHandler->getNoJSONAdviceBasedOnOperatingSystem();
	}// end if
?>

<!-- <div style=" width: 750px; overflow: hidden;">
    <?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>
    <span style="float: right">
        <img src="images/arrow-45-degree-left-up.png" style="margin-right: 5px" />
        <span class="label" style="float: right;">TIP:&nbsp;
            <span style="float: right; text-align: center;">Click
                <span style="color: blue;font-style: italic;">Hint and Videos</span><br />on each page</span></span>
    </span>
</div> -->

