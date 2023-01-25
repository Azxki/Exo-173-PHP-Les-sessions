<?php

session_start();

$color = $_SESSION['theme'];
echo "<style> body { background-color: $color}</style>";