<!DOCTYPE html <html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formdan Gelen Bilgileri Alma-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form name="uyelik" method="post" action="forminfo2.php">
        <table border="1" cellspacing="0">
            <tr>
                <td colspan="2" align="center">Kişişel Bilgileriniz:</td>
            </tr>
            <tr>
                <td>Adınız:</td>
                <td><input type="text" name="adi" /></td>
            </tr>
            <tr>
                <td>Soyadınız:</td>
                <td><input type="text" name="soyadi" /></td>
            </tr>
            <tr>
                <td>Kullanıcı adınız:</td>
                <td><input type="text" name="kullanici_adi" /></td>
            </tr>
            <tr>
                <td>e-mail adresiniz:</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Şifre:</td>
                <td><input type="password" name="sifre" /></td>
            </tr>
            <tr>
                <td>Tekrar şifre:</td>
                <td><input type="password" name="tekrar_sifre" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="gonder2" value="Gönder" />
                    <input type="reset" name="gonder" value="Temizle" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>