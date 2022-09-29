<style>
iframe {
    width: 90%;
    margin: 5px auto 0 auto;
    position: absolute;
    left: 5%;
    right: 5%;
    height: 75%;
    background-color: whitesmoke;
}
</style>

<!--<iframe id="frame" src="https://docs.google.com/forms/d/1jwbAICcxr5T1bHwSgzvZGVh6hkVdQQKf_EtPwcNawSQ/viewform?embedded=true" width="100%" height="100" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>-->
<!--<iframe id="frame" src="https://docs.google.com/forms/d/1PZbnuUxTtnh4r8zSGkP4JpnzwzwtWlzsdMCk9Ch643c/viewform?edit_requested=true" width="100%" height="100" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>-->
<!--<iframe id="frame" src="https://docs.google.com/forms/d/1elaxP5L4-6e1qmmRv80XoAg0B7rRMGeWeoHP1E1vyFk/viewform?requested=true" width="100%" height="100" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>-->
<!--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd_G1SbswWehJ-Hqaz2E4OInYM0LapRDu9lau6e0LErdWJe4Q/viewform?embedded=true" width="640" height="2254" frameborder="0" marginheight="0" marginwidth="0">Laster inn …</iframe>-->
<!--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScbTjM_JkWHiwOsDdDZL2YCgE_Tlkk44qnpi7Jxy93KXyqWpA/viewform?embedded=true" width="640" height="2182" frameborder="0" marginheight="0" marginwidth="0">Laster inn …</iframe>-->
<?php
$l = htmlspecialchars($_GET["lang"]);

if ($l == "no") {
    include("reg_form_no.html");
} elseif ($l == "en") {
    include("reg_form_en.html");
} else {
    include("reg_form_no.html");
}
?>
