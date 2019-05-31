-- -----------------------------------------------------
-- Table `dbconnectx`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbconnectx`.`categoria` (
  `idcategoria` INT(6) NOT NULL zerofill AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(256) NULL,
  `condicion` TINYINT NOT NULL,
  PRIMARY KEY (`idcategoria`),
  UNIQUE INDEX `idcategoria_UNIQUE` (`idcategoria` ASC) )
ENGINE = InnoDB;



-----------------------------------------------------
Certificacion:
TIF
SENASICA
SEMARNAT
UNAM
SAGARPA
CENAPA
Codex Alimentarius
SCP
RLPO
Producto orgánico
Rastreabilidad
Producción Orgánica
OCO
LPO
orgánica
PARTICIPATIVA
FDA 
