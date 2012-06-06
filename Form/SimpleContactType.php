<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Form;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;

class SimpleContactType extends AbstractType
{
    public function getName()
    {
        return 'simple_contact';
    }
    
    public function buildForm(FormBuilder $formBuilder, array $options)
    {
        $formBuilder
            ->add('email', null, array('required' => true))
           ;
    }
    
    public function getDefaultOptions(array $options = array())
    {
        return array(
            // @TODO: Fix MongoDB dependency
            'data_class' => 'Vespolina\PartnerBundle\Document\Contact',
        );
    }
}