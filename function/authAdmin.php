<?php
if ($_SESSION['user']['role'] === 'admin') {
    return true;
} else {
    echo "<script> window.location.href = '" . $route->getBaseURL() . "/pages/dashboard' </script>";
    exit;
}
