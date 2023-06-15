<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230615082836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE about_centre (id INT AUTO_INCREMENT NOT NULL, text_one VARCHAR(255) NOT NULL, title VARCHAR(255) DEFAULT NULL, text_two VARCHAR(255) DEFAULT NULL, senior_foreman VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, text_tree VARCHAR(255) DEFAULT NULL, photo LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acceptance_check_digits (id INT AUTO_INCREMENT NOT NULL, years_title VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acceptance_check_digits_table (id INT AUTO_INCREMENT NOT NULL, class VARCHAR(255) NOT NULL, basis VARCHAR(255) NOT NULL, speciality VARCHAR(255) NOT NULL, training_period VARCHAR(255) NOT NULL, cpc INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE banners_vacancies (id INT AUTO_INCREMENT NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar_study (id INT AUTO_INCREMENT NOT NULL, file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE call_schedule (id INT AUTO_INCREMENT NOT NULL, first_pair VARCHAR(255) NOT NULL, second_pair VARCHAR(255) NOT NULL, third_pair VARCHAR(255) NOT NULL, fourth_pair VARCHAR(255) NOT NULL, fifth_pair VARCHAR(255) NOT NULL, sixth_pair VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE college_admission (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, documents_rf VARCHAR(255) NOT NULL, documents_foreign VARCHAR(255) NOT NULL, text_two VARCHAR(255) NOT NULL, cost_education VARCHAR(255) NOT NULL, text_three VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE college_admission_title (id INT AUTO_INCREMENT NOT NULL, photo VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, schedule VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demo_exam (id INT AUTO_INCREMENT NOT NULL, file VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE driving_directions (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employ_monitoring (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entrance_tests (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE for_emloy_text (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE for_employ_table (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, speciality VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE help_agraduate (id INT AUTO_INCREMENT NOT NULL, text_one VARCHAR(255) NOT NULL, text_two VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE holidays (id INT AUTO_INCREMENT NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE important_know (id INT AUTO_INCREMENT NOT NULL, file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', link VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inter_cert_schedule (id INT AUTO_INCREMENT NOT NULL, file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medical_exam (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, monday VARCHAR(255) DEFAULT NULL, tuesday VARCHAR(255) DEFAULT NULL, wednesday VARCHAR(255) DEFAULT NULL, trursday VARCHAR(255) DEFAULT NULL, friday VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medical_exam_adm (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medical_service_document (id INT AUTO_INCREMENT NOT NULL, treaty LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', vaccination LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news_centre (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, date DATE NOT NULL, text_one VARCHAR(255) NOT NULL, photo LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', text_two VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE normative_documents (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE olympiads (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE open_doors_table (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, address VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, register VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oraganization_medical_link (id INT AUTO_INCREMENT NOT NULL, important_know VARCHAR(255) NOT NULL, recommendations VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passing_scores (id INT AUTO_INCREMENT NOT NULL, class VARCHAR(255) NOT NULL, speciality VARCHAR(255) NOT NULL, minimal_ball VARCHAR(255) NOT NULL, training_period VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prof_document (id INT AUTO_INCREMENT NOT NULL, collective_agreement VARCHAR(255) NOT NULL, agreement_change VARCHAR(255) DEFAULT NULL, inform_about VARCHAR(255) DEFAULT NULL, commission_documents VARCHAR(255) DEFAULT NULL, implementation_documents VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE psychological_support (id INT AUTO_INCREMENT NOT NULL, text_one VARCHAR(255) NOT NULL, text_two VARCHAR(255) DEFAULT NULL, sub_title VARCHAR(255) DEFAULT NULL, text_tree VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_answer (id INT AUTO_INCREMENT NOT NULL, whom VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, text_question VARCHAR(255) NOT NULL, file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE schedule (id INT AUTO_INCREMENT NOT NULL, semester VARCHAR(255) NOT NULL, file LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialties_professions (id INT AUTO_INCREMENT NOT NULL, class VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE table_med_org (id INT AUTO_INCREMENT NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teachers_contests (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, file VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transfer_college (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, sub_title VARCHAR(255) DEFAULT NULL, text_instruction VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transfer_within_college (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, sub_title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacancies (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacancies_teachers (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacanncies_for_admission (id INT AUTO_INCREMENT NOT NULL, course VARCHAR(255) NOT NULL, professio_specialty VARCHAR(255) NOT NULL, based_training_program VARCHAR(255) NOT NULL, count_budget_places VARCHAR(255) DEFAULT NULL, count_pay_places VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE veterans_labor (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, photo LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE veterans_labor_document (id INT AUTO_INCREMENT NOT NULL, file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE videos_days_open_doors (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, title VARCHAR(255) DEFAULT NULL, link VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE control_sov_documents CHANGE document document LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE general_inf ADD category VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE first_photo first_photo LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE second_photo second_photo LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE file file LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE teachers CHANGE photo photo VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE about_centre');
        $this->addSql('DROP TABLE acceptance_check_digits');
        $this->addSql('DROP TABLE acceptance_check_digits_table');
        $this->addSql('DROP TABLE banners_vacancies');
        $this->addSql('DROP TABLE calendar_study');
        $this->addSql('DROP TABLE call_schedule');
        $this->addSql('DROP TABLE college_admission');
        $this->addSql('DROP TABLE college_admission_title');
        $this->addSql('DROP TABLE demo_exam');
        $this->addSql('DROP TABLE driving_directions');
        $this->addSql('DROP TABLE employ_monitoring');
        $this->addSql('DROP TABLE entrance_tests');
        $this->addSql('DROP TABLE for_emloy_text');
        $this->addSql('DROP TABLE for_employ_table');
        $this->addSql('DROP TABLE help_agraduate');
        $this->addSql('DROP TABLE holidays');
        $this->addSql('DROP TABLE important_know');
        $this->addSql('DROP TABLE inter_cert_schedule');
        $this->addSql('DROP TABLE medical_exam');
        $this->addSql('DROP TABLE medical_exam_adm');
        $this->addSql('DROP TABLE medical_service_document');
        $this->addSql('DROP TABLE news_centre');
        $this->addSql('DROP TABLE normative_documents');
        $this->addSql('DROP TABLE olympiads');
        $this->addSql('DROP TABLE open_doors_table');
        $this->addSql('DROP TABLE oraganization_medical_link');
        $this->addSql('DROP TABLE passing_scores');
        $this->addSql('DROP TABLE prof_document');
        $this->addSql('DROP TABLE psychological_support');
        $this->addSql('DROP TABLE question_answer');
        $this->addSql('DROP TABLE schedule');
        $this->addSql('DROP TABLE specialties_professions');
        $this->addSql('DROP TABLE table_med_org');
        $this->addSql('DROP TABLE teachers_contests');
        $this->addSql('DROP TABLE transfer_college');
        $this->addSql('DROP TABLE transfer_within_college');
        $this->addSql('DROP TABLE vacancies');
        $this->addSql('DROP TABLE vacancies_teachers');
        $this->addSql('DROP TABLE vacanncies_for_admission');
        $this->addSql('DROP TABLE veterans_labor');
        $this->addSql('DROP TABLE veterans_labor_document');
        $this->addSql('DROP TABLE videos_days_open_doors');
        $this->addSql('ALTER TABLE control_sov_documents CHANGE document document LONGTEXT NOT NULL COMMENT \'	(DC2Type:array)\'');
        $this->addSql('ALTER TABLE general_inf DROP category');
        $this->addSql('ALTER TABLE news CHANGE first_photo first_photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE second_photo second_photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE file file LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE teachers CHANGE photo photo VARCHAR(255) NOT NULL');
    }
}
