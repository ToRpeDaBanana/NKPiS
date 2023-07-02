<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630080654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE documents (id INT AUTO_INCREMENT NOT NULL, title_category VARCHAR(255) NOT NULL, title_document VARCHAR(255) NOT NULL, document VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infor_realize_dop_edu_date (id INT AUTO_INCREMENT NOT NULL, data_revevance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inform_of_realize_edu_program (id INT AUTO_INCREMENT NOT NULL, normativ_edu VARCHAR(255) NOT NULL, budget VARCHAR(255) NOT NULL, contract VARCHAR(255) NOT NULL, count_foreign VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inform_realize_dop_edu (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, type_activity VARCHAR(255) NOT NULL, name_association VARCHAR(255) NOT NULL, group_name VARCHAR(255) NOT NULL, program_category VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, fio_teacher VARCHAR(255) DEFAULT NULL, training_free VARCHAR(255) NOT NULL, duration_training VARCHAR(255) DEFAULT NULL, form_lesson VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE infor_realize_dop_edu_date');
        $this->addSql('DROP TABLE inform_of_realize_edu_program');
        $this->addSql('DROP TABLE inform_realize_dop_edu');
    }
}
