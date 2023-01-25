<?php
session_start();

$color = $_POST['color'];
echo $color;

echo "<style>body { background-color: $color} </style>";

$_SESSION['theme'] = $_POST['color'];