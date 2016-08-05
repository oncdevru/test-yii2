<?php

use yii\db\Migration;
use yii\db\Schema;

class m160805_195228_create_table_blog extends Migration
{

    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `blg_blog` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `user_id` INT NOT NULL,
          `description` VARCHAR(255) NOT NULL,
          `article` TEXT NOT NULL,
          `create_date` DATETIME NOT NULL,
          PRIMARY KEY (`id`),
          INDEX `fk_blg_blog_1_idx` (`user_id` ASC),
          CONSTRAINT `fk_blg_blog_1`
            FOREIGN KEY (`user_id`)
            REFERENCES `blg_user` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION)
        ENGINE = InnoDB DEFAULT CHARSET UTF8;
        ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `blg_blog` ;
        ");
    }

}
