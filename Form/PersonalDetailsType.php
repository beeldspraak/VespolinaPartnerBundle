<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PersonalDetailsType extends AbstractType
{
    public function getName()
    {
        return 'personal_details';
    }
    
    public function buildForm(FormBuilder $formBuilder, array $options)
    {
        $formBuilder
            ->add('initials')
            ->add('prefix')
            ->add('lastname')
           ;
    }
    
    public function getDefaultOptions(array $options = array())
    {
        return array(
            'data_class' => 'Vespolina\PartnerBundle\Document\PersonalDetails',
        );
    }
}