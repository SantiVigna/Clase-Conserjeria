<?php

    require_once("Components/layout.php");
    require_once("Components/header.php");

?>

<body>
    
    <main>
        <a href="../index.php">
            <button type="button">Cancel</button>
        </a>

        <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>

        <form action="?action=store" method="post">
            <div>
                <span>room</span>
                <input type="text">
            </div>
            <div>
                <span>issue description</span>
                <textarea name="issue"></textarea>
            </div>
            <div>
                <input type="submit" value="Create">
                <input type="reset" value="Reset">
            </div>
        </form>
    </main>

<?php
    require_once("Components/footer.php")
?>

</body>