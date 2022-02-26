<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<table style=\"border-collapse: collapse;\">";
        $s="mahdi iiiiiiiiii";
        $t=count_chars($s,1);
        foreach($t as $iter=>$value){
            $key=chr($iter);
            echo "<tr> <td style=\"border: 2px solid black; \"> $key </td><td style=\"border: 2px solid black; \"> $value </td>";
        }


    ?>
    <?php echo "</table>"?>
</body>
</html>