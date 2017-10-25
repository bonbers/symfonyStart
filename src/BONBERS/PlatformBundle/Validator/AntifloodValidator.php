<?php

namespace BONBERS\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntifloodValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        // Flood tout message de moins de 3 caractères
        if (strlen($value) <3) {
            // Déclenchement de l'erreur pour le formulaire, avec en argument le message de la contrainte
            $this->context->addViolation($contraint->message);
        }
    }
}
