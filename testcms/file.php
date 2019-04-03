<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Playbook</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$myfile = "file1.txt";
if (isset($_POST['ta'])) {
    $newData = nl2br(htmlspecialchars($_POST['ta']));
    $handle = fopen($myfile, "w");
    fwrite($handle, $newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
Hello user, use this form to edit the writing on your live website
<form action="file.php" method="post">
  <textarea name="ta" cols="64" rows="10">
    <?php echo str_replace("br","",$myData); ?>
  </textarea>
  <br><br>
  <input name="myBtn" type="submit" />
</form>
<br><br>
<?php echo $myData; ?>

</body>
</html>
