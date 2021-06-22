<?php
// $Hello = 'Hello';
// echo $Hello;

class User {
  function User() {
    $this->name = 'Dean';
    $this->age = '33';
    $this->sex = 'M';
  }
}
// javascript const user = {[name:"Dean"]}
$user = new User();
echo $user->name."<br>";
echo $user->age;

$arr = array('qwe','asd','zxc');
$arr1 = array('Mac'=>'30','Dean' => '33','newclear' => 'my girlfans');

foreach( $arr as $v){
  echo "$v <br>";
}
echo "<br>";

foreach ( $arr as $k => $v ){
  ++$k;
  if($k < 1){
    echo "have <br/>";
    echo "key: ".$k." : value: $v ";
  } else {
    echo "dont'have <br/>";
    echo "key: ".$k." : value: $v ";
  }
  echo "<br>";
}
echo "<hr>";
$cou = count($arr1);
echo 'arr=1'.$cou."<br>";
echo 'arr[0]='.$arr[0];
echo "<hr>";


$arr4 = array();
function toBath($us){
  $total = 35.5  * $us;
  echo "$".$us." x 35.5 =  ".$total;
  echo "<br/>";
}
/*
for($i=1; $i<=100; $i++){
  if(($i % 5) == 0){
    toBath($i);
    $arr4[$i] = $i;
  }
}
*/
echo "<hr>";
echo 'count>>'.count($arr4);
echo "<br>";

foreach($arr1 as $key => $value){
  echo "key:".$key.': <br>';
  echo "value:".$value;
}
echo "<hr>";
$x = 10;
$x = 5;

// function add(){
//   $GLOABLS['z'] = $GLOABLS['x'] + $GLOABLS['y'];
// }
// add();
// echo $z;

/*
$_SERVER
$_REQUEST
$_POST$
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
echo $_SERVER["PHP_SELF"]."<br/>";
echo $_SERVER["SERVER_NAME"]."<br/>";
echo $_SERVER["HTTP_HOST"]."<br/>";
echo $_SERVER["HTTP_USER_AGENT"]."<br/>";
echo $_SERVER["SCRIPT_NAME"]."<br/>";
echo "<br>";

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $name = $_REQUEST['name'];
  if(empty($name)){
    echo 'Nothing request';
  } else {
    echo "name:". $name ."<br/>";
  }
}
?>
<form action=""<?php echo $_SERVER["PHP_SELF"];?>  method="post">
Name:<input type="text" name="name" />
<input type="submit" value="ok" />
</form>

