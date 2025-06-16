<?php
if ($_SESSION['user']['role'] === 'user') {
    return true;
} else {
    echo "<script> window.location.href = '" . $route->getBaseURL() . "/pages/user/index.php' </script>";
    exit;
}
