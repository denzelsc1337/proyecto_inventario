DROP DATABASE IF EXISTS inventario;
CREATE DATABASE inventario;

USE inventario;



DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario
(
    secuence_usu INT auto_increment PRIMARY KEY NOT NULL,
    id_usuario INT (6) NOT NULL,
    nom_usuario VARCHAR (30) NOT NULL,
    ape_usuario VARCHAR (30) NOT NULL,
    id_tipo_usuario INT (2) NOT NULL,
    cod_usuario VARCHAR (30) NOT NULL,
    pass_usuario VARCHAR (20) NOT NULL,
    mail_usuario VARCHAR (40),
    tlf_usuario CHAR (9),
    estado_usuario BOOLEAN
);

DROP TABLE IF EXISTS tipo_usuario;
CREATE TABLE tipo_usuario
(
    secuence_tipo_usu INT auto_increment PRIMARY KEY NOT NULL,
    id_tipo_usuario INT (2) NOT NULL,
    detalle_tipo_usuario VARCHAR (20) NOT NULL
);

DROP TABLE IF EXISTS categorias;
CREATE TABLE categorias
(
    secuence_cat INT auto_increment PRIMARY KEY NOT NULL,
    id_categoria INT (6) NOT NULL,
    nom_categoria VARCHAR (30) NOT NULL,
    estado_categoria BOOLEAN
);

DROP TABLE IF EXISTS marca;
CREATE TABLE marca
(
    secuence_mar INT auto_increment PRIMARY KEY NOT NULL,
    id_marca INT (6) NOT NULL,
    nom_marca VARCHAR (30) NOT NULL,
    estado_marca BOOLEAN
);


DROP TABLE IF EXISTS colegios;
CREATE TABLE colegios
(
    secuence_col INT auto_increment PRIMARY KEY NOT NULL,
    cod_modu_colegio INT NOT NULL,
    ugel_colegio VARCHAR (30) NOT NULL,
    nom_colegio VARCHAR (50) NOT NULL,
    dir_colegio VARCHAR (30) NOT NULL,
    tlf_colegio CHAR (9),
    mail_colegio VARCHAR (40),    
    depa_colegio VARCHAR (15) NOT NULL,
    prov_colegio VARCHAR (15) NOT NULL,
    dist_colegio VARCHAR (15) NOT NULL,
    director_colegio VARCHAR (15) NOT NULL,
    nivel_colegio VARCHAR (30) NOT NULL
);

DROP TABLE IF EXISTS proveedor;
CREATE TABLE proveedor
(
    secuence_prov INT auto_increment PRIMARY KEY NOT NULL,
    id_proveedor INT (6) NOT NULL,
    RUC CHAR (11) NOT NULL,
    razon_social VARCHAR (40) NOT NULL,
    tlf_proveedor CHAR (9) NOT NULL,
    mail_proveedor VARCHAR (40),
    estado_proveedor BOOLEAN
);

-- DROP TABLE IF EXISTS tipo_movimiento;
-- CREATE TABLE tipo_movimiento
-- (
--     secuence_tip_mov INT auto_increment PRIMARY KEY NOT NULL,
--     id_tipo_movi INT NOT NULL,
--     tipo_movi VARCHAR (10) NOT NULL,
--     estado_tipo_movimiento BOOLEAN
-- );

DROP TABLE IF EXISTS productos;
CREATE TABLE productos
(
    secuence_prod INT auto_increment PRIMARY KEY NOT NULL,
    SKU_producto INT NOT NULL,
    id_proveedor INT (6) NOT NULL,
    id_categoria INT (6) NOT NULL,
    id_marca INT (6) NOT NULL,
    id_usuario INT (6) NOT NULL,
    nom_producto VARCHAR (30) NOT NULL,
    cantidades INT NOT NULL,
    fecha_entrada DATE NOT NULL,
    fecha_vencimento DATE,
    descripcion VARCHAR(50),
    guia_remision VARCHAR (30)  NOT NULL,
    num_orden int NOT NULL,
    num_pecosa int,
    perecible BOOLEAN
);

