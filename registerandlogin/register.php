<?php
   
    const REGISTER_PATH = 'data/register.json';


    // Always call session_start.
    session_start();

    // --- Utils ----------------------------------------------------------------------------------
    function readJsonFile($path) {
        $json = file_get_contents($path);

        return json_decode($json, true);
    }

    function updateJsonFile($data, $path) {
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($path, $json, LOCK_EX);
    }

    function displayError($errors, $name) {
        if(isset($errors[$name]))
            echo "<div class='text-danger'>{$errors[$name]}</div>";
    }

    function displayValue($form, $name) {
        if(isset($form[$name]))
            echo 'value="' . htmlspecialchars($form[$name]) . '"';
    }

   
    // --- Locations -----------------------------------------------------------------------------
    function readLocations() {
        return readJsonFile(LOCATIONS_PATH);
    }

    function getLocation($location) {
        $locations = readLocations();

        return isset($locations[$location]) ? $location[$locations] : null;
    }
