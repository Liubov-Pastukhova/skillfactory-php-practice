<?php

$data = array(
    "greetings" => "Приветствую Вас на моей страничке!",
    "name" => "Любовь",
    "surname" => "Пастухова",
    "city" => "Ижевск",
    "birthYear" => 1988,
);

require 'functions.php';
require 'data.php';

include './pages/main.php';
?>