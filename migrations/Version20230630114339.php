<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630114339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_support (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(600) NOT NULL, graduates VARCHAR(255) NOT NULL, graduate_employment VARCHAR(255) NOT NULL, boys INT NOT NULL, girls INT NOT NULL, ovz INT NOT NULL, actual_employment INT NOT NULL, actual_employment_prof INT NOT NULL, continue_edu_vyz INT NOT NULL, continue_edu_spo INT NOT NULL, other INT NOT NULL, vs_rf INT NOT NULL, dtiz INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE general_inf CHANGE text text VARCHAR(400) NOT NULL');
        $this->addSql('ALTER TABLE our_achievements_table CHANGE count count SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE professional_edu ADD file VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE student_support');
        $this->addSql('ALTER TABLE general_inf CHANGE text text TEXT NOT NULL');
        $this->addSql('ALTER TABLE our_achievements_table CHANGE count count VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE professional_edu DROP file');
    }
}
