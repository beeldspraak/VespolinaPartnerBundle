<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Document;

use Vespolina\PartnerBundle\Model\OrganisationDetails as AbstractOrganisationDetails;

class BaseOrganisationDetails extends AbstractOrganisationDetails
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}