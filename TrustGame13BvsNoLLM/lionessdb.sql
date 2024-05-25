-- MySQL Script generated by MySQL Workbench
-- Mon Apr  8 22:37:50 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE =
    'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `globals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `globals`
(
  `idRun` INT         NOT NULL,
  `name`  VARCHAR(36) NOT NULL,
  `value` TEXT        NOT NULL,
  PRIMARY KEY (`name`, `idRun`)
);


-- -----------------------------------------------------
-- Table `decisions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `decisions`
(
  `idRun`     INT         NOT NULL,
  `playerNr`  INT(11)     NULL DEFAULT NULL,
  `period`    INT(11)     NULL DEFAULT NULL,
  `groupNr`   INT(11)     NULL DEFAULT NULL,
  `subjectNr` INT(11)     NULL DEFAULT NULL,
  `name`      VARCHAR(45) NOT NULL,
  `value`     TEXT        NULL,
  PRIMARY KEY (`idRun`, `playerNr`, `period`, `name`)
);


-- -----------------------------------------------------
-- Table `logEvents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `logEvents`
(
  `eventNr`   INT(11)      NOT NULL AUTO_INCREMENT,
  `idRun`     INT          NOT NULL,
  `playerNr`  INT(11)      NOT NULL,
  `timeEvent` TIMESTAMP    NOT NULL,
  `event`     VARCHAR(256) NOT NULL,
  PRIMARY KEY (`eventNr`, `idRun`)
);


-- -----------------------------------------------------
-- Table `run`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `run`
(
  `idRun`    INT       NOT NULL AUTO_INCREMENT,
  `idGame`   INT       NULL,
  `idCourse` INT       NULL,
  `start`    TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `stop`     TIMESTAMP NULL,
  `deleted`  TIMESTAMP NULL,
  `isSaved`  TINYINT   NULL,
  PRIMARY KEY (`idRun`)
)
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stagehistory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stagehistory`
(
  `idRun`             INT       NOT NULL,
  `idStage`           INT       NOT NULL,
  `period`            INT       NOT NULL,
  `playerNr`          INT       NOT NULL,
  `logtime_entered`   TIMESTAMP NULL,
  `logtime_completed` TIMESTAMP NULL,
  `time`              INT       NULL,
  PRIMARY KEY (`idRun`, `idStage`, `period`, `playerNr`)
)
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `core`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `core`
(
  `idRun`               INT            NOT NULL,
  `playerNr`            INT(11)        NOT NULL AUTO_INCREMENT,
  `subjectNr`           INT(11)        NOT NULL,
  `groupNr`             INT(11)        NOT NULL,
  `role`                INT(11)        NULL,
  `period`              INT(11)        NOT NULL,
  `currentGroupSize`    INT(11)        NOT NULL,
  `onPage`              VARCHAR(30)    NOT NULL,
  `connected`           TINYINT        NULL,
  `lastActionTime`      INT(11)        NOT NULL,
  `tStart`              INT(11)        NOT NULL,
  `ipaddress`           VARCHAR(99)    NOT NULL,
  `ipaddressPart`       VARCHAR(15)    NOT NULL,
  `location`            VARCHAR(40)    NULL,
  `leftExperiment`      TINYINT        NULL DEFAULT NULL,
  `playerTerminated`    TINYINT        NULL,
  `groupAborted`        TINYINT        NULL DEFAULT NULL,
  `randomid`            VARCHAR(256)   NULL,
  `externalID`          VARCHAR(256)   NULL,
  `participationAmount` DECIMAL(11, 2) NULL,
  `bonusAmount`         DECIMAL(11, 2) NULL,
  `totalEarnings`       DECIMAL(11, 2) NULL,
  `quizFail`            INT(11)        NULL,
  PRIMARY KEY (`playerNr`)
);


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;
