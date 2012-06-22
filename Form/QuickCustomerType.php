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

class QuickCustomerType extends AbstractType
{
    /**
     * @var string
     */
    private $dataClass;

    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    public function getName()
    {
        return 'quick_customer';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personalDetails', 'vespolina.partner.personal_details_type')
            ->add('primaryContact', 'vespolina.partner.simple_contact_type')
            ->add('address', 'vespolina.partner.address_type', array(
                'property_path'	=> false,
            ))
           ;
    }

    public function getDefaultOptions(array $options = array())
    {
        return array(
            'data_class' => $this->dataClass,
        );
    }
}