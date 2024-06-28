<?php

$mysqli = new mysqli("localhost", "root", "", "cafe");

if (!$mysqli) {
    echo "Koneksi bermasalah !";
}