-- DROP TABLE IF EXISTS movimientos;
-- CREATE TABLE movimientos
-- (
--     secuence_mov INT auto_increment PRIMARY KEY NOT NULL,
--     id_movimiento INT NOT NULL,
--     tipo_movi VARCHAR (10) NOT NULL,
--     estado_movimiento BOOLEAN
-- );

-- DROP TABLE IF EXISTS detalle_ingreso;
-- CREATE TABLE detalle_ingreso
-- (
--     secuence_det_ing INT auto_increment PRIMARY KEY NOT NULL,
--     id_det_ing INT (6) NOT NULL,
--     id_proveedor INT (6) NOT NULL,
--     id_categoria INT (6) NOT NULL,
--     SKU_producto INT NOT NULL,
--     id_usuario INT (6) NOT NULL,
--     id_movimiento INT NOT NULL,
--     orden_servicio INT NOT NULL,
--     num_pecosa INT NOT NULL,
--     guia_movi INT NOT NULL,
--     cant_prod_ing INT NOT NULL,
--     fecha_ing DATE,
--     RUC CHAR (11) NOT NULL,
--     razon_social VARCHAR (40) NOT NULL,
--     comentario VARCHAR (50),
--     estado_deta_desp BOOLEAN
-- );

DROP TABLE IF EXISTS detalle_despacho;
CREATE TABLE detalle_despacho
(
    secuence_det_des INT auto_increment PRIMARY KEY NOT NULL,
    -- id_det_des INT (6) NOT NULL,
    id_usuario INT (6) NOT NULL,
    id_colegio INT (6) NOT NULL,
    id_producto INT NOT NULL,
    cant_prod_des INT NOT NULL,
    fecha_des DATE,
    -- id_movimiento INT NOT NULL,
    -- nom_director VARCHAR (40) NOT NULL,
    comentario VARCHAR (50),
    firma_resp VARCHAR (50)
    -- estado_deta_desp BOOLEAN
);


-- RELACIONES --

    -- TIPO USUARIO A ->

    ALTER TABLE usuario
    ADD CONSTRAINT fk_tusu_a_usu
    FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario (secuence_tipo_usu);

    -- USUARIO A ->

    ALTER TABLE productos
    ADD CONSTRAINT fk_usu_a_prod
    FOREIGN KEY (id_usuario) REFERENCES usuario (secuence_usu);

    ALTER TABLE detalle_despacho
    ADD CONSTRAINT fk_usu_a_ddes
    FOREIGN KEY (id_usuario) REFERENCES usuario (secuence_usu);


    -- CATEGORIA A ->

    ALTER TABLE productos
    ADD CONSTRAINT fk_cat_a_prod
    FOREIGN KEY (id_categoria) REFERENCES categorias (secuence_cat);

--
    -- ALTER TABLE detalle_ingreso
    -- ADD CONSTRAINT fk_cat_a_ding
    -- FOREIGN KEY (id_categoria) REFERENCES categorias (secuence_cat);
--

    -- CLIENTES / COLEGIOS A ->

    ALTER TABLE detalle_despacho
    ADD CONSTRAINT fk_col_a_ddes
    FOREIGN KEY (id_colegio) REFERENCES colegios (secuence_col);


    -- PROVEEDOR A ->
     ALTER TABLE productos
	 ADD CONSTRAINT fk_prov_to_prod
	 FOREIGN KEY (id_proveedor) REFERENCES proveedor (secuence_prov);


    -- MOVIMIENTO A ->

    -- ALTER TABLE detalle_ingreso
    -- ADD CONSTRAINT fk_mov_a_ding
    -- FOREIGN KEY (id_movimiento) REFERENCES movimientos (secuence_mov);

    -- ALTER TABLE detalle_despacho
    -- ADD CONSTRAINT fk_mov_a_ddes
    -- FOREIGN KEY (id_movimiento) REFERENCES movimientos (secuence_mov);  


    -- PRODUCTO A ->

    -- ALTER TABLE detalle_ingreso
    -- ADD CONSTRAINT fk_prod_a_ding
    -- FOREIGN KEY (SKU_producto) REFERENCES productos (secuence_prod);  

    -- MARCA A ->

    ALTER TABLE productos
    ADD CONSTRAINT fk_mar_a_prod
    FOREIGN KEY (id_marca) REFERENCES marca (secuence_mar);




    -- DETALLE DESPACHO

    ALTER TABLE detalle_despacho
    ADD CONSTRAINT fk_prod_a_ddes
    FOREIGN KEY (id_producto) REFERENCES productos (secuence_prod);

    -- ALTER TABLE movimientos
    -- ADD CONSTRAINT fk_prod_a_mov
    -- FOREIGN KEY (SKU_producto) REFERENCES productos (secuence_prod);

    -- ALTER TABLE movimientos
    -- ADD CONSTRAINT fk_tmov_a_mov
    -- FOREIGN KEY (id_tipo_movi) REFERENCES tipo_movimiento (secuence_tip_mov);

    -- -- DETALLE DESPACHO

    -- ALTER TABLE detalle_despacho
    -- ADD CONSTRAINT fk_col_a_ddes
    -- FOREIGN KEY (id_colegio) REFERENCES colegios (secuence_col);

    -- ALTER TABLE detalle_despacho
    -- ADD CONSTRAINT fk_prod_a_ddes
    -- FOREIGN KEY (SKU_producto) REFERENCES productos (secuence_prod);

    -- ALTER TABLE detalle_despacho
    -- ADD CONSTRAINT fk_tmov_a_ddes
    -- FOREIGN KEY (id_tipo_movi) REFERENCES tipo_movimiento (secuence_tip_mov);


