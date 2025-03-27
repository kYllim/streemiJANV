<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20250131134420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE watch_history DROP INDEX UNIQ_DE44EFD830998911, ADD INDEX IDX_DE44EFD830998911 (user_watch_history_id)');
        $this->addSql('ALTER TABLE watch_history DROP FOREIGN KEY FK_DE44EFD8B96242BE');
        $this->addSql('DROP INDEX IDX_DE44EFD8B96242BE ON watch_history');
        $this->addSql('ALTER TABLE watch_history DROP user_history_id');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE watch_history DROP INDEX IDX_DE44EFD830998911, ADD UNIQUE INDEX UNIQ_DE44EFD830998911 (user_watch_history_id)');
        $this->addSql('ALTER TABLE watch_history ADD user_history_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE watch_history ADD CONSTRAINT FK_DE44EFD8B96242BE FOREIGN KEY (user_history_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_DE44EFD8B96242BE ON watch_history (user_history_id)');
    }
}
