<?php

    // ACCESS TO DATABASE ON PHP-MY-ADMIN //
    function database() {
        return new mysqli('localhost','root','','project_php_database');
    }
