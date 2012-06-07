<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class PersonalDetailsType extends AbstractType
{
    public function getName()
    {
        return 'personal_details';
    }
    
    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        $formBuilder
            ->add('firstname')
            ->add('lastname')
           ;
    }
    
    public function getDefaultOptions(array $options = array())
    {
        return array(
            // @TODO: Fix MongoDB dependency
            'data_class' => 'Vespolina\PartnerBundle\Document\PersonalDetails',
        );
    }
}