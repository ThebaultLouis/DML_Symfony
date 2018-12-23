<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181220222155 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE manifestation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, event_date DATE NOT NULL, ville VARCHAR(255) NOT NULL, cp VARCHAR(255) NOT NULL, club VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, brochure VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE danse_apprise (id INT AUTO_INCREMENT NOT NULL, niveau_id INT DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, dance_date DATE NOT NULL, youtube_link VARCHAR(255) DEFAULT NULL, brochure VARCHAR(255) DEFAULT NULL, INDEX IDX_972CFD0CB3E9C81 (niveau_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, horaire TIME NOT NULL, horaire_fin TIME NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours_supplementaire (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, cours_date DATE NOT NULL, horaire_debut TIME NOT NULL, horaire_fin TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours_supplementaire_niveau (cours_supplementaire_id INT NOT NULL, niveau_id INT NOT NULL, INDEX IDX_DE1B3CBCDA7554CA (cours_supplementaire_id), INDEX IDX_DE1B3CBCB3E9C81 (niveau_id), PRIMARY KEY(cours_supplementaire_id, niveau_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE danse_revisee (id INT AUTO_INCREMENT NOT NULL, danse_apprise_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, youtube_link VARCHAR(255) DEFAULT NULL, INDEX IDX_97705E38FC91CFD0 (danse_apprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE danse_apprise ADD CONSTRAINT FK_972CFD0CB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE cours_supplementaire_niveau ADD CONSTRAINT FK_DE1B3CBCDA7554CA FOREIGN KEY (cours_supplementaire_id) REFERENCES cours_supplementaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_supplementaire_niveau ADD CONSTRAINT FK_DE1B3CBCB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE danse_revisee ADD CONSTRAINT FK_97705E38FC91CFD0 FOREIGN KEY (danse_apprise_id) REFERENCES danse_apprise (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE danse_revisee DROP FOREIGN KEY FK_97705E38FC91CFD0');
        $this->addSql('ALTER TABLE danse_apprise DROP FOREIGN KEY FK_972CFD0CB3E9C81');
        $this->addSql('ALTER TABLE cours_supplementaire_niveau DROP FOREIGN KEY FK_DE1B3CBCB3E9C81');
        $this->addSql('ALTER TABLE cours_supplementaire_niveau DROP FOREIGN KEY FK_DE1B3CBCDA7554CA');
        $this->addSql('DROP TABLE manifestation');
        $this->addSql('DROP TABLE danse_apprise');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE cours_supplementaire');
        $this->addSql('DROP TABLE cours_supplementaire_niveau');
        $this->addSql('DROP TABLE danse_revisee');
        $this->addSql('DROP TABLE admin');
    }
}
