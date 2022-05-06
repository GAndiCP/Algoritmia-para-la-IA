/*drop database if exists webcarrito;*/
create database webcarrito;
use webcarrito;

/*CREACION DE LAS TABLAS*/
create table Usuario(
     idUsuario int primary key auto_increment,
     Nombres char(30) not null,
     apPaterno char(30) not null,
     apMaterno char(30) not null,
     Correo char(30) not null,
     userName char(30)not null,
     Contraseña char(30) not null
);

create table Productos( 
     idProducto int primary key auto_increment,
     Marca char(30) not null,
     Modelo char(30) not null,
     Procesador char(30) not null,
     tarjetaGrafica char(30) not null,
     Ram char(30) not null,
     Vram char(30) not null,
     discoDuro char(30) not null,
     discoCapacidad char(30) not null,
     Imagen char(30)not null
); 

create table ProductosPrecio( 
     idProducto int auto_increment primary key references Productos,
     Precio float not null
); 

create table UsuarioTarjeta(
     idPropietario int primary key auto_increment,
     Propietario char(30) not null,
	 numeroTarjeta char(16) not null,
	 mesExpiracion char(15) not null,
	 añoExpiracion char(10) not null,
     Cvv char(3)not null
     );
     
create table Compras( 
     idFactura int primary key auto_increment,
     idProducto int references Productos,
     Procesador char(30)not null,
     Ram char(30)not null,
     tarjetaGrafica char(30)not null,
     Vram char(30)not null,
     discoDuro char(30)not null,
     discoCapacidad char(30)not null,
     Cantidad int not null,
     Precio float not null
     );

/*INSERCION DE DATOS*/
insert usuarioTarjeta(Propietario,numeroTarjeta,mesExpiracion,añoExpiracion,Cvv)values
('Giomar Andi','7540629616402581','Septiembre','2025','128');

insert Usuario(Nombres,apPaterno,apMaterno,Correo,userName,Contraseña)values
('Giomar Andi','Chauca','Palacios','andi@gmail.com','G_Andi','ingresodirecto');

insert Productos(Marca,Modelo,Procesador,tarjetaGrafica,Ram,Vram,discoDuro,discoCapacidad,Imagen)values
('Laptop HP','15-ef1020la','Ryzen 7 4700U','AMD Radeon Graphics','8GB','2GB','HDD','1TB','1.png'),                  
('Laptop ACER','A515-54-597Z','i5 10210U','Intel UHD','8GB','2GB','HDD','1TB','2.png'),                               
('Laptop LENOVO','IdeaPad 5','Ryzen 5','AMD Radeon Graphics','4GB','2GB','SSD','512GB','3.png'),  
('Laptop ACER','Aspire 5','i5 1133U4','Intel UHD','8GB','2GB','HDD','1TB','4.png'),   
('Laptop LENOVO','IdeaPad Flex 3','MediaTek','ARM Mali-G72','4GB','2GB','HDD','1TB','5.png'),   
('Laptop ASUS','TUF DASH F15 FX516PC','i7 11a Gen','NVIDIA GeForceRTX3050','16GB','8GB','SSD','1TB','6.png'),   
('Laptop TOSHIBA','Dynabook Toshiba Tecra A40-G','Intel Celeron','Intel UHD','8GB','4GB','SSD','512GB','7.png'),  
('Laptop ACER','Nitro 5 Gamer','i5 10300H','NVIDIA GeForceGTX1650','16GB','8GB','SSD','1TB','8.png'),  
('Laptop ASUS','VivoBook 15','i5 11a Gen','Intel Iris X Graphics','8GB','4GB','SSD','512GB','9.png'),    
('Laptop ACER','Nitro 5 Gamer','i5 11400H','NVIDIA GeForceRTX3050','16GB','4GB','SDD','512GB','10.png'),   
('Laptop HP','15-ef1009la','Ryzen 3 4300U','AMD Radeon Graphics','4GB','4GB','SDD','512GB','11.png'),   
('Laptop HUAWEI','MateBook D14','i5 1021U','Intel UHD Graphics 620','8GB','4GB','SDD','512GB','12.png'),  
('Laptop ASUS','VivoBook K513ea','i7 11a Gen','Intel Iris X Graphics','12GB','4GB','SDD','512GB','13.png'),  
('Laptop ASUS','X415JA','i3 10a Gen','Intel UHD Graphics','4GB','2GB','HDD','128GB','14.png'), 
('Laptop HUAWEI','MateBook 13s','i7 11370H','Intel Iris X Graphics','16GB','2GB','SSD','512GB','15.png'),   
('Laptop APPLE','Macbook Air','Apple M1','Apple','8GB','4GB','SSD','512GB','16.png'),    
('Laptop DELL','G515SE','AMD Ryzen 7','AMD Radeon Graphics','16GB','6GB','SDD','512GB','17.png'),  
('Laptop DELL','VOSTROS 3400','i5 9342U','Intel UHD','8GB','4GB','HDD','1TB','18.png'),   
('Laptop HP','Pavilion Gaming 15-dk1023la','i7 10750H','NVIDIA GeForceRTX2060','12GB','4GB','SDD','512GB','19.png'),  
('Laptop LENOVO','YOGA Slim','i5 9250F','Intel Iris Xe Graphics','4GB','2GB','HDD','1TB','20.png');  

