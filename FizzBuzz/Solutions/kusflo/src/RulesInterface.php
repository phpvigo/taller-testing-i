<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


interface RulesInterface
{
    public function check($number);

    public function getValue();

}