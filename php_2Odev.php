<?PHP //2. Ödev:Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir fonksiyon yazın. (array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
$planets = array_filter($planets); //filter varsayılan olarak boşlukları ve null değerleri temizler.

function arr($planets, $key) {
    $randomKeys = array_rand($planets, $key);

    return array_map(function ($k) use ($planets) {
        return $planets[$k];
    }, $randomKeys);
}

/* Alternatif Çözüm Yöntemi
function arr($planets, $key) {
    $dizi=array_rand($planets, $key);
    
    for ($i= 0; $i < $key; $i++) {
    
        $newDizi[] = $planets[$dizi[$i]];
    }
    return $newDizi;
}*/

print_r(arr($planets, 2));
print_r(arr($planets, 3));
print_r(arr($planets, 2));
print_r(arr($planets, 4));
print_r(arr($planets, 5));
?>
