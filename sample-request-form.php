<?php
if($_POST["nz-sample-request"]) {
    mail("emma@metalsolutions.uk.com", "NedZink Sample Request", $_POST["nz-sample-request"], "From: an@email.address");
}
?>
