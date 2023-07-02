<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230702080623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE access_is (id INT AUTO_INCREMENT NOT NULL, accsess VARCHAR(255) NOT NULL, speed VARCHAR(255) NOT NULL, provider VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE available_environment (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(800) NOT NULL, photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', text_two VARCHAR(800) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cabinet (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, count VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar_training_schedule (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dop_edu (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE economuc_activity (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, sybsidy_state_task INT NOT NULL, extra_budget INT NOT NULL, target_subsidies INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE economuc_activity_document (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE edu_and_production_complex (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(1000) NOT NULL, photo LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE edu_standards (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food (id INT AUTO_INCREMENT NOT NULL, file_contract VARCHAR(255) NOT NULL, file_dogovor VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inf_pay (id INT AUTO_INCREMENT NOT NULL, inn VARCHAR(255) NOT NULL, kpp VARCHAR(255) NOT NULL, okato VARCHAR(255) NOT NULL, ogrn VARCHAR(255) NOT NULL, oktmo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inform_about_work_programs (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inform_medical (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inform_result_priem (id INT AUTO_INCREMENT NOT NULL, specialties VARCHAR(255) NOT NULL, budget VARCHAR(255) NOT NULL, contract VARCHAR(255) NOT NULL, avg_ball VARCHAR(255) NOT NULL, recovery VARCHAR(255) NOT NULL, deductions VARCHAR(255) NOT NULL, translation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instructions_org_distance (id INT AUTO_INCREMENT NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE international_coop (id INT AUTO_INCREMENT NOT NULL, inform_contract VARCHAR(255) DEFAULT NULL, inform_dogovor VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE labor_protection (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratories_and_workshops (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, count VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE libraries (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE license_edu (id INT AUTO_INCREMENT NOT NULL, series VARCHAR(255) NOT NULL, number VARCHAR(255) NOT NULL, reg_number VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE means_edu_upbringing (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment_account (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, otdel VARCHAR(255) DEFAULT NULL, number_payment VARCHAR(255) NOT NULL, number_korr VARCHAR(255) NOT NULL, bik VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal_account (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, fky VARCHAR(255) DEFAULT NULL, number VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal_data_protection (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professional_edu (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE public_report (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sports_facilities (id INT AUTO_INCREMENT NOT NULL, address VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_support (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(1000) NOT NULL, graduates VARCHAR(255) NOT NULL, graduate_employment VARCHAR(255) NOT NULL, boys INT NOT NULL, girls INT NOT NULL, ovz INT NOT NULL, actual_employment INT NOT NULL, actual_employment_prof INT NOT NULL, continue_edu_vyz INT NOT NULL, continue_edu_spo INT NOT NULL, other INT NOT NULL, vs_rf INT NOT NULL, dtiz INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE working_services (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, day VARCHAR(255) NOT NULL, time VARCHAR(255) NOT NULL, special VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE about_centre CHANGE text_two text_two VARCHAR(800) DEFAULT NULL, CHANGE text_tree text_tree VARCHAR(800) DEFAULT NULL');
        $this->addSql('ALTER TABLE acceptance_check_digits CHANGE text text VARCHAR(800) NOT NULL');
        $this->addSql('ALTER TABLE college_admission CHANGE text text VARCHAR(1000) NOT NULL, CHANGE documents_rf documents_rf VARCHAR(800) NOT NULL, CHANGE documents_foreign documents_foreign VARCHAR(800) NOT NULL, CHANGE text_two text_two VARCHAR(1000) NOT NULL, CHANGE cost_education cost_education VARCHAR(300) NOT NULL, CHANGE text_three text_three VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE college_admission_title CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE driving_directions CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE entrance_tests CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE for_emloy_text CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE general_inf CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE help_agraduate CHANGE text_one text_one VARCHAR(1000) NOT NULL, CHANGE text_two text_two VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE medical_exam_adm CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE first_text first_text VARCHAR(1000) NOT NULL, CHANGE second_text second_text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE news_centre CHANGE text_one text_one VARCHAR(1000) NOT NULL, CHANGE text_two text_two VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE normative_documents CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE open_doors_table CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE oraganization_medical_link CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE our_achievements CHANGE first_text first_text VARCHAR(1000) NOT NULL, CHANGE second_text second_text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE psychological_support CHANGE text_one text_one VARCHAR(1000) NOT NULL, CHANGE text_two text_two VARCHAR(1000) DEFAULT NULL, CHANGE text_tree text_tree VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE question_answer CHANGE text_question text_question VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE specialties_professions CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE transfer_college CHANGE text text VARCHAR(1000) NOT NULL, CHANGE text_instruction text_instruction VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE transfer_within_college CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE vacancies CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE vacancies_teachers CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE veterans_labor CHANGE text text VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE videos_days_open_doors CHANGE text text VARCHAR(1000) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE access_is');
        $this->addSql('DROP TABLE available_environment');
        $this->addSql('DROP TABLE cabinet');
        $this->addSql('DROP TABLE calendar_training_schedule');
        $this->addSql('DROP TABLE curriculum');
        $this->addSql('DROP TABLE dop_edu');
        $this->addSql('DROP TABLE economuc_activity');
        $this->addSql('DROP TABLE economuc_activity_document');
        $this->addSql('DROP TABLE edu_and_production_complex');
        $this->addSql('DROP TABLE edu_standards');
        $this->addSql('DROP TABLE food');
        $this->addSql('DROP TABLE inf_pay');
        $this->addSql('DROP TABLE inform_about_work_programs');
        $this->addSql('DROP TABLE inform_medical');
        $this->addSql('DROP TABLE inform_result_priem');
        $this->addSql('DROP TABLE instructions_org_distance');
        $this->addSql('DROP TABLE international_coop');
        $this->addSql('DROP TABLE labor_protection');
        $this->addSql('DROP TABLE laboratories_and_workshops');
        $this->addSql('DROP TABLE libraries');
        $this->addSql('DROP TABLE license_edu');
        $this->addSql('DROP TABLE means_edu_upbringing');
        $this->addSql('DROP TABLE payment_account');
        $this->addSql('DROP TABLE personal_account');
        $this->addSql('DROP TABLE personal_data_protection');
        $this->addSql('DROP TABLE professional_edu');
        $this->addSql('DROP TABLE public_report');
        $this->addSql('DROP TABLE sports_facilities');
        $this->addSql('DROP TABLE student_support');
        $this->addSql('DROP TABLE working_services');
        $this->addSql('ALTER TABLE about_centre CHANGE text_two text_two VARCHAR(255) DEFAULT NULL, CHANGE text_tree text_tree VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE acceptance_check_digits CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE college_admission CHANGE text text VARCHAR(255) NOT NULL, CHANGE documents_rf documents_rf VARCHAR(255) NOT NULL, CHANGE documents_foreign documents_foreign VARCHAR(255) NOT NULL, CHANGE text_two text_two VARCHAR(255) NOT NULL, CHANGE cost_education cost_education VARCHAR(255) NOT NULL, CHANGE text_three text_three VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE college_admission_title CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE driving_directions CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE entrance_tests CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE for_emloy_text CHANGE text text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE general_inf CHANGE text text VARCHAR(400) NOT NULL');
        $this->addSql('ALTER TABLE help_agraduate CHANGE text_one text_one VARCHAR(255) NOT NULL, CHANGE text_two text_two VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE medical_exam_adm CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE first_text first_text VARCHAR(255) NOT NULL, CHANGE second_text second_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE news_centre CHANGE text_one text_one VARCHAR(255) NOT NULL, CHANGE text_two text_two VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE normative_documents CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE open_doors_table CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE oraganization_medical_link CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE our_achievements CHANGE first_text first_text VARCHAR(255) NOT NULL, CHANGE second_text second_text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE psychological_support CHANGE text_one text_one VARCHAR(255) NOT NULL, CHANGE text_two text_two VARCHAR(255) DEFAULT NULL, CHANGE text_tree text_tree VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE question_answer CHANGE text_question text_question VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE specialties_professions CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE transfer_college CHANGE text text VARCHAR(255) NOT NULL, CHANGE text_instruction text_instruction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE transfer_within_college CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vacancies CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vacancies_teachers CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE veterans_labor CHANGE text text VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE videos_days_open_doors CHANGE text text VARCHAR(255) NOT NULL');
    }
}