-- INSERT INTO --

    -- TIPO USUARIO

    -- INSERT INTO tipo_usuario VALUES ('',1,'administrador');
    -- INSERT INTO tipo_usuario VALUES ('',2,'operador');

    -- USUARIO

    -- INSERT INTO usuario
    -- VALUES (null,001,'Test','Admin', 1,'arroshi','arroshi',null,'942394243',1);



    -- INSERT INTO `categorias`(`secuence_cat`, `id_categoria`, `nom_categoria`, `estado_categoria`) 
    -- VALUES (null,1,'viveres',1)

    -- INSERT INTO `proveedor`(`secuence_prov`, `id_proveedor`, `RUC`, `razon_social`, `tlf_proveedor`, `mail_proveedor`, `estado_proveedor`) 
    -- VALUES (null,1,'10738918300','Arroshi','942394243','nel@gmail.com',1)

    -- INSERT INTO `marca`(`secuence_mar`, `id_marca`, `nom_marca`, `estado_marca`) 
    -- VALUES (null,1,'Arroshis',1)

    -- INSERT INTO `productos`(`secuence_prod`, `id_proveedor`, `id_categoria`, `id_marca`, `nom_producto`, `cantidades`, `fecha_entrada`, `descripcion`, `guia_remision`, `num_orden`, `num_pecosa`, `estado_producto`) 
    -- VALUES (null,1,1,1,'Primer_Producto',100,'2021-05-07','1ra prueba','ni idea',1,11,1)
    
-- -----------------------------------------------INSERT INTO CATEGORIAS (INICIO)--------------------------------------------------------------------------------------------------------------------------
INSERT INTO `categorias` (`secuence_cat`, `id_categoria`, `nom_categoria`, `estado_categoria`) VALUES (NULL, '1', 'aseo', '1'), (NULL, '2', 'escolar', '1');
-- -----------------------------------------------INSERT INTO CATEGORIAS (FIN)--------------------------------------------------------------------------------------------------------------------------

-- -----------------------------------------------INSERT INTO PROVEEDOR (INICIO)--------------------------------------------------------------------------------------------------------------------------
INSERT INTO `proveedor` (`secuence_prov`, `id_proveedor`, `RUC`, `razon_social`, `tlf_proveedor`, `mail_proveedor`, `estado_proveedor`) VALUES (NULL, '1', '10567845121', 'Limpieza Asociacion AJ', '987654321', 'test@gmail.com', '1'), (NULL, '2', '11452932125', 'Tai-Loy', '963852741', 'Tai-Loy@gmail.com', '1');
-- -----------------------------------------------INSERT INTO PROVEEDOR (FIN)--------------------------------------------------------------------------------------------------------------------------

