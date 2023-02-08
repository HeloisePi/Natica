<body>

    <script type="text/javascript">
        <?php
        include '../../header.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

        $cookie_name = $_GET['eMailMemb'];
        $cookie_value = $_GET['passMemb'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        echo ("$cookie_name, $cookie_value");
        ?>
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Le cookie '" . $cookie_name . "' n'est pas défini !";
        } else {
            echo "Cookie '" . $cookie_name . "' est défini !<br>";
            echo "La valeur stockée est: " . $_COOKIE[$cookie_name];
        }
        include '../../footer.php'
        ?>
    </script>