<?PHP
function ucgen($boyut){
    $char = "O";
    $sayac = 1;
    while ($sayac <= $boyut) {
        for ($i = 1; $i <= $sayac; $i++) {
                echo $char;
        }
        echo "<br>";
        $sayac++;   
    }
}
ucgen(15);
?>
