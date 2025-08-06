<?php

use SOLID\LSP\Encrypter;
use SOLID\LSP\EncrypterSubType;
use SOLID\LSP\LSPViolation;
use SOLID\LSP\LSPViolationSubType;
use SOLID\LSP\LSPViolationType;
use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;

require_once __DIR__ . '/vendor/autoload.php';

$rectangle = new Square();
$rectangle->setWidth(4);
$rectangle->setHeight(6);

echo "Rectangle area with {$rectangle->getWidth()} width and {$rectangle->getHeight()} height = {$rectangle->calculateArea()}<br/>";

function f(Rectangle $rectangle): void
{
    if ($rectangle instanceof Square) {
        if ($rectangle->calculateArea() !== 36) {
            echo 'Something is wrong!';
        }
    } else {
        if ($rectangle->calculateArea() !== 24) {
            echo 'Something is wrong!';
        }
    }
}

f($rectangle);

/** Preconditions
 * $name must be a string
 * $name mustn't be more than 25 characters
 * $name's first letter must be a capital letter
 **/
function hello($name)
{
    /** Invariants
     * loop-invariant
     **/

    /** Postconditions
     * the whole string mustn't exceed 35 characters
     * the whole string mustn't be lowercase, all letters should be uppercase
     **/
}

$violation = new LSPViolationSubType();
$violation->setSalary(2000);

$violationExample = new LSPViolation();
echo $violationExample->calculateSalaryOfEmployee($violation, 16) . '<br />';

$encrypter = new Encrypter();
$encrypter->setString('Zeina');
echo $encrypter->encryptString() . '<br />';

$encrypterSub = new EncrypterSubType();
$encrypterSub->setString('Zeina');
echo $encrypterSub->encryptString() . '<br />';
