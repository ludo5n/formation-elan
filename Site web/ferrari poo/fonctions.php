<?php
    function logged():bool {
        return array_key_exists('user', $_SESSION);
    }

?>