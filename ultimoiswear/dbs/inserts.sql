SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `mydb`.`historial` (
  `Usuario` INT(11) NOT NULL,
  `Producto` INT(11) NOT NULL,
  `hCantidad` INT(11) NULL DEFAULT NULL,
  `Paid` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Usuario`, `Producto`),
  INDEX `fk2_idx` (`Producto` ASC),
  CONSTRAINT `fk1`
    FOREIGN KEY (`Usuario`)
    REFERENCES `mydb`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk2`
    FOREIGN KEY (`Producto`)
    REFERENCES `mydb`.`productos` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`productos` (
  `idProducto` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL DEFAULT NULL,
  `Descripcion` VARCHAR(380) NULL DEFAULT NULL,
  `Fotos` VARCHAR(20) NULL DEFAULT NULL,
  `Precio` INT(11) NULL DEFAULT NULL,
  `Cantidad` INT(11) NOT NULL,
  `Fabricante` VARCHAR(45) NULL DEFAULT NULL,
  `Origen` VARCHAR(45) NULL DEFAULT NULL,
  `Afiliacion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idProducto`))
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`usuarios` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL DEFAULT NULL,
  `Correo` VARCHAR(45) NULL DEFAULT NULL,
  `Password` VARCHAR(45) NULL DEFAULT NULL,
  `Nacimiento` INT(11) NULL DEFAULT NULL,
  `Tarjeta` VARCHAR(16) NULL DEFAULT NULL,
  `Direccion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

use mydb;
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('GEMINI','The GEMINI were sentient droids linked in a hive mind who operated the massive Eternal Fleet.','GEMINI.png',20000,50,'Lokath Species','Lokath','Eternal Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('R2','They were designed to be able to fit in the droid sockets commonly found on starfighters. R2-D2 was a notable example of this model. Although the R2 series was used prior to the Clone Wars, they were still considered to be new during the Age of the Empire.','R2.JPG',50000,50,'Industrial Automaton','Nubia','Royal house of Naboo');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('R3','The R3-series astromech droid was part of the line of R-series astromech droids manufactured by Industrial Automaton.Thanks to their Intellex V processors, R3 astromechs had faster processing abilities than the more common R2 units.','R3.png',60000,50,'Industrial Automaton','Nubia','Galactic Republic');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('R4','R4 astromechs were a series of astromech droids manufactured by Industrial Automaton. They looked very similar to the R2 series astromech droids, except that their dome was conical instead of hemispherical.','R4.jpg',55000,50,'Industrial Automaton','Nubia','New Republic');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('R5','Cut-price versions of superior R2 units, they were low cost, but plagued with malfunctions, prone to defects and bad attitudes.','R5.png',10000,50,'Industrial Automaton','Nubia','Jedi Order');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('B1 battle','B1 battle droids, also referred to as standard battle droids, were the most widely-used battle droids manufactured by Baktoid Combat Automata and Baktoid Armor Workshop, and were the successor to the OOM-series battle droids.','B1.jpg',8100,50,'Baktoid Combat Automata','Geonosis','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('X2-C3','X2-C3 Imperial astromechs were highly versatile military droids for the Sith Empire. They employed an advanced sensor array and had impressive analytical abilities.','X2-C3.jpg',15000,50,'Sith Empire','Kaas City','Sith Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('ID9','ID9 seeker droids, also called Parrot Droids or Mimic Droids, were a model of seeker droids that resembled the Viper probe droids manufactured by Arakyd Industries. The body of ID9 seekers consisted in a half-hemisphere dome with a red photoreceptor.','ID9.png',11000,50,'Arakyd Industries','Vulpter','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('ID10','The ID10 seeker droid was a model of seeker droid that succeeded the ID9, with four legs instead of the ID9''s five. Dio was an ID10 utilized by Inferno Squad following their formation after the Battle of Yavin in 0 BBY.','ID10.jpg',15000,50,'Arakyd Industries','Vulpter','New Republic');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('RA-7','The RA-7 protocol droid, also known as the RA-7 inventory droid, the RA-7 series protocol droid and nicknamed the "Death Star droid" due to its use aboard the first Death Star, was a model of protocol droid manufactured by Arakyd Industries. Produced specially for the Galactic Empire, RA-7s were almost always used as spies.','RA-7.jpg',9000,50,'Arakyd Industries','Vulpter','Resistance');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('J5','The Arentech J5 Series Security Droid was a droid model often deployed as a sentry, patrol, or enforcement unit within the Antrixian Commonwealth, especially among the various industries and local security forces.','J5.jpg',6000,50,'Arentech Industries','Unknown','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('T2','The Arentech T2 series Astromech Droid was a droid model produced by Arentech Industries from just prior to the Clones Wars until well after the Battle of Endor. A civilian and military model were available for sale, but tight restrictions were placed on the sale of the military model due to it''s defensive armaments and program upgrades.','T2.jpg',6000,50,'Arentech Industries','Unknown','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('ASP-7','The ASP-7 labor droid or ASP droid, was an agile model of labor droid that was used to perform manual tasks throughout the galaxy. They were easily programmed and equipped with magnetized feet, clawed hands, and voice synthesizers.','ASP-7.jpg',1000,50,'Industrial Automaton','Nubia','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('T3-series Protocol','The Arentech T3-series Protocol Droid was a model of droid produced by Arentech Industries during the time of 30 BBY to 6 ABY. The droid series was popular with the noble Houses of the Antrixian Landsting, functioning as a diplomatic assistant and translator for nobles and ambassadors.','T3.jpg',3000,50,'Arentech Industries','Unknown','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('T9','The Arentech T9 Diagnostic Repair Droid, or DRD, were a series of maintenance droids produces by Arentech Industries to assist with maintenance and repair on the ships of the Antrixian Defense Force. DRDs were ovoid, approximately 14 inches long, 10 inches wide and 8 inches tall, with two flexible black eyestalks with lights.','T9.jpg',3500,50,'Arentech Industries','Unknown','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Centurion','Centurian Droids were created by Xera Traabo while she was employed at Cylon Industries on Rotex. Centurians were battle droids intended to augment the Rotronian military with the conflicts with the Draks. They were also meant to be sold to other military and security organizations.','Centurion.jpg',5000,50,'Cylon Cybernetics','Cerrik','RoSec');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Cyberdyne Daggit Companion','These droids, equipped with powerful sensory apparatus and a retractable blaster, were primarily used for youngling protection and companionship. They had also been used for recon and defense duties.','cyberdyne.jpg',3500,50,'Cyberdyne Systems','Unknown','New Republic');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('RX','The RX-Series droid was a popular model of Pilot droid, often used in commercial space travel. This type of droid was used by the Galactic Empire to pilot ships.','RX.jpg',8000,50,'Industrial Automaton','Nubia','Resistance');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Droideka','Droidekas, also known as Destroyer Droids, were a type of droid used by Confederacy of Independent Systems during the Clone Wars.','droideka.jpg',10000,50,'Colicoids','Colla IV','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('IT-O','The droid was a black hovering sphere, perhaps a third of a meter in diameter, with various attachments, deliberately frightening in appearance, used in torture. The droid was generally successful in getting information from prisoners using elaborate and scientific torture methods.','IT-O.jpg',8000,50,'Imperial Security Bureau','Coruscant','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('9D9-s54','The 9D9-s54 Dianoga spy droid was a model of spy droid developed by the Imperial Department of Military Research for espionage purposes. Intelligent, they had a deceptively simple design and featured tracking and identification capabilities that allowed them to follow their targets and recording every move they make with a high-definition holorecorder','9D9-S54.jpg',18000,50,'Imperial Security Bureau','Coruscant','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Super Tactical','A Super Tactical Droid was an upgraded version of the T-series tactical droid. It was used by Separatists as droid generals, for the Separatist Droid Army. They were created for the Separatist Alliance, during the Clone Wars, to combat the shortcomings of the T-series tactical droid.','SUPER-TACTICAL.jpg',8000,50,'Baktoid Combat Automata','Geonosis','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('B2 super battle','B2 super battle droids, simply known as super battle droids, were an advanced battle droid used by the Confederacy of Independent Systems during the Clone Wars. Super battle droids were much stronger than their predecessors, and like the updated B1s used by the Confederacy, they did not require a command system to operate, which gave the droids limited independence.','B2.jpg',7000,50,'Baktoid Combat Automata','Geonosis','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('B3 ultra battle','B3 battle droids were battle droids manufactured by Baktoid Combat Automata and used by the Confederacy of Independent Systems during the Clone Wars. B2 super battle droids and B3 battle droids were favored over the expensive and complex E522 assassin droids','B3.jpg',6500,50,'Baktoid Combat Automata','Geonosis','Galactic Empire');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('BX-series','BX-series commando droids were advanced, sturdier versions of B1 battle droids. They were programmed with improved combat tactics and battlefield awareness and equipped with glowing white photoreceptors. Captains and other high-ranking commando droids bore white identifiers on their heads and chests.','BX.jpg',5600,50,'Baktoid Combat Automata','Geonosis','Resistance');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('E522 assassin','The E522 assassin droid was a large, hulking construct laced with heavy weapons and equipped with thick military armor. It had a rounded, diamond-shaped torso with no noticeable head, an very narrow waist that could rotate 360 degrees, two havy tank treads that were covered in armored skirts, and two long and multi-jointed arms that were attached to armored shoulders.','E522.jpg',25000,50,'Baktoid Combat Automata','Geonosis','Alliance Intelligence');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('T-series','T-series tactical droids were humanoid fourth class tactical droids standing at a height of 1.93 meters tall. Compared to the standard B1 battle droids who served under them, they were boxier in appearance and often sported varying color schemes.','T.jpg',9000,50,'Baktoid Combat Automata','Geonosis','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Viper recon','The Viper recon droid,also known as the Separatist probe droid, was a model of probe droid manufactured by Arakyd Industries and used by the Confederacy of Independent Systems during the Clone Wars.','viper-recon.jpg',1000,50,'Arakyd Industries','Vulpter','Separatist');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Viper probe','The Viper probe droid, commonly referred to as the Imperial probe droid, was a model of probe droid manufactured by Arakyd Industries and used by the Galactic Empire later the New Republic for deep space exploration and reconnaissance.','viper-probe.jpg',1200,50,'Arakyd Industries','Vulpter','New Republic');
INSERT INTO productos(Nombre,Descripcion,Fotos,Precio,Cantidad,Fabricante,Origen,Afiliacion) VALUES ('Dwarf probe','The dwarf probe droid, also known as an Imperial probe droid or Viper probot, was a model of probe droid manufactured by Arakyd Industries. It was fitted with a pair of blaster barrels, which it could fire with deadly accuracy.','dwarf.jpg',2500,50,'Arakyd Industries','Vulpter','Galactic Empire');
SELECT * from productos;