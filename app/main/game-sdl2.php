<?php
include_once("../../app.php");

function render() {
    return file_get_contents("./main.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<?php echo render(); ?>
</html>