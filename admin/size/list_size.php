<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .link_all{
            display:flex;
            justify-content: space-between;
        }
        .border_btn_button{
            background-color: black;
            width: 150px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .btn_button{
            text-decoration: none;
            color: white;
        }
        .btn_button:hover{
            color: red;
        }
        .sua{
            background-color: gray;
            width: 40px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .sua a{
            
            color: white;
            text-decoration: none;
        }
        .sua a:hover{
            color: black;
        }
        table{
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Danh sách các loại size</h1>
    <table border=1>
        <tr>
            <th>Mã size</th>
            <th>Tên size</th>
        </tr>
        <?php
            foreach($listkichthuoc as $kichthuoc){
                extract($kichthuoc);
                $suasz="index.php?act=suasz&id=".$id_size;
                $xoasz="index.php?act=xoasz&id=".$id_size;
                echo '<tr>
                <th>'.$id_size.'</th>
                <th>'.$size.'</th>
                <th><a href="'.$suasz.'"><input type="button" value="Sửa"></a> <a href="'.$xoasz.'"><input type="button" value="Xóa"></a></th>
                </tr>';
            }
        ?>
    </table>
    <br>
    <div>
        <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a>
    </div>
</body>
</html>