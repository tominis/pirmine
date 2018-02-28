<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include ($_SERVER['DOCUMENT_ROOT']."/PhpProject1/apsilankymai/log.php");
        ?>
        <table align="center" border="1">
            <?php
            $add=$_SERVER['DOCUMENT_ROOT']."/PhpProject1/apsilankymai/urlfile.txt";
            $adds=$_SERVER['DOCUMENT_ROOT']."/PhpProject1/apsilankymai/counter.txt";    
            $li=file($add);
            $co= file($adds);
            $a= count($li);
            $i=0;
            $w=0;
            while($i<$a):
                echo "<tr><td><a href=$li[$i]>$li[$i]</a></td><td>$co[$i]</td></tr>";
            $i++;
            endwhile;
            ?>
        </table>
    </body>
</html>