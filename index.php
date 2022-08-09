<body>
    <?php
        if( isset($_GET["action"])){
            if($_GET["action"] == "assign"){
                require_once 'View/html/assing.php';
            }
            if($_GET["action"] == "consult"){
                require_once 'View/html/consult.php';
            }
            if($_GET["action"] == "cancel"){
                require_once 'View/html/cancel.php';
            }
        } else {
            require_once 'View/html/homepage.php';
        }
    ?>
</body>