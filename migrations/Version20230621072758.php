<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230621072758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE teachers_document (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacan_for_adm_title (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE control_sov_chairman ADD job_loc VARCHAR(255) NOT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE control_sov_documents CHANGE document document VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE control_sov_meetings CHANGE planned planned VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE general_inf DROP category, CHANGE text text VARCHAR(400) NOT NULL');
        $this->addSql('ALTER TABLE holidays ADD title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE important_know CHANGE file file VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE teachers ADD priem VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE teachers_document');
        $this->addSql('DROP TABLE vacan_for_adm_title');
        $this->addSql('ALTER TABLE control_sov_chairman DROP job_loc, CHANGE photo photo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE control_sov_documents CHANGE document document LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE control_sov_meetings CHANGE planned planned TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE general_inf ADD category VARCHAR(255) NOT NULL, CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE holidays DROP title');
        $this->addSql('ALTER TABLE important_know CHANGE file file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE teachers DROP priem');
    }
}
