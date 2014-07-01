<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContainsAlphanumeric
 *
 * @author rlutignaux
 */
namespace RL\TestBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class ContainsAlphanumeric extends Constraint
{
    public $message = 'The string "%string%" contains an illegal character: it can only contain letters or numbers.';
}
