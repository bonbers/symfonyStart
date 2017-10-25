<?php

namespace BONBERS\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 *  @Annotation
 */

class Antiflood extends Constraint
{
    public $message = "Vous avez déjà posté un message si y a moins de 15 secondes, merci d'attendre un peu.";
}