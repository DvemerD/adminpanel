<?php
$file = "../../[peworp1p2qwesd4543rw1].html";

if (file_exists($file)) {
    unlink($file);
} else {
    header("HTTP/1.0 400 Bad Request");
}