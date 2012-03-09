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
 * Abstract implementation of Partner
 * 
 * @author Willem-Jan Zijderveld <willemjan@beeldspraak.com>
 */
class Partner implements PartnerInterface
{
	const INDIVIDUAL 	= 'individual';
	const ORGANISATION 	= 'organisation';
	
	const ROLE_CUSTOMER = 'customer';
	const ROLE_EMPLOYEE	= 'employee';
	const ROLE_SUPPLIER	= 'supplier';
	
	protected $partnerId;
	protected $partnerSince;
	protected $role;
	protected $shortName;
	protected $longName;
	protected $type;
	protected $valuta;
	protected $language;
	protected $paymentTerms;
	protected $paymentType;
	protected $email;
	protected $phone;
	protected $addresses;
	protected $contacts;
	protected $personalDetails;
	protected $organisationDetails;

	public function __construct()
	{
		$this->addresses = new ArrayCollection();
		$this->contacts = new ArrayCollection();
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
	public function setPartnerSince(DateTime $partnerSince)
	{
		$this->partnerSince = $partnerSince;
	}

	/**
	 * @return string $role
	 */
	public function getRole()
	{
		return $this->role;
	}

	/**
	 * @param string $role
	 */
	public function setRole($role)
	{
		$this->role = $role;
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
	 * @return the $longName
	 */
	public function getLongName()
	{
		return $this->longName;
	}

	/**
	 * @param field_type $longName
	 */
	public function setLongName($longName)
	{
		$this->longName = $longName;
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
	public function getValuta()
	{
		return $this->valuta;
	}

	/**
	 * @inheritdoc
	 */
	public function setValuta($valuta)
	{
		$this->valuta = $valuta;
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
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @inheritdoc
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @inheritdoc
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @inheritdoc
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
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
	public function getContacts()
	{
		return $this->contacts;
	}

	/**
	 * @inheritdoc
	 */
	public function setContacts($contacts)
	{
		$this->contacts = $contacts;
	}

	/**
	 * @inheritdoc
	 */
	public function addContact($contact)
	{
		$this->contacts[] = $contact;
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