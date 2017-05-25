
/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 25/05/2017
 * Time: 13:44
 */

<!DOCTYPE html>
<html>
<head>
  <title>Danh sách sinh viên</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Id</td>
      <td>Name</td>
      <td>Age</td>
    </tr>
    <?php foreach ($list as $value) {?>
    <tr>
        <td><?php echo $value["id"];?></td>
        <td><?php echo $value["name"];?></td>
        <td><?php echo $value["age"];?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>

