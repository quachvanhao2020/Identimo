<?php
declare(strict_types=1);

use Doctrine\Common\Collections\ArrayCollection;
use Identimo\Orm;
use PHPUnit\Framework\TestCase;
use \Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Helper\HelperSet;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Exchamo\Expense;
use Exchamo\Income;
use Exchamo\Money;
use Identimo\Admin;
use Identimo\Permission;
use Identimo\PermissionCode;
use Identimo\User;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\NullOutput;
use YPHP\Entity;

final class OrmTest extends TestCase
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var EntityManager
     */
    protected $em;

    protected function setUp(): void
    {
        $em = Orm::getEntityManager();
        $helperSet = \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
        $app = ConsoleRunner::createApplication($helperSet);
        $app->setAutoExit(false);
        $this->em = $em;
        $this->app = $app;
        try {
            $app->run(new StringInput("orm:schema-tool:update --force"));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function tearDown(): void {
        //$this->app->run(new StringInput("orm:schema-tool:drop --full-database --force"));
    }

    public function testEmpty(): void
    {
        $this->assertInstanceOf(EntityManager::class,$this->em);
    }
    
    public function testUser(): void
    {
        $em = $this->em;
        $user = new User();
        $user->setUsername('username');
        $user->setPassword("password");
        $user->setDateCreated(new DateTime());
        $permission = new Permission();
        $codes = new ArrayCollection([
            (new PermissionCode())->setCode('code'),
        ]);
        $permission->setCodes($codes);
        $user->setPermission($permission);
        $em->persist($user);
        $em->flush();
        $repository = $em->getRepository(User::class);
        $_user = $repository->find($user->getId());
        $this->assertEquals($user,$_user);
    }

    public function testAdmin(): void
    {
        $em = $this->em;
        $user = new Admin();
        $user->setUsername('username');
        $user->setPassword("password");
        $user->setDateCreated(new DateTime());
        $permission = new Permission();
        $codes = new ArrayCollection([
            (new PermissionCode())->setCode('code'),
        ]);
        $permission->setCodes($codes);
        $user->setPermission($permission);
        $em->persist($user);
        $em->flush();
        $repository = $em->getRepository(Admin::class);
        $_user = $repository->find($user->getId());
        $this->assertEquals($user,$_user);
    }

}