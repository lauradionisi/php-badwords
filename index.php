<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    
    <?php 

        $badword = $_GET["badword"];

        $myParagraph = "Dentro quel palazzo c'è un povero cane pazzo, date un pezzo di pane a quel povero pazzo cane. Quel pazzo ha rubato un pizzo prezioso con un pezzo di pizza in un pozzo. Al pozzo dei pazzi c'era una pazza che lavava pizzi e pezze. Andò un pazzo, prese la pazza e buttò nel pozzo la pazza, i pizzi e le pezze. ";

        $newParagraph = str_replace($badword, "***", $myParagraph);
        echo $newParagraph;
        echo "Il paragrafo è lungo";
        echo " ";
        echo  $length = strlen($newParagraph); 
        echo " ";
        echo "caratteri";
               
    ?>
</body>
</html>