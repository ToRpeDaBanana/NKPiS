<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630102303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE economuc_activity (id INT AUTO_INCREMENT NOT NULL, total INT NOT NULL, sybsidy_state_task INT NOT NULL, extra_budget INT NOT NULL, target_subsidies INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE general_inf CHANGE text text VARCHAR(400) NOT NULL');
        $this->addSql('ALTER TABLE our_achievements_table CHANGE count count SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE professional_edu ADD file VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE economuc_activity');
        $this->addSql('ALTER TABLE general_inf CHANGE text text TEXT NOT NULL');
        $this->addSql('ALTER TABLE our_achievements_table CHANGE count count VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE professional_edu DROP file');
    }
}
