<?php
require 'markov.php';
$dir = new DirectoryIterator(dirname(__FILE__).'/text');
$master_text = '';
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        //var_dump($fileinfo->getFilename());
        $text = file_get_contents("text/".$fileinfo->getFilename());
        //echo $text;
        $master_text .= $text;
    }
}

        $length = 2000;
        $order = 4;
        $markov_table = generate_markov_table($master_text, $order);
        $markov = generate_markov_text($length, $markov_table, $order);
        echo PHP_EOL.$markov.PHP_EOL;



?>