<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * (c) Daniel Kucharski <daniel@xerias.be>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class VespolinaPartnerExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        
        if (!in_array(strtolower($config['db_driver']), array('mongodb'))) {
            throw new \InvalidArgumentException(sprintf('Invalid db driver "%s".', $config['db_driver']));
        }
        $loader->load(sprintf('%s.xml', $config['db_driver']));
        
        if (isset($config['classMapping']) && is_array($config['classMapping']))
            $this->configureClassMapping($container, $config['classMapping']);
    }
    
    protected function configureClassMapping(ContainerBuilder $container, array $classMapping)
    {
        foreach ($classMapping as $name => $class) {
            if (!class_exists($class))
                throw new InvalidConfigurationException(sprintf("Class '%s' not found for model '%s'", $class, $name));
                
            switch ($name) {
                case 'partner':
                    $container->setParameter('vespolina_partner.model.partner.class', $class);
                    break;
                case 'partnerContact':
                    $container->setParameter('vespolina_partner.model.partner_contact.class', $class);
                    break;
                case 'partnerAddress':
                    $container->setParameter('vespolina_partner.model.partner_address.class', $class);
                    break;
                case 'partnerPersonalDetails':
                    $container->setParameter('vespolina_partner.model.partner_personal_details.class', $class);
                    break;
                case 'partnerOrganisationDetails':
                    $container->setParameter('vespolina_partner.model.partner_organisation_details.class', $class);
                    break;
            }
        }
    }
}