<body>

    <script type="text/javascript">
        <?php
        $cookie_name = "test";
        $cookie_value = "cookie_value";

        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        ?>
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie nommé '" . $cookie_name . "' n'est pas défini !";
        } else {
            echo "Cookie '" . $cookie_name . "' est défini !<br>";
            echo "La valeur est: " . $_COOKIE[$cookie_name];
        }
        ?>
    </script>