<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Vespolina\PartnerBundle\Model\Partner;
use Symfony\Component\Form\AbstractType;

class QuickCustomerType extends AbstractType
{
    public function getName()
    {
        return 'quick_customer';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personalDetails', new PersonalDetailsType())
            ->add('primaryContact', new SimpleContactType())
            ->add('address', new AddressType(), array(
                'property_path'	=> false,
            ))
           ;
    }
}