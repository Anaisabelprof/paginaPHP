# paginaPHP



1) Instalación de Apache, PHP 7.4 y MySQL-Server:


sudo apt install apache2

sudo apt install php7.4

sudo apt install mysql-server

sudo apt install php7.4-mysql (se necesita antes de usar la clase mysqli)



2) Establecer contraseña root de MySQL:


sudo mysql_secure_installation

mysql -u root -p

(Incluir creación de base de datos, tabla y registros de prueba)


3) Mover Proyecto al root por defecto de Apache:

sudo mv paginaPrueba /var/www/html/

cd /var/www/html/

(document root por defecto de apache: /var/www/html/)



4) Reiniciar Apache:

sudo service apache2 restart



5) Acceder al proyecto desde navegador:

localhost/paginaPrueba



6) Ver el log de errores de Apache:

sudo tail -fn10 /var/log/apache2/error.log 
(10 son las lineas a ver en ese fichero. Ademas se va actualizando auto conforme salen errores.)


