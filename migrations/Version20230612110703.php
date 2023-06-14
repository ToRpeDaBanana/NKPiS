<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230612110703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, sub_category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE control_sov_chairman (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, days_time VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE control_sov_documents (id INT AUTO_INCREMENT NOT NULL, category_document TINYINT(1) NOT NULL, document VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE control_sov_meetings (id INT AUTO_INCREMENT NOT NULL, planned TINYINT(1) NOT NULL, date_planned DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE control_sov_other (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, category_us VARCHAR(255) NOT NULL, coop TINYINT(1) NOT NULL, job_title_us VARCHAR(255) NOT NULL, job_loc VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, notes VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE control_sov_past_meetings (id INT AUTO_INCREMENT NOT NULL, date_past DATE NOT NULL, agenda VARCHAR(255) NOT NULL, protocol VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department_contacts (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, day_week VARCHAR(255) NOT NULL, time VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE general_inf (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, first_text VARCHAR(255) NOT NULL, first_photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', second_text VARCHAR(255) NOT NULL, second_photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', file VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE our_achievements (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, first_text VARCHAR(255) NOT NULL, title_table VARCHAR(255) NOT NULL, second_text VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE our_achievements_table (id INT AUTO_INCREMENT NOT NULL, championship VARCHAR(255) NOT NULL, count SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paid_edu_serv (id INT AUTO_INCREMENT NOT NULL, parent_folder LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', procedur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_gallery (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, main_photo VARCHAR(255) NOT NULL, photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teachers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, category_job_title VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page CHANGE title title VARCHAR(255) NOT NULL, CHANGE text text VARCHAR(255) NOT NULL, CHANGE tag tag VARCHAR(255) NOT NULL, CHANGE category category VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE control_sov_chairman');
        $this->addSql('DROP TABLE control_sov_documents');
        $this->addSql('DROP TABLE control_sov_meetings');
        $this->addSql('DROP TABLE control_sov_other');
        $this->addSql('DROP TABLE control_sov_past_meetings');
        $this->addSql('DROP TABLE department_contacts');
        $this->addSql('DROP TABLE general_inf');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE our_achievements');
        $this->addSql('DROP TABLE our_achievements_table');
        $this->addSql('DROP TABLE paid_edu_serv');
        $this->addSql('DROP TABLE photo_gallery');
        $this->addSql('DROP TABLE teachers');
        $this->addSql('ALTER TABLE page CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE text text VARCHAR(255) DEFAULT NULL, CHANGE tag tag VARCHAR(255) DEFAULT NULL, CHANGE category category VARCHAR(255) DEFAULT NULL');
    }
}
