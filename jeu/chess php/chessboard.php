<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div wrapper>
    <h1>CHESSBOARD</h1>
        <table id=tableau>
            <?php
            for($row = 1 ; $row <= 8; $row++)
                {
                echo "<tr>";
                    for($col = 1; $col<= 8; $col++)
                    {
                        $total = $row +$col;
                        if($total % 2 == 0 )
                        {
                            echo "<td  height = 60 px width = 60 px bgcolor = #FFFFFF></td>";
                        }
                        else
                        {
                            echo "<td height = 60px width = 60px bgcolor = #000000></td> ";                    }
                        }
                }
                        echo"</tr>";
             
         ?>    
        </table>
    </div>
</body>
</html>