use cindiev 

INSERT INTO usuario (num, nombre, numTel, correo, contrasena, direccion) VALUES
    (DEFAULT, 'General', null, 'Sin correo', '123456', null),
    (DEFAULT, 'María García', '6645551234', 'maria.garcia@example.com', 'Segura123', 'Calle del Sol #123, Zona Centro, Tijuana, B.C.'),
    (DEFAULT, 'Carlos Rodríguez', '6647895678', 'carlos.rodriguez@example.com', 'MiPassw0rd', 'Avenida de las Flores #456, Playas de Tijuana, Tijuana, B.C.'),
    (DEFAULT, 'Laura Pérez', '6643339876', 'laura.perez@example.com', '1234Laura!', 'Calle del Mar #789, Hipódromo, Tijuana, B.C.'),
    (DEFAULT, 'Alejandro López', '6642224444', 'alejandro.lopez@example.com', 'L0pezPass', 'Paseo de los Pinos #567, La Mesa, Tijuana, B.C.'),
    (DEFAULT, 'Ana Torres', '6647778888', 'ana.torres@example.com', 'Ana2022!', 'Calle de las Rosas #890, Otay, Tijuana, B.C.');

INSERT INTO boleto(codigo, tipo, precio) VALUES
    (DEFAULT, 'adulto', 25.00),
    (DEFAULT, 'adulto mayor', 23.00),
    (DEFAULT, 'infantil', 20.00);

INSERT INTO director (codigo, nombre_completo, facebook, instagram, edad, nacionalidad) VALUES
    (DEFAULT, 'D. W. Griffith', null, null, 73, 'Estados Unidos'),
    (DEFAULT, 'Victor Sjöström', null, null, 80, 'Suiza'),
    (DEFAULT, 'Buster Keaton', null, null, 70, 'Estados Unidos'),
    (DEFAULT, 'Benjamin Christensen', null, null, 79, 'Dinamarca'),
    (DEFAULT, 'Frank Borzaga', null, null, 68, 'Estados Unidos'),
    (DEFAULT, 'Gabriela Sandoval', 'www.facebook.com/gabrielaivette.sandovaltorres', 'www.instagram.com/gaby_sandoval389/', 34, 'México'),
    (DEFAULT, 'Luis Estrada', null, null, 62, 'México');

INSERT INTO genero(codigo, nombre) VALUES
    (DEFAULT, 'Terror'), /*1*/
    (DEFAULT, 'Fantasía'),/*2*/
    (DEFAULT, 'Ciencia Ficción'),/*3*/
    (DEFAULT, 'Aventura'),/*4*/
    (DEFAULT, 'Animación'),/*5*/
    (DEFAULT, 'Bélico'),/*6*/
    (DEFAULT, 'Comedia'),/*7*/
    (DEFAULT, 'Documental'),/*8*/
    (DEFAULT, 'Drama'),/*9*/
    (DEFAULT, 'Western'),/*10*/
    (DEFAULT, 'Thriller'),/*11*/
    (DEFAULT, 'Policiaco'),/*12*/
    (DEFAULT, 'Musical'),/*13*/
    (DEFAULT, 'Erótico');/*14*/

INSERT INTO horario(codigo, hora) VALUES
    (DEFAULT, '8:00 am'), /*1*/
    (DEFAULT, '8:30 am'), /*2*/
    (DEFAULT, '9:00 am'),/*3*/
    (DEFAULT, '9:30 am'),/*4*/
    (DEFAULT, '10:00 am'),/*5*/
    (DEFAULT, '10:30 am'),/*6*/
    (DEFAULT, '11:00 am'),/*7*/
    (DEFAULT, '11:30 am'),/*8*/
    (DEFAULT, '12:00 pm'),/*9*/
    (DEFAULT, '12:30 pm'),/*10*/
    (DEFAULT, '1:00 pm'),/*11*/
    (DEFAULT, '1:30 pm'),/*12*/
    (DEFAULT, '2:00 pm'),/*13*/
    (DEFAULT, '2:30 pm'),/*14*/
    (DEFAULT, '3:00 pm'),/*15*/
    (DEFAULT, '3:30 pm'),/*16*/
    (DEFAULT, '4:00 pm'),/*17*/
    (DEFAULT, '4:30 pm'),/*18*/
    (DEFAULT, '5:00 pm'),/*19*/
    (DEFAULT, '5:30 pm'),/*20*/
    (DEFAULT, '6:00 pm'),/*21*/
    (DEFAULT, '6:30 pm'),/*22*/
    (DEFAULT, '7:00 pm'),/*23*/
    (DEFAULT, '7:30 pm'),/*24*/
    (DEFAULT, '8:00 pm'),/*25*/
    (DEFAULT, '8:30 pm'),/*26*/
    (DEFAULT, '9:00 pm'),/*27*/
    (DEFAULT, '9:30 pm'),/*28*/
    (DEFAULT, '10:00 pm');/*29*/

