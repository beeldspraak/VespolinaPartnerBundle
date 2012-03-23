<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Model;

class PersonalDetails implements PersonalDetailsInterface
{
    protected $nationalIdentificationNumber;
    
	/**
	 * {@inheritdoc}
	 */
    public function getNationalIdentificationNumber()
    {
       return $this->nationalIdentificationNumber;
    }

	/**
	 * {@inheritdoc}
	 */
    public function setNationalIdentificationNumber($nationalIdentificationNumber)
    {
        $this->nationalIdentificationNumber = $nationalIdentificationNumber;
    }

}