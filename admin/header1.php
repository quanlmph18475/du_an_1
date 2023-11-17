<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b700018786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>
<body class="container">
    <div class="menu_admin">
        <div class="menu1">
            <li><a style="color: black;"><i style="margin-right: 5px;" class="fa-solid fa-couch"></i>SOUDEMY</a></li>
            <hr class="hr_menu_admin">
             <li><a href="index.php">Home</a></li>
             <hr>
             <li><a href="index.php?act=addsp">Product</a></li>
             <hr>
             <li><a href="index.php?act=adddm">Category</a></li>
             <hr>
             <li><a href="index.php?act=addcl">Color</a></li>
             <hr>
             <li><a href="index.php?act=addsz">Size</a></li>
             <hr>
             <li><a href="index.php?act=addcm">Comment</a></li>
             <hr>
             <li><a href="index.php?act=addbill">Bill</a></li>
             <hr>
             <li><a href="index.php?act=thongke">Thống kê</a></li>
             <hr>
        </div>
        <div class="background_admin1">
            <p>A&ensp;D&ensp;M&ensp;I&ensp;N</p>
        </div>
    </div>
  <style>
    .menu_admin{
    display: flex;
}
.menu1 li{
    list-style: none;
    padding: 20px;
}
.menu1 li a{
    text-decoration: none;
    color:white;
    
}
.menu1 li a:hover{
    color: black;
}
.menu1 li:hover{
    color: black;
}
.menu1{
    background-color: gray;
    width: 15%;
    height: 941px;
    text-align: center;
    display: flex;
   flex-direction: column;
   justify-content: space-between;
   font-weight: 700;
   font-size: 18px;
   font-variant: initial;
}
.background_admin1{
    background-color: gray;
    color: aliceblue;
    width: 95%;
    height: 70px;
}
.hr_menu_admin{
    margin-top: -5%;
}
.background_admin1 p{
    text-align: center;
    margin-top: 15px;
    font-size: 30px;
    color: black;
    font-weight: 800;
}
  </style>