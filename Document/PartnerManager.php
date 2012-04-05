<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Document;

use Vespolina\PartnerBundle\Model\PartnerInterface;

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
     * Constructor to setup the partner manager
     * 
     * @param DocumentManager $dm - Doctrine ODM DocumentManager
     * @param array $classMapping - mapping for the partner class and his embedded classes
     * @param array $partnerRoles - array with available partner roles
     */
    public function __construct(DocumentManager $dm, array $classMapping, array $partnerRoles)
    {
        $this->dm = $dm;
        
        parent::__construct($classMapping, $partnerRoles);
    }
    
    /**
     * {@inheritdoc}
     */
    public function updatePartner(PartnerInterface $partner, $andFlush = true)
    {
        $this->dm->persist($partner);
        
        if ($andFlush) {
            $this->dm->flush();
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function deletePartner(PartnerInterface $partner, $andFlush = true)
    {
        $this->dm->remove($partner);
        
        if ($andFlush) {
            $this->dm->flush();
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function findOneByPartnerId($partnerId)
    {
        $qb = $this->dm->createQueryBuilder($this->partnerClass);
        return $qb->find()->where(sprintf('partnerId = "%s"', $partnerId))->getQuery()->getSingleResult();
    }
}