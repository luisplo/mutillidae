<?php
	$lUserIDString = "";
	if($_SESSION['loggedin'] == "True"){
	    $lUserIDString = "&uid=" . $lUserID;
	} //end if
?>
<ul class="list-unstyled components">
    <li>
        <a href="#OWASP2017" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            OWASP 2017
        </a>
        <ul class="collapse list-unstyled" id="OWASP2017">
            <li>
                <a href="#CrossSiteScripting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">A7 -
                    Cross Site Scripting (XSS)</a>
                <ul class="collapse list-unstyled" id="CrossSiteScripting">
                    <li>
                        <a href="#Reflected" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Reflected (First Order)</a>
                        <ul class="collapse list-unstyled" id="Reflected">
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                            <li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File
                                    Inclusion</a></li>
                            <li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=browser-info.php">Browser Info</a></li>
                            <li><a href="index.php?page=back-button-discussion.php">Those &quot;Back&quot;
                                    Buttons</a></li>
                            <li><a
                                    href="index.php?page=styling-frame.php&page-to-frame=styling.php%3Fpage-title%3DStyling+with+Mutillidae">Styling
                                    with Mutilidae</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                            <li><a href="index.php?page=client-side-control-challenge.php">Client-side
                                    Control Challenge</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#Persistent" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Persistent (Second Order)</a>
                        <ul class="collapse list-unstyled" id="Persistent">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>">Edit
                                    User Profile</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="#DOM-Based" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">DOM-Based</a>
                        <ul class="collapse list-unstyled" id="DOM-Based">
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#CrossSiteRequestForgery" target="_blank" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Cross Site Request Forgery
                            (CSRF)</a>
                        <ul class="collapse list-unstyled" id="CrossSiteRequestForgery">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ViaInput" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Via
                            "Input" (GET/POST)</a>
                        <ul class="collapse list-unstyled" id="ViaInput">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php">Missing HTTPOnly Attribute</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">A8 - Insecure Deserialization</a>
            </li>
            <li>
                <a href="#Usingcomponentswithknownvulnerabilities" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">A9
                    - Using Components with Known Vulnerabilities</a>
                <ul class="collapse list-unstyled" id="Usingcomponentswithknownvulnerabilities">
                    <li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
                    <li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">CBC-bit
                            Flipping</a></li>
                    <li><a href="index.php?page=ssl-misconfiguration.php">SSL Misconfiguration</a></li>
                </ul>
            </li>
            <li>
                <a href="">A10 - Insufficient Logging and Monitoring</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#OWASP2013" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            OWASP 2013
        </a>
        <ul class="collapse list-unstyled" id="OWASP2013">
            <li>
                <a href="#CrossSiteScripting1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">A7 -
                    Cross Site Scripting (XSS)</a>
                <ul class="collapse list-unstyled" id="CrossSiteScripting1">
                    <li>
                        <a href="#Reflected1" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Reflected (First Order)</a>
                        <ul class="collapse list-unstyled" id="Reflected1">
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                            <li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File
                                    Inclusion</a></li>
                            <li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=browser-info.php">Browser Info</a></li>
                            <li><a href="index.php?page=back-button-discussion.php">Those &quot;Back&quot;
                                    Buttons</a></li>
                            <li><a
                                    href="index.php?page=styling-frame.php&page-to-frame=styling.php%3Fpage-title%3DStyling+with+Mutillidae">Styling
                                    with Mutilidae</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                            <li><a href="index.php?page=client-side-control-challenge.php">Client-side
                                    Control Challenge</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#Persistent1" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Persistent (Second Order)</a>
                        <ul class="collapse list-unstyled" id="Persistent1">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>">Edit
                                    User Profile</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="#DOM-Based1" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">DOM-Based</a>
                        <ul class="collapse list-unstyled" id="DOM-Based1">
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#CrossSiteRequestForgery1" target="_blank" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Cross Site Request Forgery
                            (CSRF)</a>
                        <ul class="collapse list-unstyled" id="CrossSiteRequestForgery1">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ViaInput1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Via
                            "Input" (GET/POST)</a>
                        <ul class="collapse list-unstyled" id="ViaInput1">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php">Missing HTTPOnly Attribute</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">A8 - Insecure Deserialization</a>
            </li>
            <li>
                <a href="#Usingcomponentswithknownvulnerabilities1" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">A9
                    - Using Components with Known Vulnerabilities</a>
                <ul class="collapse list-unstyled" id="Usingcomponentswithknownvulnerabilities1">
                    <li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
                    <li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">CBC-bit
                            Flipping</a></li>
                    <li><a href="index.php?page=ssl-misconfiguration.php">SSL Misconfiguration</a></li>
                </ul>
            </li>
            <li>
                <a href="">A10 - Insufficient Logging and Monitoring</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#OWASP2010" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            OWASP 2010
        </a>
        <ul class="collapse list-unstyled" id="OWASP2010">
            <li>
                <a href="#CrossSiteScripting2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">A7 -
                    Cross Site Scripting (XSS)</a>
                <ul class="collapse list-unstyled" id="CrossSiteScripting2">
                    <li>
                        <a href="#Reflected2" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Reflected (First Order)</a>
                        <ul class="collapse list-unstyled" id="Reflected2">
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                            <li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File
                                    Inclusion</a></li>
                            <li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=browser-info.php">Browser Info</a></li>
                            <li><a href="index.php?page=back-button-discussion.php">Those &quot;Back&quot;
                                    Buttons</a></li>
                            <li><a
                                    href="index.php?page=styling-frame.php&page-to-frame=styling.php%3Fpage-title%3DStyling+with+Mutillidae">Styling
                                    with Mutilidae</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                            <li><a href="index.php?page=client-side-control-challenge.php">Client-side
                                    Control Challenge</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#Persistent2" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Persistent (Second Order)</a>
                        <ul class="collapse list-unstyled" id="Persistent2">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>">Edit
                                    User Profile</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="#DOM-Based2" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">DOM-Based</a>
                        <ul class="collapse list-unstyled" id="DOM-Based2">
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#CrossSiteRequestForgery2" target="_blank" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Cross Site Request Forgery
                            (CSRF)</a>
                        <ul class="collapse list-unstyled" id="CrossSiteRequestForgery2">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ViaInput2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Via
                            "Input" (GET/POST)</a>
                        <ul class="collapse list-unstyled" id="ViaInput2">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php">Missing HTTPOnly Attribute</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">A8 - Insecure Deserialization</a>
            </li>
            <li>
                <a href="#Usingcomponentswithknownvulnerabilities2" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">A9
                    - Using Components with Known Vulnerabilities</a>
                <ul class="collapse list-unstyled" id="Usingcomponentswithknownvulnerabilities2">
                    <li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
                    <li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">CBC-bit
                            Flipping</a></li>
                    <li><a href="index.php?page=ssl-misconfiguration.php">SSL Misconfiguration</a></li>
                </ul>
            </li>
            <li>
                <a href="">A10 - Insufficient Logging and Monitoring</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#OWASP2007" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            OWASP 2007
        </a>
        <ul class="collapse list-unstyled" id="OWASP2007">
            <li>
                <a href="#CrossSiteScripting3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">A7 -
                    Cross Site Scripting (XSS)</a>
                <ul class="collapse list-unstyled" id="CrossSiteScripting3">
                    <li>
                        <a href="#Reflected3" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Reflected (First Order)</a>
                        <ul class="collapse list-unstyled" id="Reflected3">
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                            <li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File
                                    Inclusion</a></li>
                            <li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=browser-info.php">Browser Info</a></li>
                            <li><a href="index.php?page=back-button-discussion.php">Those &quot;Back&quot;
                                    Buttons</a></li>
                            <li><a
                                    href="index.php?page=styling-frame.php&page-to-frame=styling.php%3Fpage-title%3DStyling+with+Mutillidae">Styling
                                    with Mutilidae</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                            <li><a href="index.php?page=client-side-control-challenge.php">Client-side
                                    Control Challenge</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#Persistent3" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Persistent (Second Order)</a>
                        <ul class="collapse list-unstyled" id="Persistent3">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>">Edit
                                    User Profile</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="#DOM-Based3" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">DOM-Based</a>
                        <ul class="collapse list-unstyled" id="DOM-Based3">
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#CrossSiteRequestForgery3" target="_blank" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Cross Site Request Forgery
                            (CSRF)</a>
                        <ul class="collapse list-unstyled" id="CrossSiteRequestForgery3">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ViaInput3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Via
                            "Input" (GET/POST)</a>
                        <ul class="collapse list-unstyled" id="ViaInput3">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php">Missing HTTPOnly Attribute</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">A8 - Insecure Deserialization</a>
            </li>
            <li>
                <a href="#Usingcomponentswithknownvulnerabilities3" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">A9
                    - Using Components with Known Vulnerabilities</a>
                <ul class="collapse list-unstyled" id="Usingcomponentswithknownvulnerabilities3">
                    <li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
                    <li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">CBC-bit
                            Flipping</a></li>
                    <li><a href="index.php?page=ssl-misconfiguration.php">SSL Misconfiguration</a></li>
                </ul>
            </li>
            <li>
                <a href="">A10 - Insufficient Logging and Monitoring</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#WebService" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            Web Services
        </a>
        <ul class="collapse list-unstyled" id="WebService">
            <li>
                <a href="#CrossSiteScripting4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">A7 -
                    Cross Site Scripting (XSS)</a>
                <ul class="collapse list-unstyled" id="CrossSiteScripting4">
                    <li>
                        <a href="#Reflected4" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Reflected (First Order)</a>
                        <ul class="collapse list-unstyled" id="Reflected4">
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                            <li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File
                                    Inclusion</a></li>
                            <li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=browser-info.php">Browser Info</a></li>
                            <li><a href="index.php?page=back-button-discussion.php">Those &quot;Back&quot;
                                    Buttons</a></li>
                            <li><a
                                    href="index.php?page=styling-frame.php&page-to-frame=styling.php%3Fpage-title%3DStyling+with+Mutillidae">Styling
                                    with Mutilidae</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                            <li><a href="index.php?page=client-side-control-challenge.php">Client-side
                                    Control Challenge</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#Persistent4" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Persistent (Second Order)</a>
                        <ul class="collapse list-unstyled" id="Persistent4">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=edit-account-profile.php<?php echo $lUserIDString; ?>">Edit
                                    User Profile</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="#DOM-Based4" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">DOM-Based</a>
                        <ul class="collapse list-unstyled" id="DOM-Based4">
                            <li><a href="index.php?page=html5-storage.php">HTML5 Web Storage</a></li>
                            <li><a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">Password
                                    Generator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#CrossSiteRequestForgery4" target="_blank" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Cross Site Request Forgery
                            (CSRF)</a>
                        <ul class="collapse list-unstyled" id="CrossSiteRequestForgery4">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=register.php">Register User</a></li>
                            <li><a href="index.php?page=user-poll.php">Poll Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ViaInput4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Via
                            "Input" (GET/POST)</a>
                        <ul class="collapse list-unstyled" id="ViaInput4">
                            <li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
                            <li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
                            <li><a href="index.php?page=show-log.php">Show Log</a>
                            <li>
                            <li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
                            <li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
                            <li><a href="index.php?page=echo.php">Echo Message</a></li>
                            <li><a href="index.php?page=cors.php">Echo Message (CORS)</a></li>
                            <li><a href="index.php?page=content-security-policy.php">Echo Message (CSP)</a>
                            </li>
                            <li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
                            <li><a href="index.php?page=user-info-xpath.php">User Info (XPath)</a></li>
                            <li><a href="index.php">Missing HTTPOnly Attribute</a></li>
                            <li><a href="index.php?page=set-background-color.php">Set Background Color</a>
                            </li>
                            <li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a>
                            </li>
                            <li><a
                                    href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document
                                    Viewer</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">A8 - Insecure Deserialization</a>
            </li>
            <li>
                <a href="#Usingcomponentswithknownvulnerabilities4" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">A9
                    - Using Components with Known Vulnerabilities</a>
                <ul class="collapse list-unstyled" id="Usingcomponentswithknownvulnerabilities4">
                    <li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
                    <li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">CBC-bit
                            Flipping</a></li>
                    <li><a href="index.php?page=ssl-misconfiguration.php">SSL Misconfiguration</a></li>
                </ul>
            </li>
            <li>
                <a href="">A10 - Insufficient Logging and Monitoring</a>
            </li>
        </ul>
    </li>
</ul>