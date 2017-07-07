
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图形计算</title>
</head>
<body>
<center>
    <h1>图形(周长&面积)计算器</h1>
    <a href="index.php?action=rect">矩形</a>
    <a href="index.php?action=triangle">三角形</a>
    <a href="index.php?action=circle">圆形</a>
</center>
<?php
//echo '<h1 align="center" >My first PHP</h1>';
//$wage = array("市场部"=>array(
//        array(1,"高某","市场部经理","5000.00"),
//        array(2,"洛某","职员","3000.00"),
//        array(3,"峰某","职员","2000.00")),
//    "产品部"=>array(
//        array(1,"李某","产品部部经理","5000.00"),
//        array(2,"周某","职员","2500.00"),
//        array(3,"吴某","职员","2000.00")),
//    "财务部"=>array(
//        array(1,"郑某","财务部经理","5000.00"),
//        array(2,"王某","职员","4000.00"),
//        array(3,"冯某","职员","2000.00")));
//foreach($wage as $sector => $table){
//     echo '<table border="1" width="600" align="center">';
//     echo '<caption><h2 align="center" >'.$sector.'10月份工资表</h2></caption>';
//     echo '<tr bgcolor="#dddddd"><th>编号</th><th>姓名</th><th>职务</th><th>工资</th></tr>';
//     foreach($table as $row){
//          echo  '<tr>';
//          foreach($row as $col){
//              echo '<td>'.$col.'</td>';
//          }
//          echo  '</tr>';
//     }
//     echo '</table></<br>';
//}
//    foreach($_SERVER as $key=>$value){
//        echo '$_SERVER['.$key.'] = '.$value.'<br>';
//
//    }
//    echo '<pre>';
//    print_r($_SERVER);
//    echo '</pre>';
//    echo $_SERVER['REMOTE_ADDR'];
//    class Person{
//        var $name;
//        var $sex;
//        var $age;
//        function __construct($name="",$sex="男",$age="1"){
//            $this->name = $name;
//            $this->sex = $sex;
//            $this->age = $age;
//        }
//        function say(){
//            echo "我的名字:".$this->name.",性别:".$this->sex.",年龄:".$this->age.".<br>";
//        }
//        function run(){
//            echo $this->name."正在走路.<br>";
//        }
//    }
//    class Student extends Person{
//        var $school;
//        function study(){
//            echo $this->name."正在".$this->school."学习<br>";
//        }
//    }
//    class Teacher extends Student{
//        var $wage;
//        function teaching(){
//            echo $this->name."正在".$this->school."教学,每月工资为:".$this->wage.".<br>";
//        }
//    }
//    $teacher1 = new Teacher("张三","男","40");
//    $teacher1->wage = 3000;
//    $teacher1->school = "edu";
//    $teacher1->say();
//    $teacher1->study();
//    $teacher1->teaching();
//    require "USB.php";
//
//    class Ukey implements USB{
//        function run()
//        {
//            echo "运行USB键盘设备<br>";
//            // TODO: Implement run() method.
//        }
//    }
//    class Umouse implements USB{
//        function run()
//        {
//            echo "运行USB鼠标设备<br>";
//            // TODO: Implement run() method.
//        }
//    }
//    class Ustore implements USB{
//        function run()
//        {
//            echo "运行USB存储设备<br>";
//            // TODO: Implement run() method.
//        }
//    }
//    class Computer{
//        function useUSB($usb){
//            $usb -> run();
//        }
//    }
//
//    $computer = new Computer();
//    $computer->useUSB(new Ukey());
//    $computer->useUSB(new Umouse());
//    $computer->useUSB(new Ustore());
//echo "hello world";
//error_reporting(E_ALL& ~ E_NOTICE);
//function __autoload($className){
//    include strtolower($className).".class.php";
//}
//echo new Form("index.php");
//if(isset($_POST["sub"])){
//    echo new Result();
//}
error_reporting(E_ALL& ~ E_NOTICE);
function __autoload($className){
    include strtolower($className).".class.php";
}
echo new Form("index.php");
if(isset($_POST["sub"])){
    echo new Result();
}
?>
</body>
</html>



