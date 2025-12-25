<?PHP /*
1.Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın.
2.Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
3.Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
4.Boş değer gönderilirse değerin boş olmayacağını bildirin.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3'e BÖLüNEBİLİR Mİ?</title>
</head>
<body>
    <form method="post">
    <input type="number" name="sayi" placeholder="Sayı Girin">
    <button type="submit">Kontrol Et</button>
    </form>

    <?PHP
    function uc($sayi){
        if($sayi !== "" && $sayi !== null){
            $sayac = $sayi;
            while($sayac%3 !== 0){
                $sayac++;
            }
            $sonuc = $sayi%3==0 ?"Girdiğiniz Sayı 3'e Tam Bölünür":"Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $sayac'dır.";
            return $sonuc;
        }
        else if($sayi == " " || $sayi == null){
            $sayi = "Geçersiz Bİr Değer Girişi Yaptınız!";
            return $sayi;
        }   
    }
    
    if(isset($_POST["sayi"])){
    echo uc($_POST["sayi"]);
    }
    ?>
</body>
</html>
