<?php

require_once('vendor/autoload.php');

use CustomeException\NoArgumentException;

use App\Controller\Calculate;

try {
    if ($argc>1) {
        //Arguments passed in ternimal as considered as filename operation operands
        $calculate = new Calculate($argv[1], $argv[2]??0);
        echo $calculate->perform()."\n";
    } else {
        throw new NoArgumentException("No arguments passed.");
    }
} catch (InvalidOperationException $e) {
    echo $e->getMessage()."\n";
} catch (InvalidOperandException $e) {
    echo $e->getMessage()."\n";
} catch (NoArgumentException $e) {
    echo $e->getMessage()."\n";
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