insert productosprecio(Precio)values
(2999.90),(3045.90),(3199.90),(3159.90),(2823.90),(4999.90),(1099.90),(3399.90),(2869.90),(3890.90),(1989.90),
(2599.90),(2899.90),(2299.90),(2199.90),(3089.90),(2899.90),(2999.90),(4899.90),(2799.90);

/*PROCEDIMIENTOS ALMACENADOS*/
create procedure usp_Validar(
    in _userName char(30),
    in _Contrasena char(30)
    )
    select*from Usuario where userName=_userName and Contraseña=_Contraseña;

create procedure usp_Validar2(
    in _Propietario char(30),
    in _numeroTarjeta char(16),
    in _mesExpiracion char(30),
    in _añoExpiracion char(30),
    in _Cvv char(3)
    )
    select*from usuarioTarjeta where Propietario=_Propietario and numeroTarjeta=_numeroTarjeta 
    and mesExpiracion=_mesExpiracion and añoExpiracion=_añoExpiracion and Cvv=_Cvv;

create procedure usp_InsertarCompra(
	in _idProducto int,
    in _Procesador char(30),
    in _Ram char(30),
    in _tarjetaGrafica char(30),
    in _Vram char(30),
    in _discoDuro char(30),
    in _discoCapacidad char(30),
    in _Cantidad int,
    in _Precio float
	)
    insert Compras(idProducto,Procesador,Ram,tarjetaGrafica,Vram,discoDuro,discoCapacidad,Cantidad,Precio)
    values(_idProducto,_Procesador,_Ram,_tarjetaGrafica,_Vram,_discoDuro,_discoCapacidad,_Cantidad,_Precio);

create procedure usp_InsertarUsuario(
	 in _Nombres char(30),
     in _apPaterno char(30),
     in _apMaterno char(30),
     in _Correo char(30),
     in _userName char(30),
     in _Contraseña char(30)
     )
     insert Usuario(Nombres,apPaterno,apMaterno,Correo,userName,Contraseña)
     values(_Nombres,_apPaterno,_apMaterno,_Correo,_userName,_Contraseña);
     
create procedure usp_Join1()     
    select ps.idProducto,Marca,Modelo,Procesador,tarjetaGrafica,Ram,
	Imagen,Vram,discoDuro,discoCapacidad,p.precio from Productos ps inner join productosprecio p where ps.idProducto=p.idProducto;
  
create procedure usp_Join2(in _id int)     
    select ps.idProducto,Marca,Modelo,Procesador,tarjetaGrafica,Ram,Imagen,
	Vram,discoDuro,discoCapacidad,p.precio from Productos ps inner join productosprecio p where ps.idProducto=p.idProducto and ps.idProducto=_id;

create procedure usp_Select()
    select c.idFactura,c.idProducto,c.Procesador,c.Ram,c.tarjetaGrafica,c.Vram,c.discoDuro,c.discoCapacidad,c.Cantidad,c.Precio
    ,p.Modelo,p.Marca,p.Imagen,c.Cantidad*c.Precio as Total from compras c inner join productos p where c.idProducto=p.idProducto order by idFactura desc;
    
/*LLAMADO DE PROCEDIMIENTOS ALMACENADOS*/    
call usp_Validar();
call usp_InsertarUsuario();
call usp_Join1();
call usp_Join2(9);
call usp_Validar2();
call usp_InsertarCompra();
call usp_totalFinal();
call usp_Select()
