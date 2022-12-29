<?php

namespace App\Entity;

/**
 *
 */
interface RatableInterface
{
    // List any additional methods that your InvoiceBundle
    // will need to access on the subject so that you can
    // be sure that you have access to those methods.

    public function getName(): string;
}