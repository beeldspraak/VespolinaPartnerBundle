<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Model;

interface PersonalDetailsInterface
{
    /**
     * Set national identification number
     * @param string $nationalIdentificationNumber
     */
    function setNationalIdentificationNumber($nationalIdentificationNumber);
    
    /**
     * Get national identification number
     * @return string
     */
    function getNationalIdentificationNumber();
}