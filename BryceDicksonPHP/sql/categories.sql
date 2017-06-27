-- MySQL Script generated by MySQL Workbench
-- 11/17/16 22:29:54
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lavaeigf_dynamic
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lavaeigf_dynamic
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lavaeigf_dynamic` DEFAULT CHARACTER SET utf8 ;
USE `lavaeigf_dynamic` ;

-- -----------------------------------------------------
-- Table `lavaeigf_dynamic`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lavaeigf_dynamic`.`categories` (
  `idCategory` INT NOT NULL,
  `nameCategory` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategory`),
  UNIQUE INDEX `idCategory_UNIQUE` (`idCategory` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;