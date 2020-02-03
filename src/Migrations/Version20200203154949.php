<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200203154949 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE client.signup_application_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE client.signup_application (
            id INT NOT NULL,
            name VARCHAR(255) DEFAULT NULL,
            email VARCHAR(127) DEFAULT NULL,
            password VARCHAR(63) DEFAULT NULL,
            showname VARCHAR(255) DEFAULT NULL,
            age SMALLINT DEFAULT NULL,
            gender VARCHAR(255) CHECK(gender IN (\'man\', \'woman\')) DEFAULT NULL,
            created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL,
            updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL,
            PRIMARY KEY(id)
        )');
        $this->addSql('COMMENT ON COLUMN client.signup_application.gender IS \'(DC2Type:GenderType)\'');
        $this->addSql('ALTER TABLE client.client ADD CONSTRAINT FK_D8FD947960EE2EA9 FOREIGN KEY (signup_application_id) REFERENCES client.signup_application (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE client.client DROP CONSTRAINT FK_D8FD947960EE2EA9');
        $this->addSql('DROP SEQUENCE client.signup_application_id_seq CASCADE');
        $this->addSql('DROP TABLE client.signup_application');
    }
}
