<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211211143456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tet_test ALTER latitude TYPE NUMERIC(10, 7)');
        $this->addSql('ALTER TABLE tet_test ALTER longitude TYPE NUMERIC(10, 7)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE tet_test ALTER latitude TYPE NUMERIC(10, 9)');
        $this->addSql('ALTER TABLE tet_test ALTER longitude TYPE NUMERIC(10, 9)');
    }
}
