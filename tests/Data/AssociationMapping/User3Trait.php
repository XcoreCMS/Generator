<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * User3Trait
 *
 */
trait User3Trait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Group")
     * @ORM\JoinTable(name="user3trait_group",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user3trait_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="group_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $groups;

    /**
     * Generated Constructor
     */
    public function generatedConstructor(): void
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Add group
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Group $group
     *
     * @return User3Trait
     */
    public function addGroup(\Xcore\Generator\Tests\Data\AssociationMapping\Group $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Group $group
     */
    public function removeGroup(\Xcore\Generator\Tests\Data\AssociationMapping\Group $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups(): \Doctrine\Common\Collections\Collection
    {
        return $this->groups;
    }
}

