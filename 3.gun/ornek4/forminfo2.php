<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formdan Gelen Bilgileri Alma-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    $adi = $_POST['adi'];
    $soyadi = $_POST['soyadi'];
    $kullanici_adi = $_POST['kullanici_adi'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];
    $tekrar_sifre = $_POST['tekrar_sifre'];
    ?>
    <table border="1">
        <tr>
            <td colspan="2">Formdan Gelen Bilgiler</td>
        </tr>
        <tr>
            <td>Adınız:</td>
            <td>
                <?php echo $adi; ?>
            </td>
        </tr>
        <tr>
            <td>Soyadınız:</td>
            <td>
                <?php echo $soyadi; ?>
            </td>
        </tr>
        <tr>
            <td>Kullanıcı Adınız:</td>
            <td>
                <?php echo $kullanici_adi; ?>
            </td>
        </tr>
        <tr>
            <td>E-Posta Adresiniz:</td>
            <td>
                <?php echo $email; ?>
            </td>
        </tr>
        <tr>
            <td>Şifreniz:</td>
            <td>
                <?php echo $sifre; ?>
            </td>
        </tr>
        <tr>
            <td>Tekrar Şifreniz:</td>
            <td>
                <?php echo $tekrar_sifre; ?>
            </td>
        </tr>
    </table>
    <A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
</body>

</html>