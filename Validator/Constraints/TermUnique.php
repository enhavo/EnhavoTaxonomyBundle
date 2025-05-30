<?php

/*
 * This file is part of the enhavo package.
 *
 * (c) WE ARE INDEED GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Enhavo\Bundle\TaxonomyBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class TermUnique extends Constraint
{
    public $message = 'term.validation.term_unique.message';
    public $translationDomain = 'EnhavoTaxonomyBundle';

    /**
     * @return string
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
