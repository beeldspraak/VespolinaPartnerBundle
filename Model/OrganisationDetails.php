<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\PartnerBundle\Model;

class OrganisationDetails implements OrganisationDetailsInterface
{
    protected $name;
    protected $category;
    protected $employees;
    
	/**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->category;
    }

	/**
     * {@inheritdoc}
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

	/**
     * {@inheritdoc}
     */
    public function getEmployees()
    {
        return $this->employees;
    }

	/**
     * {@inheritdoc}
     */
    public function setEmployees($employees)
    {
        $this->employees = $employees;
    }

	
        
}