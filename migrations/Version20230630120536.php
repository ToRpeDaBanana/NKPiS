<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630120536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inf_pay (id INT AUTO_INCREMENT NOT NULL, inn VARCHAR(255) NOT NULL, kpp VARCHAR(255) NOT NULL, okato VARCHAR(255) NOT NULL, ogrn VARCHAR(255) NOT NULL, oktmo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment_account (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, otdel VARCHAR(255) DEFAULT NULL, number_payment VARCHAR(255) NOT NULL, number_korr VARCHAR(255) NOT NULL, bik VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal_account (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, fky VARCHAR(255) DEFAULT NULL, number VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE general_inf CHANGE text text VARCHAR(400) NOT NULL');
        $this->addSql('ALTER TABLE our_achievements_table CHANGE count count SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE professional_edu ADD file VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inf_pay');
        $this->addSql('DROP TABLE payment_account');
        $this->addSql('DROP TABLE personal_account');
        $this->addSql('ALTER TABLE general_inf CHANGE text text TEXT NOT NULL');
        $this->addSql('ALTER TABLE our_achievements_table CHANGE count count VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE professional_edu DROP file');
    }
}
