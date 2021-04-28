DROP DATABASE if EXISTS atlazdb;
CREATE DATABASE atlazdb;
USE atlazdb;
CREATE TABLE usuarios(
  user VARCHAR (50) PRIMARY KEY NOt NULL,
  pass VARCHAR (50) NOT NULL
);
INSERT INTO
  usuarios(user, pass)
VALUES("dextter1913", "123");
CREATE TABLE empleados(
    idEmp VARCHAR (20) PRIMARY KEY NOT NULL,
    nombreEmp VARCHAR (50) NOT NULL,
    apellidoEmp VARCHAR (50) NOT NULL,
    telefonoEmp VARCHAR (20) NOT NULL,
    direccionEmp VARCHAR (50) NOT NULL,
    correoEmp VARCHAR (50) NOT NULL,
    fechanacEmp DATE NOT NULL,
    user VARCHAR (50) NOT NULL,
    index(user),
    FOREIGN KEY (user) REFERENCES usuarios(user)
  );
INSERT INTO
  empleados(
    idEmp,
    nombreEmp,
    apellidoEmp,
    telefonoEmp,
    direccionEmp,
    correoEmp,
    fechanacEmp,
    user
  )
VALUES(
    "1035391050",
    "Cristian Orlando",
    "Aguirre Cataño",
    "3166857000",
    "cra 33 47 35 int 172",
    "clau32usa@gmail.com",
    1994-07-16,
    "dextter1913"
  );
CREATE TABLE cliente(
    idCl VARCHAR (20) PRIMARY KEY NOT NULL,
    nombreCl VARCHAR (50) NOT NULL,
    apellidoCl VARCHAR (50) NOT NULL,
    ciudadCl VARCHAR (30) NOT NULL,
    direccionCl VARCHAR (50) NOT NULL,
    correoCl VARCHAR (50) NOT NULL,
    telefonoCl VARCHAR (20) NOT NULL,
    fechanacCl VARCHAR (255) NOT NULL,
    user VARCHAR (50) NOT NULL,
    index(user),
    FOREIGN KEY (user) REFERENCES usuarios (user)
  );
CREATE TABLE categorias(
    nomCategoria VARCHAR (50) PRIMARY KEY NOT NULL
  );
CREATE TABLE productos(
    idProd INTEGER (20) PRIMARY KEY AUTO_INCREMENT,
    nomProd VARCHAR (50) NOT NULL,
    precioProd float (25) NOT NULL,
    precioVenta float (25) NOT NULL,
    nomCategoria VARCHAR (50) NOT NULL,
    descripcionProd TEXT NOT NULL,
    Stock INTEGER (3) NOT NULL,
    user VARCHAR (50) NOT NULL,
    index (nomCategoria),
    FOREIGN KEY (nomCategoria) REFERENCES categorias(nomCategoria),
    INDEX (user),
    FOREIGN KEY (user) REFERENCES usuarios (user)
  );
INSERT INTO
  categorias(nomCategoria)
VALUES("Mercado");
INSERT INTO
  categorias(nomCategoria)
VALUES("Tecnología");
INSERT INTO
  categorias(nomCategoria)
VALUES("Electrodomésticos");
INSERT INTO
  categorias(nomCategoria)
VALUES("Hogar");
INSERT INTO
  categorias(nomCategoria)
VALUES("Moda y accesorios");
INSERT INTO
  categorias(nomCategoria)
VALUES("Salud y belleza");
INSERT INTO
  categorias(nomCategoria)
VALUES("Bebés, niños y juguetería");
INSERT INTO
  categorias(nomCategoria)
VALUES("Deportes");
INSERT INTO
  categorias(nomCategoria)
VALUES("Ferretería");
CREATE TABLE facturaVentas(
    Nfactura INTEGER (25) PRIMARY KEY AUTO_INCREMENT,
    fechaFactura DATE NOT NULL,
    ValorFactura FLOAT (25) NULL
  );
CREATE TABLE venta(
    idventa INTEGER (20) PRIMARY KEY AUTO_INCREMENT,
    fechaventa DATE NOT NULL,
    cantidad INTEGER (10) NOT NULL,
    totalV FLOAT (25) NOT NULL,
    Estadoventa VARCHAR (25) NULL,
    cliente VARCHAR (20) NOT NULL,
    producto INTEGER (20) NOT NULL,
    Factura INTEGER (25) NULL,
    index(cliente),
    FOREIGN KEY (cliente) REFERENCES cliente(idCl),
    index(producto),
    FOREIGN KEY (producto) REFERENCES productos(idProd),
    index(Factura),
    FOREIGN KEY (Factura) REFERENCES facturaVentas(Nfactura)
  );
INSERT INTO
  productos(
    nomProd,
    precioProd,
    precioVenta,
    nomCategoria,
    descripcionProd,
    Stock,
    user
  )
VALUES(
    "NoteBook vivoB Asus",
    1560000,
    2700000,
    "Tecnología",
    "Pantalla 14 LCD SSD512GB, 12GBDDR4, Ryzen73700U",
    20,
    "dextter1913"
  ),(
    "Macbook pro",
    1950000,
    3200000,
    "Tecnología",
    "Pantalla 15 LCD SSD1TB, 8GBDDR4, Core i7 Gen9",
    25,
    "dextter1913"
  );
INSERT INTO
  cliente(
    idCl,
    nombreCl,
    apellidoCl,
    ciudadCl,
    direccionCl,
    correoCl,
    telefonoCl,
    fechanacCl,
    user
  )
VALUES(
    '1000764838',
    'Norena',
    'Godoy',
    'Medellín Antioquia',
    'Cra 33 47 35',
    'Norenagodoy90@gmail.com',
    '3135779037',
    '1998-08-04',
    'dextter1913'
  ),(
    '1035391050',
    'Cristian',
    'Aguirre',
    'Medellín Antioquia',
    'carrera 33 47 35',
    'clau32usa@gmail.com',
    '3166857000',
    '1994-07-16',
    'dextter1913'
  ),(
    '32290398',
    'Claudia',
    'Cataño',
    'Medellín Antioquia',
    'Cra 33 # 47 35',
    'claudiacatano001@gmail.com',
    '3147555068',
    '2021-03-01',
    'dextter1913'
  );