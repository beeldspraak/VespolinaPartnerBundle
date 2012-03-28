<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Document;

use Doctrine\ODM\MongoDB\DocumentManager;

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
     * @var BasePartner $partnerClass
     */
    protected $partnerClass;
    
    /**
     * @var array $partnerRoles
     */
    protected $partnerRoles;
    
    public function __construct(DocumentManager $dm, $partnerClass, array $partnerRoles)
    {
        $this->dm            = $dm;
        $this->partnerClass  = $partnerClass;
        $this->partnerRoles  = $partnerRoles;
        
        parent::__construct($partnerClass, $partnerRoles);
    }
    
    public function findOneByPartnerId($partnerId)
    {
        $qb = $this->dm->createQueryBuilder($this->partnerClass);
        return $qb->find()->where(sprintf('partnerId = "%s"', $partnerId))->getQuery()->getSingleResult();
    }
}