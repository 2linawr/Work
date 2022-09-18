<?
if(isset($_POST['Host']) && isset($_POST['UserName']) && isset($_POST['Password'])){
$file = '../Core/Connect/host.txt';
// Открываем файл для получения существующего содержимого
$current = file_get_contents($file);
// Добавляем нового человека в файл
$current .= $_POST["Host"]."\n". $_POST["UserName"]."\n".$_POST["Password"]."\n";
// Пишем содержимое обратно в файл
file_put_contents($file, $current);

$link = mysqli_connect($_POST['Host'], $_POST['UserName'], $_POST['Password']);
    if (!$link) {
        die('Ошибка соединения: ' . mysqli_error());
    }
    
    $sql = "CREATE DATABASE IF NOT EXISTS voprosu";
    if (mysqli_query($link,$sql)) {
        echo "База my_db успешно создана\n";
    } else {
        echo 'Ошибка при создании базы данных: ' . mysqlierror() . "\n";
    }
    $link_2 = mysqli_connect($_POST['Host'], $_POST['UserName'], $_POST['Password'],"voprosu");
    if (!$link_2) {
        die('Ошибка соединения: ' . mysqli_error());
    }
    
    
   
    $sql_2="
    CREATE TABLE voprosu (
   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   voprosu     CHAR(255),
   otvetu  CHAR(255)
   );";
       if (mysqli_multi_query($link_2, $sql_2)) {
       echo "All Tables Created Successfully";
   } else {
       echo "Error creating table: " . mysqli_error($link_2);
   }
    
  rename("index.php", "indexed.php");
    ob_start();
      $new_url = '../index.php';
      header('Location: '.$new_url);
      ob_end_flush();
}
?>