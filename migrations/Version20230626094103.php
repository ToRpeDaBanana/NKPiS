<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230626094103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE slider_main (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slider_reclama (id INT AUTO_INCREMENT NOT NULL, link VARCHAR(255) DEFAULT NULL, photo_pc VARCHAR(255) NOT NULL, photo_mobile VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE veterans_labor_document CHANGE file file VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE slider_main');
        $this->addSql('DROP TABLE slider_reclama');
        $this->addSql('ALTER TABLE veterans_labor_document CHANGE file file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
    }
}
