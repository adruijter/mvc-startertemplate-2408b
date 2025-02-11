-- Step: 01
-- ***************************************************************
-- Doel : Maak een nieuwe database aan met de naam Mvc_smartphone_2408B
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           13-11-2024      Arjan de Ruijter    Achtbanen van 
--                                                  Europa
-- ***************************************************************

-- Verwijder database Mvc_smartphone_2408B
DROP DATABASE IF EXISTS `Mvc_smartphone_2408B`;

-- Maak een nieuwe database aan Mvc_smartphone_2408B
CREATE DATABASE `Mvc_smartphone_2408B`;

-- Gebruik database Mvc_smartphone_2408B
USE `Mvc_smartphone_2408B`;

-- Step: 02
-- ***************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-02-2025      Arjan de Ruijter    Tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem, Schermgrootte
-- ***************************************************************

CREATE TABLE Smartphones
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Prijs              DECIMAL(6,2)                NOT NULL
    ,Geheugen           SMALLINT        UNSIGNED    NOT NULL
    ,Besturingssysteem   VARCHAR(50)     		    NOT NULL
    ,Schermgrootte		DECIMAL(4,2)		    	NOT NULL
    ,Releasedatum		DATE 						NOT NULL				
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 03
-- ***************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-02-2025      Arjan de Ruijter    Vulling Smartphones
-- ***************************************************************

INSERT INTO Smartphones
(
     Merk,
     Model,
     Prijs,
     Geheugen,
     Besturingssysteem,
     Schermgrootte,
     Releasedatum,
     IsActief,
     Opmerking,
     DatumAangemaakt,
     DatumGewijzigd
)
VALUES
 ('Apple', 'iPhone 16 Pro', 1299, 256, 'iOS', 6.1, '2024-09-22', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Samsung', 'Galaxy S25 Ultra', 1499, 512, 'Android', 6.9, '2025-02-07', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Google', 'Pixel 9 Pro', 1099, 256, 'Android', 6.7, '2024-10-12', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('OnePlus', '12', 899, 128, 'Android', 6.7, '2024-01-04', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Motorola', 'Razr 50', 1199, 256, 'Android', 6.9, '2024-06-25', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Sony', 'Xperia 1 VI', 1199, 256, 'Android', 6.5, '2024-05-15', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Huawei', 'P60 Pro', 999, 256, 'HarmonyOS', 6.6, '2024-03-10', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Xiaomi', 'Mi 14 Pro', 1099, 256, 'Android', 6.8, '2024-08-20', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Oppo', 'Find X6 Pro', 1049, 256, 'Android', 6.7, '2024-04-18', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Asus', 'ROG Phone 7', 999, 256, 'Android', 6.78, '2024-07-22', 1, NULL, SYSDATE(6), SYSDATE(6));
