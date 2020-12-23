<?php
namespace Identimo;

use Doctrine\ORM\Id\AbstractIdGenerator;
use Doctrine\ORM\EntityManager;

class UniqueStringGenerator extends AbstractIdGenerator{
    public function generate(EntityManager $em, $entity)
    {
        // Your logic here
    }
}