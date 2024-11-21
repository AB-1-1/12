<!DOCTYPE html>
<html>
<head>
<title>Chessboard</title>
<style>
.chessboard { width:
240px;height:
240px;display:
grid;grid-template-columns: repeat(8, 30px); 
grid-template-rows: repeat(8, 30px);
}

.white {
background-color: grey;
}
.black {
background-color: beige;
2
color: white;
}
</style>
</head>
<body>
<h2>Chessboard</h2>
<div class="chessboard">
<?php
$isWhite = true;
for ($row = 1; $row <= 8; $row++) 
{
    for ($col =1; $col <= 8; $col++) 
{
    $cellClass = $isWhite ? "white" : "black";
    echo "<div class='cell $cellClass'>$row, $col</div>";
    $isWhite = !$isWhite;
}
$isWhite = !$isWhite;
}
?>
</div>
</body>
</html>