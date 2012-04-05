<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Implementation of PartnerInterface
 * 
 * @author Willem-Jan Zijderveld <willemjan@beeldspraak.com>
 */
class Partner implements PartnerInterface
{
    const INDIVIDUAL       = 'individual';
    const ORGANISATION     = 'organisation';
    
    const ROLE_CUSTOMER    = 'ROLE_CUSTOMER';
    const ROLE_EMPLOYEE    = 'ROLE_EMPLOYEE';
    const ROLE_SUPPLIER    = 'ROLE_SUPPLIER';
    
    protected $partnerId;
    protected $partnerSince;
    protected $roles;
    protected $name;
    protected $type;
    protected $currency;
    protected $language;
    protected $paymentTerms;
    protected $addresses;
    protected $primaryContact;
    protected $personalDetails;
    protected $organisationDetails;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * @inheritdoc
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @inheritdoc
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
    }
    
    /**
     * @inheritdoc
     */
    public function getPartnerSince()
    {
        return $this->partnerSince;
    }
    
    /**
     * @inheritdoc
     */
    public function setPartnerSince(\DateTime $partnerSince)
    {
        $this->partnerSince = $partnerSince;
    }

    /**
     * @inheritdoc
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @inheritdoc
     */
    public function addRole($role)
    {
        $this->roles[] = $role;
    }
    
    /**
     * @inheritdoc
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @inheritdoc
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }
    
    /**
     * @inheritdoc
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @inheritdoc
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @inheritdoc
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @inheritdoc
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @inheritdoc
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @inheritdoc
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @inheritdoc
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @inheritdoc
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @inheritdoc
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @inheritdoc
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @inheritdoc
     */
    public function addAddress($address)
    {
        $this->addresses[] = $address;
    }

    /**
     * @inheritdoc
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * @inheritdoc
     */
    public function setPrimaryContact(Contact $primaryContact)
    {
        $this->primaryContact = $primaryContact;
    }

    /**
     * @inheritdoc
     */
    public function getPersonalDetails()
    {
        return $this->personalDetails;
    }

    /**
     * @inheritdoc
     */
    public function setPersonalDetails($personalDetails)
    {
        $this->personalDetails = $personalDetails;
    }

    /**
     * @inheritdoc
     */
    public function getOrganisationDetails()
    {
        return $this->organisationDetails;
    }

    /**
     * @inheritdoc
     */
    public function setOrganisationDetails($organisationDetails)
    {
        $this->organisationDetails = $organisationDetails;
    }

}