<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200203154314 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA client');
        $this->addSql('CREATE SEQUENCE client.client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE client.client (
            id INT NOT NULL,
            signup_application_id INT NOT NULL,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(127) NOT NULL,
            password VARCHAR(63) NOT NULL,
            showname VARCHAR(255) NOT NULL,
            age SMALLINT NOT NULL,
            gender VARCHAR(255) CHECK(gender IN (\'man\', \'woman\')) NOT NULL,
            created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL,
            updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL,
            PRIMARY KEY(id)
        )');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D8FD947960EE2EA9 ON client.client (signup_application_id)');
        $this->addSql('COMMENT ON COLUMN client.client.gender IS \'(DC2Type:GenderType)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP SEQUENCE client.client_id_seq CASCADE');
        $this->addSql('DROP TABLE client.client');
        $this->addSql('DROP SCHEMA client');
    }
}
