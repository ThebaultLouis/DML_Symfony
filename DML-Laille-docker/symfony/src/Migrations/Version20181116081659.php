<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181116081659 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE danse_apprise (id INT AUTO_INCREMENT NOT NULL, niveau_id INT DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, dance_date DATE NOT NULL, youtube_link VARCHAR(255) DEFAULT NULL, INDEX IDX_972CFD0CB3E9C81 (niveau_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE danse_revisee (id INT AUTO_INCREMENT NOT NULL, danse_apprise_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, youtube_link VARCHAR(255) DEFAULT NULL, INDEX IDX_97705E38FC91CFD0 (danse_apprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, horaire TIME NOT NULL, horaire_fin TIME NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE danse_apprise ADD CONSTRAINT FK_972CFD0CB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE danse_revisee ADD CONSTRAINT FK_97705E38FC91CFD0 FOREIGN KEY (danse_apprise_id) REFERENCES danse_apprise (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE danse_revisee DROP FOREIGN KEY FK_97705E38FC91CFD0');
        $this->addSql('ALTER TABLE danse_apprise DROP FOREIGN KEY FK_972CFD0CB3E9C81');
        $this->addSql('DROP TABLE danse_apprise');
        $this->addSql('DROP TABLE danse_revisee');
        $this->addSql('DROP TABLE niveau');
    }
}
