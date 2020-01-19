<?php


namespace App\Command\Test;


use App\Enum\Environment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Команда для создания тестовой схемы БД
 *
 * @package App\Command\Test
 */
class CreateTestDbCommand extends Command
{
    /** @var KernelInterface */
    private $kernel;

    /** @var EntityManagerInterface */
    private $em;

    /** @var string */
    private $databaseName;

    public function __construct(KernelInterface $kernel, EntityManagerInterface $em, string $databaseName)
    {
        parent::__construct();
        $this->kernel = $kernel;
        $this->em = $em;
        $this->databaseName = $databaseName;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this
            ->setName('app:test:create-test-db')
            ->setDescription('Создание тестовой базы');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        if ($this->kernel->getEnvironment() !== Environment::TEST) {
            return;
        }

        $this->em->getConnection()->exec("CREATE SCHEMA IF NOT EXISTS {$this->databaseName}");
    }
}