<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Form;

use Vespolina\PartnerBundle\Model\Partner;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilder;

class QuickCustomerType extends AbstractType
{
    public function getName()
    {
        return 'quick_customer';
    }
    
    public function buildForm(FormBuilder $formBuilder, array $options)
    {
        $formBuilder
            ->add('personalDetails', new PersonalDetailsType())
            ->add('address', new AddressType(), array(
                'property_path'	=> false,
            ))
           ;
    }
}