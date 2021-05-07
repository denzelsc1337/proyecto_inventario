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
    id_colegio INT (6) NOT NULL,
    dir_colegio VARCHAR (30) NOT NULL,
    tlf_colegio CHAR (9),
    mail_colegio VARCHAR (40),
    cod_modu_colegio INT NOT NULL,
    depa_colegio VARCHAR (15) NOT NULL,
    dist_colegio VARCHAR (15) NOT NULL,
    loca_colegio VARCHAR (15) NOT NULL,
    nom_director VARCHAR (40) NOT NULL,
    estado_colegio BOOLEAN
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
    nom_producto VARCHAR (30) NOT NULL,
    cantidades INT NOT NULL,
    fecha_entrada DATE NOT NULL,
    presentacion VARCHAR(50),
    estado_producto BOOLEAN
);

DROP TABLE IF EXISTS movimientos;
CREATE TABLE movimientos
(
    secuence_mov INT auto_increment PRIMARY KEY NOT NULL,
    id_movimiento INT NOT NULL,
    tipo_movi VARCHAR (10) NOT NULL,
    estado_movimiento BOOLEAN
);

DROP TABLE IF EXISTS detalle_ingreso;
CREATE TABLE detalle_ingreso
(
    secuence_det_ing INT auto_increment PRIMARY KEY NOT NULL,
    id_det_ing INT (6) NOT NULL,
    id_proveedor INT (6) NOT NULL,
    id_categoria INT (6) NOT NULL,
    SKU_producto INT NOT NULL,
    id_usuario INT (6) NOT NULL,
    id_movimiento INT NOT NULL,
    orden_servicio INT NOT NULL,
    num_pecosa INT NOT NULL,
    guia_movi INT NOT NULL,
    cant_prod_ing INT NOT NULL,
    fecha_ing DATE,
    comentario VARCHAR (50),
    estado_deta_desp BOOLEAN
);

DROP TABLE IF EXISTS detalle_despacho;
CREATE TABLE detalle_despacho
(
    secuence_det_des INT auto_increment PRIMARY KEY NOT NULL,
    id_det_des INT (6) NOT NULL,
    id_usuario INT (6) NOT NULL,
    id_colegio INT (6) NOT NULL,
    SKU_producto INT NOT NULL,
    cant_prod_des INT NOT NULL,
    fecha_des DATE,
    id_movimiento INT NOT NULL,
    nom_director VARCHAR (40) NOT NULL,
    comentario VARCHAR (50),
    estado_deta_desp BOOLEAN
);


-- RELACIONES --

    -- TIPO USUARIO A ->

    ALTER TABLE usuario
    ADD CONSTRAINT fk_tusu_a_usu
    FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario (secuence_tipo_usu);

    -- USUARIO A ->

    ALTER TABLE detalle_ingreso
    ADD CONSTRAINT fk_usu_a_ding
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

    ALTER TABLE detalle_ingreso
    ADD CONSTRAINT fk_prov_a_ding
    FOREIGN KEY (id_proveedor) REFERENCES proveedor (secuence_prov);

    -- MOVIMIENTO A ->

    ALTER TABLE detalle_ingreso
    ADD CONSTRAINT fk_mov_a_ding
    FOREIGN KEY (id_movimiento) REFERENCES movimientos (secuence_mov);

    ALTER TABLE detalle_despacho
    ADD CONSTRAINT fk_mov_a_ddes
    FOREIGN KEY (id_movimiento) REFERENCES movimientos (secuence_mov);


    -- PRODUCTO A ->

    ALTER TABLE detalle_ingreso
    ADD CONSTRAINT fk_prod_a_ding
    FOREIGN KEY (SKU_producto) REFERENCES productos (secuence_prod);

    -- MARCA A ->

    ALTER TABLE productos
    ADD CONSTRAINT fk_mar_a_prod
    FOREIGN KEY (id_marca) REFERENCES marca (secuence_mar);

    -- ALTER TABLE productos
    -- ADD CONSTRAINT fk_prov_a_prod
    -- FOREIGN KEY (id_proveedor) REFERENCES proveedor (secuence_prov);


    -- -- MOVIMIENTOS

    -- ALTER TABLE movimientos
    -- ADD CONSTRAINT fk_prov_a_mov
    -- FOREIGN KEY (id_proveedor) REFERENCES proveedor (secuence_prov);

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

INSERT INTO `tipo_usuario` (`secuence_tipo_usu`, `id_tipo_usuario`, `detalle_tipo_usuario`) VALUES (NULL, '001', 'admin');

    -- USUARIO
INSERT INTO `usuario` (`secuence_usu`, `id_usuario`, `nom_usuario`, `ape_usuario`, `id_tipo_usuario`, `cod_usuario`, `pass_usuario`, `mail_usuario`, `tlf_usuario`, `estado_usuario`)
VALUES (NULL, '001', 'ivan', 'leon', '1', 'ileonhilario', '123456', 'ivanleonhilario@gmail.com', '987654321', NULL);
select * from tipo_usuario;
select * from usuario;

select * from usuario where cod_usuario = "ileonhilario" and pass_usuario = 123456

