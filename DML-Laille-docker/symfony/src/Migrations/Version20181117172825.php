<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181117172825 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cours_supplementaire (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, cours_date DATE NOT NULL, horaire_debut TIME NOT NULL, horaire_fin TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours_supplementaire_niveau (cours_supplementaire_id INT NOT NULL, niveau_id INT NOT NULL, INDEX IDX_DE1B3CBCDA7554CA (cours_supplementaire_id), INDEX IDX_DE1B3CBCB3E9C81 (niveau_id), PRIMARY KEY(cours_supplementaire_id, niveau_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours_supplementaire_niveau ADD CONSTRAINT FK_DE1B3CBCDA7554CA FOREIGN KEY (cours_supplementaire_id) REFERENCES cours_supplementaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_supplementaire_niveau ADD CONSTRAINT FK_DE1B3CBCB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cours_supplementaire_niveau DROP FOREIGN KEY FK_DE1B3CBCDA7554CA');
        $this->addSql('DROP TABLE cours_supplementaire');
        $this->addSql('DROP TABLE cours_supplementaire_niveau');
    }
}
