<?PHP
function ucgen($boyut){
    $char = "O";
    $sayac = 1;
    while ($sayac < $boyut) {
        for ($i = $sayac; $i < $boyut; $i++) {
            for ($j = 0; $j < $sayac; $j++){
                echo $char;
            }

        echo "<br>";
        $sayac++;

        }
        
    }
}
ucgen(15);
?>