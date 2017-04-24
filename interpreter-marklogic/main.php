<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 10:23 AM
 */

require_once "InterpreterContex.php";
require_once "LiteralExpression.php";
require_once "VariableExpression.php";
require_once "BooleanOrExpression.php";
require_once "EqualsExpression.php";

$context = new InterpreterContex();
$literal = new LiteralExpression('four');
$literal->interpret($context);
print $context->lookup($literal) . "\n";
// output: four

$context = new InterpreterContex();
$myvar = new VariableExpression('input', 'four');
$myvar->interpret($context);
print $context->lookup($myvar) . "\n";
// output: four

$newvar = new VariableExpression('input');
$newvar->interpret($context);
print $context->lookup($newvar) . "\n";
// output: four

$myvar->setValue("five");
$myvar->interpret($context);
print $context->lookup($myvar) . "\n";
// output: five

print $context->lookup($newvar);
// output: five

print "<BR>";

// listing 11.11
$context = new InterpreterContex();
$input = new VariableExpression('input');
$statement = new BooleanOrExpression(
    new EqualsExpression($input, new LiteralExpression('four')),
    new EqualsExpression($input, new LiteralExpression('4'))
);

print "<BR>";

// listing 11.12
foreach (["four", "4", "52"] as $val) {
    $input->setValue($val);
    print "$val:\n";
    $statement->interpret($context);
    if ($context->lookup($statement)) {
        print "top marks\n\n";
    } else {
        print "dunce hat on\n\n";
    }
}