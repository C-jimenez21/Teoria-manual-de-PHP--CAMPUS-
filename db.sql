     /**
    * ? comandos en consola:
    * * mysql -u name_db -p : Es el comando para iniciar la consola de MySQL. Al ejecutar este comando, se abrirá la consola de MySQL y podrás interactuar con la base de datos
    * * SHOW DATABASES;: Muestra una lista de todas las bases de datos disponibles en el servidor de MySQL.
    * * USE database_name;: Selecciona una base de datos específica para usar. Reemplaza database_name por el nombre de la base de datos que deseas utilizar.
    * * SHOW TABLES;: Muestra una lista de todas las tablas en la base de datos seleccionada.
    * * DESCRIBE table_name; o DESC table_name;: Muestra la estructura de una tabla específica. Reemplaza table_name por el nombre de la tabla que deseas describir.
    * * SELECT * FROM table_name;: Recupera todos los registros de una tabla específica. Reemplaza table_name por el nombre de la tabla de la que deseas obtener los registros.
    * * INSERT INTO table_name (column1, column2, ...) VALUES (value1, value2, ...);: Inserta un nuevo registro en una tabla específica. Reemplaza table_name por el nombre de la tabla en la que deseas insertar el registro y proporciona los nombres de columna y valores correspondientes.
    * * UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition;: Actualiza registros en una tabla específica. Reemplaza table_name por el nombre de la tabla que deseas actualizar y proporciona las columnas y los valores nuevos. Puedes agregar una condición para especificar qué registros actualizar.
    * * DELETE FROM table_name WHERE condition;: Elimina registros de una tabla específica. Reemplaza table_name por el nombre de la tabla de la que deseas eliminar registros y agrega una condición para seleccionar los registros que se eliminarán.
    * * QUIT; o EXIT;: Cierra la consola de MySQL y sale del programa.
    * * DROP USER username;: Elimina un usuario de la base de datos. Reemplaza username por el nombre del usuario que deseas eliminar.
    * * DROP TABLE table_name;: Elimina una tabla de la base de datos. Reemplaza table_name por el nombre de la tabla que deseas eliminar.
    * * GRANT privileges ON database_name.table_name TO 'username'@'host';: Concede privilegios específicos a un usuario en una base de datos y tabla específicas. Reemplaza privileges con los privilegios que deseas otorgar (por ejemplo, SELECT, INSERT, UPDATE, DELETE, etc.), database_name con el nombre de la base de datos, table_name con el nombre de la tabla, username con el nombre de usuario y host con la ubicación del host (por ejemplo, 'localhost', '127.0.0.1', etc.). para una tabla en especifico => database_name.table_name. para todas las tablas => .
    */
         CREATE DATABASE campuslands;

         USE campuslands;
         
         CREATE TABLE pais ( idPais int, nombrePais varchar(50));
         
         CREATE TABLE departamento (idDep int, nombreDep varchar(50), idPais int);
         
         CREATE TABLE region (idReg int, nombreReg varchar(50), idDep int);
         
         CREATE TABLE campers (idCamper int, nombreCamper varchar(50), apellidoCamper varchar(50), fechaNac date, idReg int);
         
         /**
          * ? definimos las llaves principales y las que serán foraneas
         */
         ALTER TABLE campers ADD PRIMARY KEY (idCamper), ADD KEY idReg(idReg);
         
         ALTER TABLE region ADD PRIMARY KEY (idReg), ADD KEY idDep(idDep);
         
         ALTER TABLE departamento ADD PRIMARY KEY (idDep), ADD KEY idPais(idPais);
         
         ALTER TABLE pais ADD PRIMARY KEY (idPais);
         /**
          * ? realizamos la relación entre las llaves
         */
         
         ALTER TABLE campers ADD CONSTRAINT idCamper FOREIGN KEY (idReg) REFERENCES region(idReg);
         
         ALTER TABLE region ADD CONSTRAINT idReg FOREIGN KEY (idDep) REFERENCES departamento(idDep);
         
         ALTER TABLE departamento ADD CONSTRAINT idDep FOREIGN KEY (idPais) REFERENCES pais(idPais);