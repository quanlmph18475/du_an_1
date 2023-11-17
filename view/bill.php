
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b700018786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container billcf">
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Người đặt hàng:</td>
                    <td><input  class="w3-hover-blue" type="text" name="bill_user"></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input class="w3-hover-blue" type="text" name="bill_address"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="w3-hover-blue" type="text" name="bill_email"></td>
                </tr>
                <tr>
                    <td>Điện thoại:</td>
                    <td><input class="w3-hover-blue" type="text" name="bill_tel" ></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán:</td>
                    <td>Trả tiền khi nhận hàng</td>
                </tr>
                
  
  
            </table>
            <?php
                 $tong=0;
                 $i=0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $tong=$tong+($cart['price']*$cart['soluong']);
                        echo '
                        
                        <tr class="tr2" style="margin-right: 10px;">
                        <th><input type="hidden" name="name_sp" value="'.$cart['name'].'"></th><br>
                        <tr>
                        <th><input type="hidden" name="price_sp" value="'.$cart['price'].'"></th><br>
                        </tr>
                        <tr>
                        <th><input type="hidden" name="soluong_sp" value="'.$cart['soluong'].'"></th><br>
                        </tr>
                        <tr>
                        <th><input type="hidden" name="ttien_sp" value="'.($cart['price']*$cart['soluong']).'"></th>
                        </tr>
                           ';
                        $i+=1;
                        echo '<tr class="tr2">
                        <th><input type="hidden" name="tongtiensp" value="'.$tong.'"></th>

                       </strong>
                    </tr> ';
                    }
                ?>
            <div>
           
        </div>
        <center>
            <input class="btn_dy" type="submit" name="dongydathang" value="Đồng ý đặt hàng"></center>
            <?php
            include_once "dp.php";
            if(isset($_POST['dongydathang'])){
                $bill_user = $_POST['bill_user'];
                $bill_address=$_POST['bill_address'];
                $bill_email=$_POST['bill_email'];
                $bill_tel=$_POST['bill_tel'];
                $name_sp=$_POST['name_sp'];
                $price_sp=$_POST['price_sp'];
                $soluong_sp=$_POST['soluong_sp'];
                $ttien_sp=$_POST['ttien_sp'];
                $sql_insert="insert into bill values(null,'$bill_user','$bill_address','$bill_email','$bill_tel','$name_sp','$price_sp','$soluong_sp','$ttien_sp')";
                $objInsert=$conn->prepare($sql_insert);
                if($objInsert->execute()){
                    echo"Đặt hàng thành công";
                }
                else{
                    echo"thất bại";
                }
            }
   
        ?>
        </form>
       
        
        <br>
        <center>
    <h2>GIỎ HÀNG</h2>
    <table class="tb1" border="1">
        <?php
            viewcart(0);
        ?>

    </table>
    <a href="index.php?act=billcomfirm"><input class="cart2" type="submit" name="donhangcuatoi" value="Đơn hàng của tôi"></a>


    </center>
    </div>
   

    
    <style>
        .table tr td{
            padding: 5px;
            width: 70px;
            font-weight: 700;
        }
        .table{
            margin-bottom: 20px;
            margin-top:100px
        }
        
        body{
            width: 100%;
        }
        .billcf{
            border: 1px black solid;
            border-radius: 10px;
            background-color: rgb(248, 231, 208);
            margin-bottom: 40px;
        }
        .pttt1{
            display: flex;

        }
        .table{
            margin-left: 30%;
        }
        .btn_dy{
            background-color: #2196F3;
            border-radius: 10px;
            color: white;
            padding: 10px;
            font-weight: 600;
            margin-top:-90px
        }
        .btn_dy:hover{
            color: black;
        }
    </style>
</body>
</html>