-- -----------------------------------------------INSERT INTO MARCA (INICIO)--------------------------------------------------------------------------------------------------------------------------
INSERT INTO `marca` (`secuence_mar`, `id_marca`, `nom_marca`, `estado_marca`) VALUES (NULL, '1', 'Ayudin', '1'), (NULL, '2', 'Artesco', '1');
-- -----------------------------------------------INSERT INTO MARCA (FIN)--------------------------------------------------------------------------------------------------------------------------

-- -----------------------------------------------INSERT INTO TIPO USUARIO (INICIO)-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO `tipo_usuario` (`secuence_tipo_usu`, `id_tipo_usuario`, `detalle_tipo_usuario`) VALUES (NULL, '1', 'admin'), (NULL, '2', 'operador');
-- ----------------------------------------------------INSERT INTO TIPO USUARIO (FIN)-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

-- ----------------------------------- --------------INSERT INTO  USUARIO (INICIO) -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO `usuario` (`secuence_usu`, `id_usuario`, `nom_usuario`, `ape_usuario`, `id_tipo_usuario`, `cod_usuario`, `pass_usuario`, `mail_usuario`, `tlf_usuario`, `estado_usuario`) VALUES (NULL, '75481104', 'denzel', 'sotomayor', '1', 'dsotomayor', '1337', 'denzelsotomayor@gmail.com', '981374706', '1'),(NULL, '10675550', 'pedro', 'almenara', '2', 'pedro123', 'palmenara', 'pedroalmenara@gmail.com', '987654321', '1');
                                    
--  ---------------------------------------------------INSERT INTO  USUARIO (FIN)--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    INSERT INTO colegios VALUES (null, 1618958, 'UGEL AIJA', 'Santa Rosa de Viterbo', 'Jirón ramon castilla 1219', '', '', 'Ancash', 'Huaraz', 'Huaraz', 'Huaraz', 'Primaria y Secundaria');
    INSERT INTO colegios VALUES (null, 1554815, 'UGEL AIJA', 'Ricardo Palma Carrillo', 'Carretera san nicolas s/n', '', '', 'Ancash', 'Huaraz', 'Huaraz', 'Huaraz', 'Primaria y Secundaria');
    INSERT INTO colegios VALUES (null, 0385567, 'UGEL AIJA', 'Jose Antonio Encinas', 'Macashca', '', '', 'Ancash', 'Huaraz', 'Huaraz', 'Huaraz', 'Primaria y Secundaria');
    INSERT INTO colegios VALUES (null, 1536598, 'UGEL AIJA', 'La Libertad', 'Avenida agustin gamarra s/n', '422711', '', 'Ancash', 'Huaraz', 'Huaraz', 'Huaraz', 'Primaria y Secundaria');
    INSERT INTO colegios VALUES (null, 0385492, 'UGEL AIJA', 'Cede Señor de los Milagros', 'Huaraz 02001', '', '', 'Ancash', 'Huaraz', 'Cochabamba', 'Cochabamba', 'Primaria');
    INSERT INTO colegios VALUES (null, 0385518, 'UGEL AIJA', 'Nuestra Señora Del Sagrado Corazón de Jesús', 'Quenuales 163, Huaraz 02002', '421652', '', 'Ancash', 'Huaraz', 'Independencia', 'Huaraz', 'Primaria y Secundaria');
    INSERT INTO colegios VALUES (null, 1311364, 'UGEL AIJA', 'Madre Teresa de Calcuta', 'Jiron los Incas 109', '', '', 'Ancash', 'Carhuaz', 'Carhuaz', 'Carhuaz', 'Secundaria');
    INSERT INTO colegios VALUES (null, 1042704, 'UGEL AIJA', 'Pedro Paulet', 'Jiron Quipacocha 284', '', '', 'Ancash', 'Carhuaz', 'Marcara', 'Casha corral', 'Primaria');
    INSERT INTO colegios VALUES (null, 1042662, 'UGEL AIJA', 'Pedro Pablo Atusparia', 'Avenida bolognesi 116', '', '', 'Ancash', 'Huaraz', 'Huaraz', 'Huaraz', 'Primaria y Secundaria');
    INSERT INTO colegios VALUES (null, 0385542, 'UGEL AIJA', 'Pedro Pablo Atusparia', 'Avenida bolognesi 116', '', '', 'Ancash', 'Huaraz', 'Huaraz', 'Huaraz', 'Primaria');


