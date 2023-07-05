<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230704185101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cabinet CHANGE count count INT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD text VARCHAR(400) NOT NULL, ADD file VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE laboratories_and_workshops CHANGE count count INT NOT NULL');
        $this->addSql('ALTER TABLE question_answer ADD name_answer VARCHAR(255) DEFAULT NULL, ADD text_answer VARCHAR(1000) DEFAULT NULL, ADD date_answer DATE DEFAULT NULL, DROP whom, CHANGE file file VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE student_support CHANGE graduate_employment graduate_employment DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cabinet CHANGE count count VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment DROP text, DROP file');
        $this->addSql('ALTER TABLE laboratories_and_workshops CHANGE count count VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE question_answer ADD whom VARCHAR(255) NOT NULL, DROP name_answer, DROP text_answer, DROP date_answer, CHANGE file file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE student_support CHANGE graduate_employment graduate_employment VARCHAR(255) NOT NULL');
    }
}
