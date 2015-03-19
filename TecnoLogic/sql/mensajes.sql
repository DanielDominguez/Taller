SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mensajes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mensajes` ;

-- -----------------------------------------------------
-- Table `mensajes`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mensajes`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `contrasena` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mensajes`.`Mensajes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mensajes`.`Mensajes` (
  `idMensajes` INT NOT NULL AUTO_INCREMENT ,
  `texto` VARCHAR(45) NOT NULL ,
  `idUsuario` INT NOT NULL ,
  PRIMARY KEY (`idMensajes`) ,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `mensajes`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
