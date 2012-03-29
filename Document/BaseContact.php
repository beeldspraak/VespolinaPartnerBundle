<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Document;

use Vespolina\PartnerBundle\Model\Contact as AbstractContact;

abstract class BaseContact extends AbstractContact
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}