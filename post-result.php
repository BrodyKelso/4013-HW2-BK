<?php

function PostDisplay() {
    $pageTitle = "Post result";
    include "view-header.php";
?>
    <h1>Post result</h1>

<?php
    if (isset($_POST["my-name"])) {
?>
        <p> The value sent is:</p>
<?php
        echo $_POST["my-name"];
    } else {
?>
        <p> Nothing was posted to the page.</p>
<?php
    }

    include "view-footer.php";
}

PostDisplay();

?>
