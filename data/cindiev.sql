use cindiev;

create table usuario(
    num int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar (30) not null,
    numTel varchar (15),
    correo VARCHAR(50) not null,
    contrasena VARCHAR(50) not null,
    direccion VARCHAR(150) 
)

create table boleto(
    codigo int PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(20) not null,
    precio float not null 
)

create table director(
    codigo int PRIMARY KEY AUTO_INCREMENT,
    nombre_completo VARCHAR(100) not null,
    facebook VARCHAR(100),
    instagram VARCHAR(100),
    edad int,
    nacionalidad VARCHAR(20)
)

create table genero(
    codigo int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30) not null,
    clasificacion VARCHAR(30) not null 
)

create table horario(
   codigo int PRIMARY KEY AUTO_INCREMENT,
   hora VARCHAR(10) not null 
)

create table ciudad(
    codigo varchar(5) PRIMARY KEY,
    nombre varchar(15) not null unique
)

create table cine(
    codigo varchar(5) PRIMARY KEY,
    nombre varchar(30) not null unique,
    dirCalle varchar(30),
    dirNum varchar(10),
    dirColonia varchar(30) not null,
    numTel varchar(15),
    ciudad varchar(5) not null,
    foreign key(ciudad) references ciudad(codigo)
)

create table clasificacion(
    codigo varchar(5) PRIMARY KEY,
    tipo varchar(30),
    descripcion varchar(200)
)

create table pelicula(
    codigo int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) not null,
    sinopsis VARCHAR(1000) not null,
    imagen varchar(100) not null,
    clasificacion varchar(5) not null,
    cine varchar(5) not null,
    genero int not null,
    duracion VARCHAR(5),
    foreign key(clasificacion) references clasificacion(codigo),
    foreign key(cine) references cine(codigo),
    foreign key(genero) references genero(codigo)
)

create table hora_peli(
    horario int,
    pelicula int,
    PRIMARY KEY(horario, pelicula),
    proyeccion VARCHAR(15),
    Foreign Key (horario) REFERENCES horario(codigo),
    Foreign Key (pelicula) REFERENCES pelicula(codigo)
)

/*REVISAR*/
create table catalogo(
    codigo varchar(5) PRIMARY KEY,
    nombre varchar(30) not null,
    cine varchar(5) not null,
    horario int not null,
    pelicula int,
    foreign key(cine) references cine(codigo),
    foreign key(horario) references horario(codigo),
    foreign key(cine) references cine(codigo),
    foreign key(pelicula) references pelicula(codigo)
)

/*SE MODIFICO*/
create table asiento(
    codigo varchar(5) PRIMARY KEY,
    nombre varchar(10) not null
)

create table unidad_medida(
    codigo VARCHAR(5) not null,
    nombre VARCHAR(25) not null
)

create table producto(
    codigo VARCHAR(5) PRIMARY KEY not null,
    nombre VARCHAR(35) not null,
    descripcion VARCHAR(50),
    costo float not null,
    precio float not null
)

create table rep_ventas(
    num int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(30) not null,
    primerApellido varchar(30) not null,
    segundoApellido varchar(30) not null,
    numTel varchar(15) not null,
    fechaContrato date not null,
    cine varchar(5) not null,
    foreign key(cine) references cine(codigo)
)
/*Se modifico*/
create table forma_pago(
    codigo VARCHAR(5) not null PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL
)

/*Se modifico*/
create table pedido(
    num int PRIMARY KEY AUTO_INCREMENT,
    fecha date not null,
    canTotalProd int,
    subtotal float,
    IVA float,
    total float,
    cine varchar(5) not null,
    rep_Vtas int not null,
    usuario int not null,
    forma_pago VARCHAR(5),
    foreign key (cine) references cine(codigo),
    foreign key(rep_Vtas) references rep_ventas(num),
    foreign key(usuario) references usuario(num),
    Foreign Key (forma_pago) REFERENCES forma_pago(codigo)
)

create table ped_prod(
    pedido int,
    producto varchar(5),
    cantidad int not null,
    importe float,
    PRIMARY KEY(pedido, producto),
    foreign key(pedido) references pedido(num),
    foreign key(producto) references producto(codigo)
)

create table promocion(
    codigo VARCHAR(5) NOT NULL PRIMARY KEY,
    nombre VARCHAR(25) not NULL,
    descripcion VARCHAR(200)
)

create table promo_pedido(
    promocion varchar(5),
    pedido int,
    PRIMARY KEY(promocion, pedido),
    Foreign Key (promocion) REFERENCES promocion(codigo),
    Foreign Key (pedido) REFERENCES pedido(num)
)
/*se modifico*/

create table sala(
    num int not null PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) /*se puede quitar*/
)

CREATE TABLE sala_asiento (
    id SERIAL PRIMARY KEY,
    sala_id INT NOT NULL,
    asiento_codigo VARCHAR(5) NOT NULL,
    FOREIGN KEY (sala_id) REFERENCES sala(num),
    FOREIGN KEY (asiento_codigo) REFERENCES asiento(codigo)
);

create table sala_horario(
    sala int not null,
    horario int,
    PRIMARY KEY(sala, horario),
    Foreign Key (sala) REFERENCES sala(num),
    Foreign Key (horario) REFERENCES horario(codigo)
)

create table funcion(
    sala int not null,
    pelicula int,
    cine VARCHAR(5) not null,
    PRIMARY KEY(sala, pelicula, cine),
    Foreign Key (cine) REFERENCES cine(codigo),
    Foreign Key (sala) REFERENCES sala(num),
    Foreign Key (pelicula) REFERENCES pelicula(codigo)
)

create table sala_cine(
    sala int not null,
    cine VARCHAR(5),
    PRIMARY KEY(sala, cine),
    Foreign Key (sala) REFERENCES sala(num),
    Foreign Key (cine) REFERENCES cine(codigo)
)
