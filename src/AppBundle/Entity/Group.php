<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\Group as BaseGroup;

/**
 * Group
 *
 * @ORM\Table(name="group")
 * @ORM\Entity
 */
class Group extends BaseGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	
	public function __construct(){
		parent::__construct();
	}
}
