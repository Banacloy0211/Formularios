<?php
    function hont($votos){
        echo "<table border='1'>";
        for($i = 1; $i < 8; $i++ ){
            echo "<tr>";
            for($j = 0; $j < 8; $j++){
                $votosEsc = round($votos[$j]/$i,1);
                // echo "<td>{$votosEsc}</td>";
                $numVotos[]= $votosEsc;

            }
            echo "</tr>";
            $contarVotos[] = $numVotos;
            $numVotos = [];
        }
        echo "</table>";
        $votosContados = array_combine($partidos,$contarVotos);
    }
    

    $partidos = ["Partido a","Partido b","Partido c","Partido d"];
    $votos = [500000,3000000,150000,50000];
    echo (hont($votos));
?>