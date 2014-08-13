SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `ListaPrecios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ListaPrecios` (
  `idListaPrecios` INT NOT NULL AUTO_INCREMENT ,
  `txNomLista` VARCHAR(45) NOT NULL ,
  `inActiva` INT NOT NULL DEFAULT 1 COMMENT '0: Inactiva - 1: Activa' ,
  PRIMARY KEY (`idListaPrecios`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DeptoCiudades`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DeptoCiudades` (
  `txDivipola` VARCHAR(15) NOT NULL ,
  `txNombre` VARCHAR(150) NOT NULL ,
  `idPadre` VARCHAR(15) NULL COMMENT 'Los departamentos no poseen Padre' ,
  PRIMARY KEY (`txDivipola`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Terceros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Terceros` (
  `idTercero` INT NOT NULL AUTO_INCREMENT ,
  `txTipDoc` VARCHAR(5) NOT NULL COMMENT 'Crear un dominio para esto' ,
  `txDocumento` VARCHAR(15) NOT NULL ,
  `txNomTercero` VARCHAR(100) NOT NULL ,
  `idCiudad` INT NOT NULL ,
  `inTipoTer` INT NOT NULL DEFAULT 0 COMMENT '0: Cliente - 1: Proveedor - 2: Ambos' ,
  `txDescuento` INT NULL COMMENT 'Descuento en % que se aplica tanto para compras como para ventas' ,
  `txDiasDescuento` INT NULL ,
  `txDireccion` VARCHAR(150) NULL ,
  `txTelefonos` VARCHAR(80) NULL COMMENT 'Separados por coma' ,
  `idListaPrecios` INT NOT NULL ,
  `txDivipola` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`idTercero`) ,
  INDEX `fk_Terceros_ListaPrecios1_idx` (`idListaPrecios` ASC) ,
  INDEX `fk_Terceros_DeptoCiudades1_idx` (`txDivipola` ASC) ,
  CONSTRAINT `fk_Terceros_ListaPrecios1`
    FOREIGN KEY (`idListaPrecios` )
    REFERENCES `ListaPrecios` (`idListaPrecios` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Terceros_DeptoCiudades1`
    FOREIGN KEY (`txDivipola` )
    REFERENCES `DeptoCiudades` (`txDivipola` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TipDoc`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TipDoc` (
  `idTipDoc` INT NOT NULL AUTO_INCREMENT ,
  `txTipDoc` VARCHAR(7) NOT NULL ,
  `txNomDoc` VARCHAR(50) NOT NULL ,
  `inAfecta` INT NOT NULL DEFAULT 0 COMMENT '0: Suma - 1: Resta - 2: NA - 3: Segun signo' ,
  `inTipTer` INT NULL DEFAULT 0 COMMENT '0: Cliente 1: Proveedor' ,
  `txObservPlantilla` VARCHAR(45) NULL COMMENT 'La observación que va en el documento por defecto.' ,
  PRIMARY KEY (`idTipDoc`) )
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `ClasifProductos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ClasifProductos` (
  `idClasifProductos` INT NOT NULL AUTO_INCREMENT ,
  `inPadre` INT NOT NULL COMMENT 'inPadre' ,
  `txDescripcion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idClasifProductos`) ,
  INDEX `fk_ClasifProductos_ClasifProductos1_idx` (`inPadre` ASC) ,
  CONSTRAINT `fk_ClasifProductos_ClasifProductos1`
    FOREIGN KEY (`inPadre` )
    REFERENCES `ClasifProductos` (`idClasifProductos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Productos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Productos` (
  `idProducto` INT NOT NULL AUTO_INCREMENT ,
  `txRefInterna` VARCHAR(50) NOT NULL ,
  `txRefExterna` VARCHAR(50) NULL ,
  `txNomProducto` VARCHAR(100) NOT NULL ,
  `txDescripcion` LONGTEXT NULL COMMENT 'La descripción larga de la aplicaicion del producto.' ,
  `idClasifProductos` INT NOT NULL COMMENT 'Calse... El ultimo nivel' ,
  PRIMARY KEY (`idProducto`) ,
  UNIQUE INDEX `txRefInterna_UNIQUE` (`txRefInterna` ASC) ,
  INDEX `fk_Productos_ClasifProductos1_idx` (`idClasifProductos` ASC) ,
  CONSTRAINT `fk_Productos_ClasifProductos1`
    FOREIGN KEY (`idClasifProductos` )
    REFERENCES `ClasifProductos` (`idClasifProductos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Vendedores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Vendedores` (
  `idVendedor` INT NOT NULL ,
  `txDocVendedor` VARCHAR(15) NULL ,
  `txNomVendedor` VARCHAR(50) NULL ,
  PRIMARY KEY (`idVendedor`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MasDocumentos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `MasDocumentos` (
  `idMasDocumento` INT NOT NULL AUTO_INCREMENT ,
  `inidTipDoc` INT NOT NULL ,
  `txNumDoc` VARCHAR(20) NOT NULL ,
  `inidTercero` INT NOT NULL ,
  `feFecha` DATETIME NOT NULL ,
  `Vendedores_idVendedor` INT NOT NULL ,
  `feVencimiento` DATETIME NOT NULL COMMENT 'Vencimiento de la factura ??' ,
  `txObservaciones` INT NULL COMMENT 'Heredada del tipo de documento' ,
  `txCondPago` VARCHAR(100) NULL COMMENT 'Se arma \"por defecto\" con condiciones de pago del tercero' ,
  `dbValNeto` DOUBLE NOT NULL DEFAULT 0 ,
  `dbValIva` DOUBLE NOT NULL DEFAULT 0 ,
  `dbTotal` DOUBLE NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`idMasDocumento`) ,
  INDEX `fk_MasDocumentos_TipDoc_idx` (`inidTipDoc` ASC) ,
  INDEX `fk_MasDocumentos_Terceros1_idx` (`inidTercero` ASC) ,
  INDEX `fk_MasDocumentos_Vendedores1_idx` (`Vendedores_idVendedor` ASC) ,
  CONSTRAINT `fk_MasDocumentos_TipDoc`
    FOREIGN KEY (`inidTipDoc` )
    REFERENCES `TipDoc` (`idTipDoc` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MasDocumentos_Terceros1`
    FOREIGN KEY (`inidTercero` )
    REFERENCES `Terceros` (`idTercero` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MasDocumentos_Vendedores1`
    FOREIGN KEY (`Vendedores_idVendedor` )
    REFERENCES `Vendedores` (`idVendedor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DetDocumentos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DetDocumentos` (
  `idDetDocumentos` INT NOT NULL AUTO_INCREMENT ,
  `inidMasDocumento` INT NOT NULL ,
  `inCantidad` INT NOT NULL DEFAULT 0 ,
  `Productos_idProducto` INT NOT NULL ,
  `dbValUnitario` DOUBLE NOT NULL DEFAULT 0 ,
  `dbValtotal` DOUBLE NULL ,
  PRIMARY KEY (`idDetDocumentos`) ,
  INDEX `fk_DetDocumentos_MasDocumentos1_idx` (`inidMasDocumento` ASC) ,
  INDEX `fk_DetDocumentos_Productos1_idx` (`Productos_idProducto` ASC) ,
  CONSTRAINT `fk_DetDocumentos_MasDocumentos1`
    FOREIGN KEY (`inidMasDocumento` )
    REFERENCES `MasDocumentos` (`idMasDocumento` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DetDocumentos_Productos1`
    FOREIGN KEY (`Productos_idProducto` )
    REFERENCES `Productos` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EstadisticasMes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `EstadisticasMes` (
  `idEstadistica` INT NOT NULL AUTO_INCREMENT ,
  `feFechaIni` DATETIME NOT NULL ,
  `feFechaFin` DATETIME NOT NULL ,
  `idTercero` INT NOT NULL ,
  `Productos_idProducto` INT NOT NULL ,
  `inCantidad` VARCHAR(45) NULL ,
  `dbValor` DOUBLE NULL DEFAULT 0 ,
  `inTipoTrx` INT NULL DEFAULT 2 COMMENT '1: compra 2: venta' ,
  PRIMARY KEY (`idEstadistica`) ,
  INDEX `fk_Estadisticas_Terceros1_idx` (`idTercero` ASC) ,
  INDEX `fk_Estadisticas_Productos1_idx` (`Productos_idProducto` ASC) ,
  CONSTRAINT `fk_Estadisticas_Terceros1`
    FOREIGN KEY (`idTercero` )
    REFERENCES `Terceros` (`idTercero` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estadisticas_Productos1`
    FOREIGN KEY (`Productos_idProducto` )
    REFERENCES `Productos` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DetListaPrecios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DetListaPrecios` (
  `idDetListaPrecioscol` INT NOT NULL AUTO_INCREMENT ,
  `ListaPrecios_idListaPrecios` INT NOT NULL ,
  `Productos_idProducto` INT NOT NULL ,
  `dbValor` DOUBLE NOT NULL DEFAULT 0 ,
  `txImagen` VARCHAR(150) NULL ,
  INDEX `fk_DetListaPrecios_ListaPrecios1_idx` (`ListaPrecios_idListaPrecios` ASC) ,
  PRIMARY KEY (`idDetListaPrecioscol`) ,
  INDEX `fk_DetListaPrecios_Productos1_idx` (`Productos_idProducto` ASC) ,
  CONSTRAINT `fk_DetListaPrecios_ListaPrecios1`
    FOREIGN KEY (`ListaPrecios_idListaPrecios` )
    REFERENCES `ListaPrecios` (`idListaPrecios` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DetListaPrecios_Productos1`
    FOREIGN KEY (`Productos_idProducto` )
    REFERENCES `Productos` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ValoresProductos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ValoresProductos` (
  `idValoresProductos` INT NOT NULL AUTO_INCREMENT ,
  `idProducto` INT NOT NULL ,
  `feFecha` DATETIME NOT NULL ,
  `dbPromVenta` DOUBLE NOT NULL ,
  `dbPromCompra` DOUBLE NOT NULL ,
  PRIMARY KEY (`idValoresProductos`) ,
  INDEX `fk_ValoresProductos_Productos1_idx` (`idProducto` ASC) ,
  CONSTRAINT `fk_ValoresProductos_Productos1`
    FOREIGN KEY (`idProducto` )
    REFERENCES `Productos` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Kardex`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Kardex` (
  `idKardex` INT NOT NULL AUTO_INCREMENT ,
  `feFecha` VARCHAR(45) NOT NULL ,
  `idProducto` INT NOT NULL ,
  `inTipoTrx` INT NOT NULL DEFAULT 1 COMMENT '1: compra 2: venta' ,
  `itCantidad` INT NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`idKardex`) ,
  INDEX `fk_Kardex_Productos1_idx` (`idProducto` ASC) ,
  CONSTRAINT `fk_Kardex_Productos1`
    FOREIGN KEY (`idProducto` )
    REFERENCES `Productos` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


ALTER TABLE `TipDoc` 
ADD UNIQUE INDEX `txTipDoc_UNIQUE` (`txTipDoc` ASC) ;

ALTER TABLE `ClasifProductos` ADD COLUMN `inTipo` INT NOT NULL DEFAULT 0 COMMENT '0: Clasificacion de aplicación \n1: Clasificacion Marca Linea Modelo'  AFTER `txDescripcion` ;

ALTER TABLE `Productos` ADD COLUMN `idMarcaProductos` INT NOT NULL AFTER `idClasifProductos` , 
  ADD CONSTRAINT `fk_Productos_ClasifProductos2`
  FOREIGN KEY (`idMarcaProductos` )
  REFERENCES `ClasifProductos` (`idClasifProductos` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `fk_Productos_ClasifProductos2_idx` (`idMarcaProductos` ASC) ;


ALTER TABLE `Productos` ADD COLUMN `inActivo` INT NOT NULL DEFAULT 1 COMMENT '1: activo - 0: Inactivo'  AFTER `idMarcaProductos` ;


ALTER TABLE `Terceros` ADD COLUMN `inActivo` INT NOT NULL DEFAULT 1 COMMENT '1: activo - 0: inactivo'  AFTER `txDivipola` , ADD COLUMN `inTipoDesc` INT NOT NULL DEFAULT 0 COMMENT '0: normal - 1: incluido - 2: pie factura'  AFTER `inActivo` ;

ALTER TABLE `vendedores` CHANGE COLUMN `idVendedor` `idVendedor` INT(11) NOT NULL AUTO_INCREMENT  ;

ALTER TABLE `masdocumentos` CHANGE COLUMN `txObservaciones` `txObservaciones` VARCHAR(200) NULL COMMENT ''  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

