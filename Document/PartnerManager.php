<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Document;

use Vespolina\PartnerBundle\Model\PartnerManager as BasePartnerManager;
use Vespolina\PartnerBundle\Model\Partner as AbstractPartner;

class PartnerManager extends BasePartnerManager
{
	/**
	 * Doctrine MongoDB DocumentManager
	 * @var \Doctrine\ODM\MongoDB\DocumentManager
	 */
	protected $dm;
	
	/**
	 * Dcotrine MongoDB DocumentRepository
	 * 
	 * @var \Vespolina\PartnerBundle\Document\PartnerRepository
	 */
	protected $repo;
	
	/**
	 * @var BasePartner $partnerClass
	 */
	protected $partnerClass;
	
	public function __construct(Container $container, $partnerClass)
	{
		$this->dm 			= $container->get('doctrine.odm.mongodb.default_document_manager');
		$this->partnerClass	= $partnerClass;
		
		$this->repo 		= $this->dm->getRepository('Partner');
	}
	
	public function createPartner($role = Partner::ROLE_CUSTOMER, $type = Partner::INDIVIDUAL)
	{
		/* @var $partner Partner */
		$partner = new $this->partnerClass;
		$partner->setRole($role);
		$partner->setType($type);
	}

	public function findByPartnerId($partnerId)
	{
		return $this->repo->findOneBy(array('partnerId' => $partnerId));
	}
}