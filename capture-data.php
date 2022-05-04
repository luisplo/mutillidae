<?php include_once (dirname(__FILE__).'/includes/capture-data.php');?>

<link rel="stylesheet" type="text/css" href="./styles/global-styles.css" />
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

<!-- BEGIN HTML OUTPUT  -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <p>
                This page is designed to capture any parameters sent and store them in a file and a database table. It
                loops
                through
                the POST and GET parameters and records them to a file named <span
                    class="label"><?php print $lFilename; ?></span>. On this system, the
                file should be found at <span class="label"><?php print $lFilepath; ?></span>. The page
                also tries to store the captured data in a database table named captured_data and <a
                    href="./index.php?page=show-log.php">logs</a> the captured data. There is another page named
                <a href="index.php?page=captured-data.php">captured-data.php</a> that attempts to list the contents of
                this
                table.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 text-start">
            <strong>The data captured on this request is: <?php print $lCapturedData; ?></strong>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-8 text-center">
            <span> Would it be possible to hack the hacker? Assume the hacker will view the captured requests with a web
                browser.</span>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-8 text-center">
            <a href="./index.php?page=captured-data.php" style="text-decoration: none;">
                <i class="fas fa-file-medical-alt"></i>
                <span style="font-weight:bold; cursor: pointer;">View Captured Data</span>
            </a>
        </div>
    </div>
</div>


<!-- <?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?> -->