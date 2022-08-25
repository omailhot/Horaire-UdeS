<html>

<head>
    <title>Horaire UDES</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>

    <table id="cours">
        <tr>
            <?php 
                for ($i = 2; $i < 5; $i++) {
                    echo "<th>" . "S" . $i . "</th>";
                    echo "<th>" . "T" . $i . "</th>";
                    if ($i == 4) {
                        echo "<th>" . "S" . $i + 1 . "</th>";
                        echo "<th>" . "S" . $i + 2 . "</th>";
                    }
                }
            ?>
        </tr>

        <tr id="saison">
            <th>A21</th>
            <th>H22</th>
            <th>E22</th>
            <th>A22</th>
            <th>H23</th>
            <th>E23</th>
            <th>A23</th>
            <th>H24</th>
        </tr>

        <?php 

        $lienUdes = "https://www.usherbrooke.ca/admission/fiches-cours/";

        $sessions = array(
            array("IFT209","IFT232","IFT339","MAT115","IFT203"),
            array(),
            array("IFT287","IFT320","IFT436","ADM124","MAR221"),
            array(),
            array("IFT585","IFT606","IGE401","IGL601","STT418"),
            array(),
            array("IGL301","IGE487","IFT604","IGE511","IFT615"),
            array("IGE502","GRH121","IGE592","IGE692","IFT702")
        );
        
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 8; $j++) {
                    if (count($sessions[$j]) == 0) {
                        echo "<td id='empty'></td>";
                    } else {
                        echo 
                        "<td>
                            <a href='" . $lienUdes . $sessions[$j][$i] . "'>" . $sessions[$j][$i] . "</a>
                        </td>";
                    }
                }
                echo "</tr>";
            }
        ?>

</body>

</html>