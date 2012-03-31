<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Tests\Fixtures\Document;

use Vespolina\PartnerBundle\Document\BasePartner;

class Partner extends BasePartner
{
    protected $dateOfBirth;
    
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
}