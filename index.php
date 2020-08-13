<?php

include ('detect.php');
include ('link.php');


if ($asname == "FACEBOOK") {
    header('location: https://google.com');
    exit();
} else {
    header("location: $myLink");
    exit();
}