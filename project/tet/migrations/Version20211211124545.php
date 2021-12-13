<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211211124545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE tet_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE tet_test_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tet_test (id INT NOT NULL, ip VARCHAR(15) NOT NULL, coutry_code VARCHAR(2) NOT NULL, country_name VARCHAR(50) NOT NULL, region_name VARCHAR(30) NOT NULL, zip VARCHAR(20) DEFAULT NULL, latitude NUMERIC(10, 9) NOT NULL, longitude NUMERIC(10, 9) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE tet');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE tet_test_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE tet_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tet (id SERIAL NOT NULL, ip VARCHAR(15) NOT NULL, country_code VARCHAR(2) NOT NULL, country_name VARCHAR(50) NOT NULL, region_name VARCHAR(30) NOT NULL, zip VARCHAR(20) DEFAULT NULL, latitude NUMERIC(9, 6) NOT NULL, longitude NUMERIC(9, 6) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE tet_test');
    }
}
