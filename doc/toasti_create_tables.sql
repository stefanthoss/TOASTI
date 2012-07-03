SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `toasti_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_german1_ci ;
USE `toasti_db` ;

-- -----------------------------------------------------
-- Table `toasti_db`.`companies`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`companies` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `street` VARCHAR(45) NULL ,
  `street2` VARCHAR(45) NULL ,
  `zip` MEDIUMINT UNSIGNED NULL ,
  `city` VARCHAR(45) NULL ,
  `country` VARCHAR(45) NULL ,
  `note` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`contact_people`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`contact_people` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `gender` VARCHAR(45) NULL ,
  `title` VARCHAR(45) NULL ,
  `first_name` VARCHAR(45) NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `position` VARCHAR(45) NULL ,
  `department` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  `mobile` VARCHAR(45) NULL ,
  `fax` VARCHAR(45) NULL ,
  `street` VARCHAR(45) NULL ,
  `street2` VARCHAR(45) NULL ,
  `zip` MEDIUMINT UNSIGNED NULL ,
  `city` VARCHAR(45) NULL ,
  `country` VARCHAR(45) NULL ,
  `note` TEXT NULL ,
  `company_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contact_person_company` (`company_id` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`groups` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toasti_db`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `first_name` VARCHAR(45) NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `group_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  INDEX `fk_users_group1` (`group_id` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`contacts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`contacts` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATE NOT NULL ,
  `cooperation_kind` VARCHAR(45) NULL ,
  `note` TEXT NULL ,
  `contact_person_id` INT NOT NULL ,
  `event_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  INDEX `fk_contacting_event1` (`event_id` ASC) ,
  INDEX `fk_contacting_user1` (`user_id` ASC) ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contacting_contact_person1` (`contact_person_id` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`service_branches`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`service_branches` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`service_providers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`service_providers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `contact_person` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  `fax` VARCHAR(45) NULL ,
  `homepage` VARCHAR(45) NULL ,
  `street` VARCHAR(45) NULL ,
  `street2` VARCHAR(45) NULL ,
  `zip` VARCHAR(45) NULL ,
  `country` VARCHAR(45) NULL ,
  `service_branch_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_service_provider_service_branch1` (`service_branch_id` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`service_orders`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`service_orders` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATE NOT NULL ,
  `description` VARCHAR(45) NULL ,
  `rating` TINYINT NULL ,
  `price` DECIMAL(10,2) NULL ,
  `note` TEXT NULL ,
  `user_id` INT NOT NULL ,
  `event_id` INT NOT NULL ,
  `service_provider_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_service order_user1` (`user_id` ASC) ,
  INDEX `fk_service order_event1` (`event_id` ASC) ,
  INDEX `fk_service order_service_provider1` (`service_provider_id` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`aros_acos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`aros_acos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `aro_id` INT(10) UNSIGNED NOT NULL ,
  `aco_id` INT(10) UNSIGNED NOT NULL ,
  `_create` CHAR(2) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NOT NULL DEFAULT '0' ,
  `_read` CHAR(2) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NOT NULL DEFAULT '0' ,
  `_update` CHAR(2) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NOT NULL DEFAULT '0' ,
  `_delete` CHAR(2) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_german1_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`aros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`aros` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(10) NULL DEFAULT NULL ,
  `model` VARCHAR(255) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NULL DEFAULT '' ,
  `foreign_key` INT(10) UNSIGNED NULL DEFAULT NULL ,
  `alias` VARCHAR(255) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NULL DEFAULT '' ,
  `lft` INT(10) NULL DEFAULT NULL ,
  `rght` INT(10) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_german1_ci;


-- -----------------------------------------------------
-- Table `toasti_db`.`acos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `toasti_db`.`acos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(10) NULL DEFAULT NULL ,
  `model` VARCHAR(255) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NULL DEFAULT '' ,
  `foreign_key` INT(10) UNSIGNED NULL DEFAULT NULL ,
  `alias` VARCHAR(255) CHARACTER SET 'latin1' COLLATE 'latin1_german1_ci' NULL DEFAULT '' ,
  `lft` INT(10) NULL DEFAULT NULL ,
  `rght` INT(10) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_german1_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