INSERT INTO ciudad(codigo, nombre) VALUES
    ('Tij', 'Tijuana'),
    ('MXCL', 'Mexicali'),
    ('TCT', 'Tecate'),
    ('RTO', 'Rosarito'),
    ('ENS', 'Ensenada'),
    ('SQN', 'San Quintin'),
    ('SFP', 'San Felipe'),
    ('HSO', 'Hermosillo'),
    ('VSP', 'Valle San Pedro');

INSERT INTO cine(codigo, nombre, dirCalle, dirNum, dirColonia, numTel, ciudad) VALUES
    ('CCS', 'Cine Cuervos', 'Quintas Campestre', null, 'El Refugio', '6646133776', 'Tij'),
    ('TNL', 'Cine Tonalá', 'Av. Revolución', '1303', 'Zona Centro', '6646880118', 'Tij'),
    ('BMAC', 'Bigmoon Autocinema', 'blvd Insurgentes', '15502', 'Rio Tijuana 3ra etapa', '6631244927', 'Tij'),
    ('BJZ', 'Cine Bujazán', 'Av Constitución', '1337', 'Zona Centro', null, 'Tij');

INSERT INTO clasificacion(codigo, tipo, descripcion) VALUES
    ('AA', 'Infantil', 'Películas con atractivo infantil, 
    comprensibles para niños menores de siete años de edad.' ),
    ('A', 'Todo público', 'Películas para todo público.'),
    ('B', '12 años en adelante', 'Películas para adolescentes de 12 años en adelante.'),
    ('B15', '15 años en adelante', 'Película no recomendable para menores de 15 años de edad.'),
    ('C', '18 años en adelante', 'Películas para adultos de 18 años en adelante.'),
    ('D', 'Solo adultos', 'Películas para adultos, con sexo explícito, lenguaje procaz o alto grado de violencia.');

INSERT INTO pelicula(codigo, nombre, sinopsis, imagen, clasificacion, cine, genero, duracion) VALUES
    (DEFAULT, 'El que recibe las bofetadas', 'Un científico traicionado por su mentor y su esposa pierde todo y huye al circo, 
    donde se convierte en "El que recibe las bofetadas", un payaso cuyo acto simboliza su dolor y humillación. Mientras intenta 
    reconstruir su vida, se enamora de una joven artista, pero su pasado oscuro y los intereses egoístas de quienes lo rodean 
    amenazan con destruirlo todo. Un drama conmovedor de amor, venganza y redención en el mundo cruel del circo.', 'imagen.jpg', 'B15', 'CCS', 9, '95'),
    (DEFAULT, 'El Colegial', 'Ronald es un estudiante que antepone el intelecto a la fuerza muscular de los deportistas. Pero su novia no piensa 
    lo mismo, por lo que le espeta que o se convierte en un deportista o adiós noviazgo. A Ronald, pues, no le queda más remedio que intentar destacar 
    en algún deporte cuando ingresa en la Universidad.', 'imagen.jpg', 'B', 'CCS', 7, '66'),
    (DEFAULT, 'Las dos huérfanas', 'Una joven ciega y su hermana son separadas tras llegar a París en busca de una vida mejor. Mientras una cae en manos 
    de criminales que explotan su discapacidad, la otra lucha desesperadamente por encontrarla, enfrentando la crueldad de la sociedad y descubriendo secretos 
    inesperados. Un conmovedor drama de lucha, sacrificio y esperanza, ambientado en la opulencia y las sombras de la Francia del siglo XIX.', 'imagen.jpg', 'B', 'CCS', 9, '150'),
    (DEFAULT, 'La misteriosa X', 'Por error, se acusa de espionaje a un teniente de la marina en el momento de su partida para la guerra. El espía enemigo que le hizo condenar 
    intenta chantajear a su esposa, mientras el militar desconfía de la fidelidad de la mujer.', 'imagen.jpg', 'A', 'CCS', 9, '84'),
    (DEFAULT, 'El séptimo cielo', 'Un joven (Charles Farrell) trabaja limpiando las alcantarillas de París, soñando con ser ascendido y poder barrer las calles. Lamentándose de su
     destino, niega la existencia de Dios con el pretexto de su condición actual, lo que es escuchado por el padre Chevillon (Émile Chautard), quien al escuchar su queja, le regala 
     dos medallas religiosas y le ofrece el trabajo de barrendero con el que sueña.', 'imagen.jpg', 'A', 'CCS', 9, '120');

INSERT INTO hora_peli(horario, pelicula) VALUES
    (1, 1),
    (5, 1),
    (9, 1),
    (13, 1),
    (17, 1),
    (21, 1),
    (25, 1),
    (29, 1),
    (1, 2),
    (4, 2),
    (7, 2),
    (10, 2),
    (13, 2),
    (16, 2),
    (19, 2),
    (22, 2),
    (25, 2),
    (28, 2),
    (1, 3),/*150*/
    (7, 3),
    (13, 3),
    (19, 3),
    (1, 4),/*84*/
    (5, 4),
    (9, 4),
    (13, 4),
    (20, 4),
    (1, 5),/*120*/
    (5, 5),
    (10, 5),
    (15, 5),
    (20, 5),
    (25, 5);

INSERT INTO asiento(codigo, nombre) VALUES
    ('A1','A1'),
    ('A2','A2'),
    ('A3','A3'),
    ('A4','A4'),
    ('A5','A5'),
    ('A6','A6'),
    ('A7','A7'),
    ('A8','A8'),
    ('A9','A9'),    
    ('A10','A10'),
    ('A11','A11'),
    ('A12','A12'),
    ('A13','A13'),
    ('A14','A14'),
    ('A15','A15'),
    ('A16','A16'),
    ('A17','A17'),
    ('A18','A18'),
    ('A19','A19'),
    ('A20','A20'),
    ('B1','B1'),
    ('B2','B2'),
    ('B3','B3'),
    ('B4','B4'),
    ('B5','B5'),
    ('B6','B6'),
    ('B7','B7'),
    ('B8','B8'),
    ('B9','B9'),    
    ('B10','B10'),
    ('B11','B11'),
    ('B12','B12'),
    ('B13','B13'),
    ('B14','B14'),
    ('B15','B15'),
    ('B16','B16'),
    ('B17','B17'),
    ('B18','B18'),
    ('B19','B19'),
    ('B20','B20'),
    ('C1','C1'),
    ('C2','C2'),
    ('C3','C3'),
    ('C4','C4'),
    ('C5','C5'),
    ('C6','C6'),
    ('C7','C7'),
    ('C8','C8'),
    ('C9','C9'),    
    ('C10','C10'),
    ('C11','C11'),
    ('C12','C12'),
    ('C13','C13'),
    ('C14','C14'),
    ('C15','C15'),
    ('C16','C16'),
    ('C17','C17'),
    ('C18','C18'),
    ('C19','C19'),
    ('C20','C20'),
    ('D1','D1'),
    ('D2','D2'),
    ('D3','D3'),
    ('D4','D4'),
    ('D5','D5'),
    ('D6','D6'),
    ('D7','D7'),
    ('D8','D8'),
    ('D9','D9'),    
    ('D10','D10'),
    ('D11','D11'),
    ('D12','D12'),
    ('D13','D13'),
    ('D14','D14'),
    ('D15','D15'),
    ('D16','D16'),
    ('D17','D17'),
    ('D18','D18'),
    ('D19','D19'),
    ('D20','D20'),
    ('E1','E1'),
    ('E2','E2'),
    ('E3','E3'),
    ('E4','E4'),
    ('E5','E5'),
    ('E6','E6'),
    ('E7','E7'),
    ('E8','E8'),
    ('E9','E9'),    
    ('E10','E10'),
    ('E11','E11'),
    ('E12','E12'),
    ('E13','E13'),
    ('E14','E14'),
    ('E15','E15'),
    ('E16','E16'),
    ('E17','E17'),
    ('E18','E18'),
    ('E19','E19'),
    ('E20','E20'),
    ('F1','F1'),
    ('F2','F2'),
    ('F3','F3'),
    ('F4','F4'),
    ('F5','F5'),
    ('F6','F6'),
    ('F7','F7'),
    ('F8','F8'),
    ('F9','F9'),    
    ('F10','F10'),
    ('F11','F11'),
    ('F12','F12'),
    ('F13','F13'),
    ('F14','F14'),
    ('F15','F15'),
    ('F16','F16'),
    ('F17','F17'),
    ('F18','F18'),
    ('F19','F19'),
    ('F20','F20'),
    ('G1','G1'),
    ('G2','G2'),
    ('G3','G3'),
    ('G4','G4'),
    ('G5','G5'),
    ('G6','G6'),
    ('G7','G7'),
    ('G8','G8'),
    ('G9','G9'),    
    ('G10','G10'),
    ('G11','G11'),
    ('G12','G12'),
    ('G13','G13'),
    ('G14','G14'),
    ('G15','G15'),
    ('G16','G16'),
    ('G17','G17'),
    ('G18','G18'),
    ('G19','G19'),
    ('G20','G20'),
    ('H1','H1'),
    ('H2','H2'),
    ('H3','H3'),
    ('H4','H4'),
    ('H5','H5'),
    ('H6','H6'),
    ('H7','H7'),
    ('H8','H8'),
    ('H9','H9'),    
    ('H10','H10'),
    ('H11','H11'),
    ('H12','H12'),
    ('H13','H13'),
    ('H14','H14'),
    ('H15','H15'),
    ('H16','H16'),
    ('H17','H17'),
    ('H18','H18'),
    ('H19','H19'),
    ('H20','H20'),
    ('I1','I1'),
    ('I2','I2'),
    ('I3','I3'),
    ('I4','I4'),
    ('I5','I5'),
    ('I6','I6'),
    ('I7','I7'),
    ('I8','I8'),
    ('I9','I9'),    
    ('I10','I10'),
    ('I11','I11'),
    ('I12','I12'),
    ('I13','I13'),
    ('I14','I14'),
    ('I15','I15'),
    ('I16','I16'),
    ('I17','I17'),
    ('I18','I18'),
    ('I19','I19'),
    ('I20','I20'),
    ('J1','J1'),
    ('J2','J2'),
    ('J3','J3'),
    ('J4','J4'),
    ('J5','J5'),
    ('J6','J6'),
    ('J7','J7'),
    ('J8','J8'),
    ('J9','J9'),    
    ('J10','J10'),
    ('J11','J11'),
    ('J12','J12'),
    ('J13','J13'),
    ('J14','J14'),
    ('J15','J15'),
    ('J16','J16'),
    ('J17','J17'),
    ('J18','J18'),
    ('J19','J19'),
    ('J20','J20'),
    ('K1','K1'),
    ('K2','K2'),
    ('K3','K3'),
    ('K4','K4'),
    ('K5','K5'),
    ('K6','K6'),
    ('K7','K7'),
    ('K8','K8'),
    ('K9','K9'),    
    ('K10','K10'),
    ('K11','K11'),
    ('K12','K12'),
    ('K13','K13'),
    ('K14','K14'),
    ('K15','K15'),
    ('K16','K16'),
    ('K17','K17'),
    ('K18','K18'),
    ('K19','K19'),
    ('K20','K20');

INSERT INTO unidad_medida(codigo, nombre) VALUES
    ('H87',	'Pieza'),
    ('EA',	'Elemento'),
    ('E48',	'Unidad de Servicio'),
    ('ACT',	'Actividad'),
    ('KGM',	'Kilogramo'),
    ('E51',	'Trabajo'),
    ('A9',	'Tarifa'),
    ('MTR',	'Metro'),
    ('AB',	'Paquete a granel'),
    ('BB',	'Caja base'),
    ('KT',	'Kit'),
    ('SET',	'Conjunto'),
    ('LTR',	'Litro'),
    ('XBX',	'Caja'),
    ('MON',	'Mes'),
    ('HUR',	'Hora'),
    ('MTK',	'Metro cuadrado'),
    ('11',	'Equipos'),
    ('MGM',	'Miligramo'),
    ('XPK',	'Paquete'),
    ('XKI',	'Kit (Conjunto de piezas)'),
    ('AS',	'Variedad'),
    ('GRM',	'Gramo'),
    ('PR',	'Par'),
    ('DPC',	'Docenas de piezas'),
    ('xun',	'Unidad'),
    ('DAY',	'Día'),
    ('XLT',	'Lote'),
    ('10',	'Grupos'),
    ('MLT',	'Mililitro'),
    ('E54',	'Viaje');

INSERT INTO producto (codigo, nombre, descripcion, costo, precio) VALUES
('1001', 'Boleto general adulto', 'Boleto general para acceder a la sala de cine.', 10, 25),
('1002', 'Boleto general infantil', 'Boleto exclusivo para personas menores a 15 años.', 10, 20),
('1003', 'Boleto general adulto mayor', 'Boleto exclusivo para adultos mayores.', 10, 23),
('3001', 'Palomitas chicas con mantequilla', 'Bote chico de palomitas con mantequilla, 20gr', 20, 50),
('3002', 'Palomitas medianas con mantequilla', 'Bote mediano de palomitas con mantequilla, 60gr', 20, 59),
('3003', 'Palomitas grandes con mantequilla', 'Bote grande de palomitas con mantequilla, 80gr', 20, 65),
('3004', 'Palomitas jumbo con mantequilla', 'Bote jumbo de palomitas con mantequilla, 90gr', 20, 70),
('3005', 'Palomitas chicas naturales', 'Bote chico de palomitas naturales, 20gr', 18, 48),
('3006', 'Palomitas medianas naturales', 'Bote mediano de palomitas naturales, 60gr', 18, 56),
('3007', 'Palomitas grandes naturales', 'Bote grande de palomitas naturales, 80gr', 18, 63),
('3008', 'Palomitas jumbo naturales', 'Bote jumbo de palomitas naturales, 90gr', 18, 68),
('4001', 'Refresco chico 400ml', 'Refresco de 400ml, variedad de sabores a elección del cliente', 20, 40),
('4002', 'Refresco mediano 600ml', 'Refresco de 600ml, variedad de sabores a elección del cliente', 20, 60),
('4003', 'Refresco grande 880ml', 'Refresco de 880ml, variedad de sabores a elección del cliente', 20, 83),
('4004', 'Refresco jumbo 1L', 'Refresco de 1L, variedad de sabores a elección del cliente', 20, 87),
('4005', 'Refresco de 880ml con opción de refil', 'Refresco de 1L, variedad de sabores a elección del cliente con libertad de rellenar', 20, 85),
('5001', 'Nachos Chicos', 'Charola de nachos individual de 200gr', 35, 68),
('5002', 'Nachos grandes', 'Charola de nachos de 300gr', 43, 80),
('5003', 'Hot Dog', 'Hot dog caliente con verduras, ketchup y mostaza', 25, 70),
('6001', 'Corneto', 'Helado en barquillo empaquetado variedad de sabores', 22, 30),
('6002', 'Paleta Magnum con cacahuate', 'Helado de crema cubierto de chocolate con cacahuate', 23, 35),
('6003', 'Paleta Solero de Limón', '', 18, 28),
('6004', 'Paleta Solero Naranja', 'Paleta solero sabor naranja', 18, 28),
('6005', 'Mordisco', 'Helado tipo sándwich sabor vainilla y chocolate', 12, 20),
('6006', 'M&M', 'Paquete de chocolates M&M chocolate', 15.3, 30),
('6007', 'Sniker', 'Barra de chocolate rellena de crema y cacahuate', 14, 28),
('6008', 'Milky Way', 'Barra de chocolate rellena de cajeta', 14, 28);
   


INSERT INTO rep_ventas(num, nombre, primerApellido, segundoApellido, numTel, fechaContrato, cine) VALUES
    (DEFAULT, 'Jonathan', 'Zamudio', 'Corona', '6646133776', '15/09/2024', 'CCS'),
    (DEFAULT, 'Melissa', 'Flores', 'Cervantes', '6645522123', '1/09/2024', 'CCS');

INSERT INTO forma_pago(codigo, nombre) VALUES
    ('01',	'Efectivo'),
    ('02',	'Cheque nominativo'),
    ('03',	'Transferencia electrónica de fondos'),
    ('04',	'Tarjeta de crédito'),
    ('05',	'Monedero electrónico'),
    ('06',	'Dinero electrónico'),
    ('08',	'Vales de despensa'),
    ('12',	'Dación en pago'),
    ('13',	'Pago por subrogación'),
    ('14',	'Pago por consignación'),
    ('15',	'Condonación'),
    ('17',	'Compensación'),
    ('23',	'Novación'),
    ('24',	'Confusión'),
    ('25',	'Remisión de deuda'),
    ('26',	'Prescripción o caducidad'),
    ('27',	'A satisfacción del acreedor'),
    ('28',	'Tarjeta de débito'),
    ('29',	'Tarjeta de servicios'),
    ('30',	'Aplicación de anticipos'),
    ('99',	'Por definir');

INSERT INTO pedido(num, fecha, canTotalProd, subtotal, IVA, total, cine, rep_Vtas, usuario, forma_pago) VALUES
    (DEFAULT, '2024/12/01', 4, 180.00, 14.4, 194.40, 'CCS', 1, 1, '01'),
    (DEFAULT, '2024/12/02', 3, 81.15, 1.85, 83.00, 'CCS', 1, 2, '04'),
    (DEFAULT, '2024/12/02', 1, 25.00, 1.85, 26.85, 'CCS', 2, 1, '01');


INSERT INTO ped_prod(pedido, producto, cantidad, importe) VALUES
    (1, 1002, 1, 20.00),
    (1, 1003, 1, 23.00),
    (1, 3003, 1, 65.00),
    (1, 5003, 1, 70.00),
    (2, 1001, 1, 25.00),
    (2, 1002, 1, 20.00),
    (2, 4001, 1, 31.15),
    (3, 1001, 1, 25.00);

INSERT INTO promocion(codigo, nombre, descripcion) VALUES
    ('MTCNE', 'Martes de cine', 'Descuento del 25% en todos los voletos cada martes del año en curso'),
    ('DLPTS', 'Dulcería para todos', 'Descuentos del 10% en toda la dulcería los miercoles del año en curso');

INSERT INTO promo_pedido(promocion, pedido) VALUES
    ('MTCNE', 3);

INSERT INTO sala(num, nombre) VALUES
    (DEFAULT, 'Uno'),
    (DEFAULT, 'Dos'),
    (DEFAULT, 'Tres'),
    (DEFAULT, 'Cuatro');

INSERT INTO sala_horario(sala, horario) VALUES
    (1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 6), (1, 7), (1, 8), (1, 9), (1, 10),
    (1, 11), (1, 12), (1, 13), (1, 14), (1, 15), (1, 16), (1, 17), (1, 18), (1, 19), (1, 20),
    (1, 21), (1, 22), (1, 23), (1, 24), (1, 25), (1, 26), (1, 27), (1, 28), (1, 29),
    (2, 1), (2, 2), (2, 3), (2, 4), (2, 5), (2, 6), (2, 7), (2, 8), (2, 9), (2, 10),
    (2, 11), (2, 12), (2, 13), (2, 14), (2, 15), (2, 16), (2, 17), (2, 18), (2, 19), (2, 20),
    (2, 21), (2, 22), (2, 23), (2, 24), (2, 25), (2, 26), (2, 27), (2, 28), (2, 29),
    (3, 1), (3, 2), (3, 3), (3, 4), (3, 5), (3, 6), (3, 7), (3, 8), (3, 9), (3, 10),
    (3, 11), (3, 12), (3, 13), (3, 14), (3, 15), (3, 16), (3, 17), (3, 18), (3, 19), (3, 20),
    (3, 21), (3, 22), (3, 23), (3, 24), (3, 25), (3, 26), (3, 27), (3, 28), (3, 29),
    (4, 1), (4, 2), (4, 3), (4, 4), (4, 5), (4, 6), (4, 7), (4, 8), (4, 9), (4, 10),
    (4, 11), (4, 12), (4, 13), (4, 14), (4, 15), (4, 16), (4, 17), (4, 18), (4, 19), (4, 20),
    (4, 21), (4, 22), (4, 23), (4, 24), (4, 25), (4, 26), (4, 27), (4, 28), (4, 29);

INSERT INTO funcion(sala, pelicula, cine) VALUES
    (1, 1, 'CCS'),
    (2, 2, 'CCS'),
    (3, 4, 'CCS'),
    (1, 3, 'BJZ'),
    (2, 5, 'BJZ'),
    (1, 4, 'TNL'),
    (2, 1, 'TNL'),
    (1, 3, 'BMAC');


INSERT INTO sala_cine(sala, cine) VALUES
    (1, 'CCS'),
    (2, 'CCS'),
    (3, 'CCS'),
    (4, 'CCS'),
    (1, 'TNL'),
    (2, 'TNL'),
    (3, 'TNL'),
    (1, 'BMAC'),
    (1, 'BJZ'),
    (2, 'BJZ');


/*Revisar*/
INSERT INTO sala_asiento (sala_id, asiento_codigo)
SELECT s.num, a.codigo
FROM sala s
CROSS JOIN asiento a;
