<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Sửa danh mục</h1>
        <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php if(isset($id_category)&&($id_category>0)) echo $id_category; ?>">
        <p>Tên sản phẩm</p> <input type="text" name="name" value="<?php if(isset($name)&&($name!="")) echo $name; ?>"> <br><br>
        <input type="submit" name="btn_capnhat" value="Cập nhật">
        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
    </form>
</body>
</html>