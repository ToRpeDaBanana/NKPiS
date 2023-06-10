<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230610155055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page CHANGE title title VARCHAR(255) NOT NULL, CHANGE text text VARCHAR(255) NOT NULL, CHANGE tag tag VARCHAR(255) NOT NULL, CHANGE category category VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE text text VARCHAR(255) DEFAULT NULL, CHANGE tag tag VARCHAR(255) DEFAULT NULL, CHANGE category category VARCHAR(255) DEFAULT NULL');
    }
}
