<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-09 18:08:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Core_Frontend' not found ~ APPPATH/classes/Controller/Welcome.php [ 3 ] in file:line
2016-10-09 18:08:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:08:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Core_Frontend' not found ~ APPPATH/classes/Controller/Welcome.php [ 3 ] in file:line
2016-10-09 18:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:08:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Core_Frontend' not found ~ APPPATH/classes/Controller/Welcome.php [ 3 ] in file:line
2016-10-09 18:08:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:11:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Core_Frontend' not found ~ APPPATH/classes/Controller/Welcome.php [ 3 ] in file:line
2016-10-09 18:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:14:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Core/Frontend.php [ 31 ] in file:line
2016-10-09 18:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:14:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Core/Frontend.php [ 31 ] in file:line
2016-10-09 18:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:21:18 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:18 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:19 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:19 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:21 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:21 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:42 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:42 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:43 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:43 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:44 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:44 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:44 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:44 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:44 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 65 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:44 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#1 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:169
2016-10-09 18:21:49 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:21:49 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:21:50 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:21:50 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:40:19 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:40:19 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:40:20 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:40:20 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Login.php(11): Kohana_ORM->__construct()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 18:40:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Usuarios' not found ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2016-10-09 18:40:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:40:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Usuarios' not found ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2016-10-09 18:40:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:41:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2016-10-09 18:41:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 18:41:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2016-10-09 18:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 19:02:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/admin/structure/template.php [ 20 ] in /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php:20
2016-10-09 19:02:38 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 20, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(33): Controller_Core_System->after()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php:20
2016-10-09 19:02:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/admin/structure/template.php [ 20 ] in /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php:20
2016-10-09 19:02:39 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 20, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#6 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(33): Controller_Core_System->after()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php:20
2016-10-09 19:20:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Admin/Users.php [ 16 ] in file:line
2016-10-09 19:20:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 19:20:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Admin/Users.php [ 16 ] in file:line
2016-10-09 19:20:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 19:20:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Users::get_all() ~ APPPATH/classes/Controller/Admin/Users.php [ 16 ] in file:line
2016-10-09 19:20:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 19:26:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/admin/users/index.php [ 13 ] in file:line
2016-10-09 19:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 19:26:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/admin/users/index.php [ 13 ] in file:line
2016-10-09 19:26:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 19:26:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/admin/users/index.php [ 13 ] in /var/www/html/pruebaEnkarga/application/views/admin/users/index.php:13
2016-10-09 19:26:34 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/users/index.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 13, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/users/index.php:13
2016-10-09 19:36:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Request ~ APPPATH/classes/Controller/Admin/Users.php [ 22 ] in /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php:22
2016-10-09 19:36:55 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 22, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php:22
2016-10-09 20:17:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Users::$catusuarios ~ APPPATH/classes/Controller/Admin/Users.php [ 29 ] in /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php:29
2016-10-09 20:17:14 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/p...', 29, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php:29
2016-10-09 20:18:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Users::add_user() ~ APPPATH/classes/Controller/Admin/Users.php [ 29 ] in file:line
2016-10-09 20:18:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 20:32:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /var/www/html/pruebaEnkarga/system/classes/Kohana/Validation.php:102
2016-10-09 20:32:37 --- DEBUG: #0 /var/www/html/pruebaEnkarga/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/p...', 102, Array)
#1 /var/www/html/pruebaEnkarga/application/classes/Model/Users.php(13): Kohana_Validation->offsetGet('email')
#2 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(29): Model_Users->add_user(Object(Validation), Object(A1_ORM), 0)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/pruebaEnkarga/system/classes/Kohana/Validation.php:102
2016-10-09 21:00:48 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'last_name' doesn't have a default value [ INSERT INTO `users` (`name`, `password`) VALUES ('developer2585@gmail.com', '$2a$12$tc9ffStgNKPXOUYAM6Mamu6T2HF6dYbBGuSP6p..WzGNR/XfQ/6Ji') ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 21:00:48 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/html/pruebaEnkarga/application/classes/Model/Users.php(17): Kohana_ORM->save()
#4 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(28): Model_Users->add_user(Object(Validation), Object(A1_ORM), 0)
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 21:01:18 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'last_name' doesn't have a default value [ INSERT INTO `users` (`name`, `password`) VALUES ('developer2585@gmail.com', '$2a$12$6CGqO85nUsv3PgOJFdEIGu3ko9dIyY/jeIVlmkzHQEAtBDcBSY122') ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 21:01:18 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/html/pruebaEnkarga/application/classes/Model/Users.php(17): Kohana_ORM->save()
#4 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(28): Model_Users->add_user(Object(Validation), Object(A1_ORM), 0)
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 21:01:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The emakil property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 21:01:39 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('emakil', 'developer2585@g...')
#1 /var/www/html/pruebaEnkarga/application/classes/Model/Users.php(13): Kohana_ORM->__set('emakil', 'developer2585@g...')
#2 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(28): Model_Users->add_user(Object(Validation), Object(A1_ORM), 0)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 21:01:46 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'token' doesn't have a default value [ INSERT INTO `users` (`name`, `last_name`, `email`, `password`) VALUES ('asdsadsad', '', 'developer2585@gmail.com', '$2a$12$Xc2pfe766BnXhQNp81EtBOWt9ROc6ZsDNcyHUhCbNVVVFLoWfQTmO') ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 21:01:46 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/html/pruebaEnkarga/application/classes/Model/Users.php(17): Kohana_ORM->save()
#4 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(28): Model_Users->add_user(Object(Validation), Object(A1_ORM), 0)
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 21:05:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''message'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/Controller/Admin/Users.php [ 59 ] in file:line
2016-10-09 21:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 21:06:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Users::get_byId() ~ APPPATH/classes/Controller/Admin/Users.php [ 58 ] in file:line
2016-10-09 21:06:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 21:06:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The primary_key property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 21:06:57 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('primary_key')
#1 /var/www/html/pruebaEnkarga/application/classes/ORM.php(18): Kohana_ORM->__get('primary_key')
#2 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Users.php(58): ORM->get_byId('2')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Users->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 21:39:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: clients ~ APPPATH/views/admin/clients/index.php [ 16 ] in /var/www/html/pruebaEnkarga/application/views/admin/clients/index.php:16
2016-10-09 21:39:20 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/clients/index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 16, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/clients/index.php:16
2016-10-09 21:39:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: clients ~ APPPATH/views/admin/clients/index.php [ 16 ] in /var/www/html/pruebaEnkarga/application/views/admin/clients/index.php:16
2016-10-09 21:39:22 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/clients/index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 16, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/clients/index.php:16
2016-10-09 22:22:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Clients class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:22:56 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /var/www/html/pruebaEnkarga/application/views/admin/users/edit.php(4): Kohana_ORM->__get('id_user')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#11 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#12 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:24:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/admin/clients/edit.php [ 4 ] in /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php:4
2016-10-09 22:24:05 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 4, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php:4
2016-10-09 22:24:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/admin/clients/edit.php [ 4 ] in /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php:4
2016-10-09 22:24:06 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 4, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php:4
2016-10-09 22:24:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Clients class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:24:25 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php(4): Kohana_ORM->__get('id_user')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#11 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#12 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:24:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Clients class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:24:26 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /var/www/html/pruebaEnkarga/application/views/admin/clients/edit.php(4): Kohana_ORM->__get('id_user')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#11 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#12 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:25:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Clients::validate_perfil() ~ APPPATH/classes/Controller/Admin/Clients.php [ 46 ] in file:line
2016-10-09 22:25:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 22:29:43 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.products' doesn't exist [ SHOW FULL COLUMNS FROM `products` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 22:29:43 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('products')
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Products.php(10): Kohana_ORM->__construct()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Products->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 22:30:58 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.products' doesn't exist [ SHOW FULL COLUMNS FROM `products` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 22:30:58 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('products')
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Products.php(10): Kohana_ORM->__construct()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(69): Controller_Admin_Products->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/pruebaEnkarga/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 22:33:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php:137
2016-10-09 22:33:05 --- DEBUG: #0 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/products/...')
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Products.php(35): Kohana_View::factory('admin/products/...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php:137
2016-10-09 22:37:34 --- EMERGENCY: ErrorException [ 4096 ]: Object of class A1_ORM could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database.php:461
2016-10-09 22:37:34 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/p...', 461, Array)
#1 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Object(A1_ORM))
#2 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#3 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#4 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#5 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#6 /var/www/html/pruebaEnkarga/application/classes/Model/Products.php(9): Kohana_ORM->find()
#7 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Products.php(28): Model_Products->add_user(Object(Validation), Object(A1_ORM), 0)
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_add()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database.php:461
2016-10-09 22:40:00 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'email' at row 1 [ UPDATE `clients` SET `email` = 'developer2585@gmail.com.mx' WHERE `id_client` = '3' ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 22:40:00 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `clients...', false, Array)
#1 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#3 /var/www/html/pruebaEnkarga/application/classes/Model/Clients.php(16): Kohana_ORM->save()
#4 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Clients.php(50): Model_Clients->add_user(Object(Validation), '3')
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Clients->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Clients))
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/pruebaEnkarga/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 22:42:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php:137
2016-10-09 22:42:06 --- DEBUG: #0 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/products/...')
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 /var/www/html/pruebaEnkarga/application/classes/Controller/Admin/Products.php(57): Kohana_View::factory('admin/products/...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php:137
2016-10-09 22:43:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:43:15 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php(4): Kohana_ORM->__get('id_user')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#11 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#12 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:43:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:43:16 --- DEBUG: #0 /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php(4): Kohana_ORM->__get('id_user')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#4 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#11 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#12 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/html/pruebaEnkarga/modules/orm/classes/Kohana/ORM.php:603
2016-10-09 22:43:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ APPPATH/views/admin/products/edit.php [ 4 ] in /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php:4
2016-10-09 22:43:26 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 4, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php:4
2016-10-09 22:43:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ APPPATH/views/admin/products/edit.php [ 4 ] in /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php:4
2016-10-09 22:43:27 --- DEBUG: #0 /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/p...', 4, Array)
#1 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#2 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#3 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/pruebaEnkarga/application/views/admin/structure/template.php(25): Kohana_View->__toString()
#5 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(61): include('/var/www/html/p...')
#6 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/p...', Array)
#7 /var/www/html/pruebaEnkarga/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/pruebaEnkarga/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/System.php(41): Kohana_Response->body(Object(View))
#10 /var/www/html/pruebaEnkarga/application/classes/Controller/Core/Admin.php(35): Controller_Core_System->after()
#11 /var/www/html/pruebaEnkarga/system/classes/Kohana/Controller.php(87): Controller_Core_Admin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#14 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/pruebaEnkarga/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/pruebaEnkarga/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/pruebaEnkarga/application/views/admin/products/edit.php:4
2016-10-09 22:48:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sales' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 10 ] in file:line
2016-10-09 22:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 22:57:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sales' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 12 ] in file:line
2016-10-09 22:57:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 22:57:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sales' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 12 ] in file:line
2016-10-09 22:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 22:58:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH/views/admin/sales/add.php [ 13 ] in file:line
2016-10-09 22:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:03:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'MOdel_Products' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 13 ] in file:line
2016-10-09 23:03:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:03:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'MOdel_Products' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 13 ] in file:line
2016-10-09 23:03:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:03:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_all() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 41 ] in file:line
2016-10-09 23:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:03:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_all() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 41 ] in file:line
2016-10-09 23:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:03:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_all() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 41 ] in file:line
2016-10-09 23:03:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:33:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /var/www/html/test/system/classes/Kohana/Validation.php:102
2016-10-09 23:33:05 --- DEBUG: #0 /var/www/html/test/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/t...', 102, Array)
#1 /var/www/html/test/application/classes/Model/Sales.php(11): Kohana_Validation->offsetGet('name')
#2 /var/www/html/test/application/classes/Controller/Admin/Sales.php(32): Model_Sales->add_sale(Object(Validation))
#3 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#6 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/test/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/test/system/classes/Kohana/Validation.php:102
2016-10-09 23:33:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /var/www/html/test/system/classes/Kohana/Validation.php:102
2016-10-09 23:33:15 --- DEBUG: #0 /var/www/html/test/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/t...', 102, Array)
#1 /var/www/html/test/application/classes/Model/Sales.php(11): Kohana_Validation->offsetGet('name')
#2 /var/www/html/test/application/classes/Controller/Admin/Sales.php(32): Model_Sales->add_sale(Object(Validation))
#3 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#6 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/test/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/test/system/classes/Kohana/Validation.php:102
2016-10-09 23:33:32 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'total' doesn't have a default value [ INSERT INTO `sales` (`fk_client`, `date`) VALUES ('2', '2016-10-09') ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/test/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 23:33:32 --- DEBUG: #0 /var/www/html/test/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `sa...', false, Array)
#1 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/html/test/application/classes/Model/Sales.php(14): Kohana_ORM->save()
#4 /var/www/html/test/application/classes/Controller/Admin/Sales.php(32): Model_Sales->add_sale(Object(Validation))
#5 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#8 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/test/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/test/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 23:39:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Sales.php [ 9 ] in file:line
2016-10-09 23:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:39:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Sales.php [ 9 ] in file:line
2016-10-09 23:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:39:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting ',' or ';' ~ APPPATH/classes/Controller/Admin/Sales.php [ 9 ] in file:line
2016-10-09 23:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:39:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH/classes/Controller/Admin/Sales.php [ 38 ] in file:line
2016-10-09 23:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:39:35 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Model_Sales::update() should be compatible with Kohana_ORM::update(Validation $validation = NULL) ~ APPPATH/classes/Model/Sales.php [ 0 ] in /var/www/html/test/system/classes/Kohana/Core.php:511
2016-10-09 23:39:35 --- DEBUG: #0 /var/www/html/test/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/html/t...', 0, Array)
#1 /var/www/html/test/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Sales')
#3 /var/www/html/test/application/classes/Controller/Admin/Sales.php(15): spl_autoload_call('Model_Sales')
#4 /var/www/html/test/system/classes/Kohana/Controller.php(69): Controller_Admin_sales->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#7 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/test/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/test/system/classes/Kohana/Core.php:511
2016-10-09 23:39:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Salesproduct' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 16 ] in file:line
2016-10-09 23:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:42:23 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'pruebaEnkarga.salesproduct' doesn't exist [ SHOW FULL COLUMNS FROM `salesproduct` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/test/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 23:42:23 --- DEBUG: #0 /var/www/html/test/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('salesproduct')
#2 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/test/application/classes/Controller/Admin/Sales.php(16): Kohana_ORM->__construct()
#6 /var/www/html/test/system/classes/Kohana/Controller.php(69): Controller_Admin_sales->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#9 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/test/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/test/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2016-10-09 23:42:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Salesproduct' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 16 ] in file:line
2016-10-09 23:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:42:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Saleproduct' not found ~ APPPATH/classes/Controller/Admin/Sales.php [ 16 ] in file:line
2016-10-09 23:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:43:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_saleproduct() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 42 ] in file:line
2016-10-09 23:43:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:43:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_saleproduct() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 42 ] in file:line
2016-10-09 23:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:43:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_saleproduct() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 42 ] in file:line
2016-10-09 23:43:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:43:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_saleproduct() on null ~ APPPATH/classes/Controller/Admin/Sales.php [ 42 ] in file:line
2016-10-09 23:43:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:44:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The fk_sale property does not exist in the Model_Saleproduct class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:44:05 --- DEBUG: #0 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('fk_sale', Object(Model_Sales))
#1 /var/www/html/test/application/classes/Model/Saleproduct.php(11): Kohana_ORM->__set('fk_sale', Object(Model_Sales))
#2 /var/www/html/test/application/classes/Controller/Admin/Sales.php(42): Model_Saleproduct->add_saleproduct(Object(Model_Sales), '1', '2', 21)
#3 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#6 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/test/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:44:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The fk_sale property does not exist in the Model_Saleproduct class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:44:40 --- DEBUG: #0 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('fk_sale', Object(Model_Sales))
#1 /var/www/html/test/application/classes/Model/Saleproduct.php(11): Kohana_ORM->__set('fk_sale', Object(Model_Sales))
#2 /var/www/html/test/application/classes/Controller/Admin/Sales.php(42): Model_Saleproduct->add_saleproduct(Object(Model_Sales), '1', '2', 21)
#3 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#6 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/test/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:45:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The fk_sale property does not exist in the Model_Saleproduct class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:45:34 --- DEBUG: #0 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('fk_sale', Object(Model_Sales))
#1 /var/www/html/test/application/classes/Model/Saleproduct.php(11): Kohana_ORM->__set('fk_sale', Object(Model_Sales))
#2 /var/www/html/test/application/classes/Controller/Admin/Sales.php(42): Model_Saleproduct->add_saleproduct(Object(Model_Sales), '1', '2', 21)
#3 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#6 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/test/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:45:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The num property does not exist in the Model_Saleproduct class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:45:49 --- DEBUG: #0 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('num', '2')
#1 /var/www/html/test/application/classes/Model/Saleproduct.php(13): Kohana_ORM->__set('num', '2')
#2 /var/www/html/test/application/classes/Controller/Admin/Sales.php(42): Model_Saleproduct->add_saleproduct(Object(Model_Sales), '1', '2', 21)
#3 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#6 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/test/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/test/modules/orm/classes/Kohana/ORM.php:702
2016-10-09 23:49:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: total ~ APPPATH/classes/Controller/Admin/Sales.php [ 47 ] in /var/www/html/test/application/classes/Controller/Admin/Sales.php:47
2016-10-09 23:49:00 --- DEBUG: #0 /var/www/html/test/application/classes/Controller/Admin/Sales.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/t...', 47, Array)
#1 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#4 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/test/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/test/application/classes/Controller/Admin/Sales.php:47
2016-10-09 23:49:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:50:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:50:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:50:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:50:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:50:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:50:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:50:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Admin/Sales.php [ 55 ] in file:line
2016-10-09 23:50:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:50:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Admin/Sales.php [ 55 ] in file:line
2016-10-09 23:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 52 ] in file:line
2016-10-09 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 30 ] in file:line
2016-10-09 23:51:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 30 ] in file:line
2016-10-09 23:51:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 30 ] in file:line
2016-10-09 23:51:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:51:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/Controller/Admin/Sales.php [ 32 ] in /var/www/html/test/application/classes/Controller/Admin/Sales.php:32
2016-10-09 23:51:53 --- DEBUG: #0 /var/www/html/test/application/classes/Controller/Admin/Sales.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/t...', 32, Array)
#1 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#4 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/test/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/test/application/classes/Controller/Admin/Sales.php:32
2016-10-09 23:51:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/Controller/Admin/Sales.php [ 32 ] in /var/www/html/test/application/classes/Controller/Admin/Sales.php:32
2016-10-09 23:51:54 --- DEBUG: #0 /var/www/html/test/application/classes/Controller/Admin/Sales.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/t...', 32, Array)
#1 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_sales->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_sales))
#4 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/test/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/test/application/classes/Controller/Admin/Sales.php:32
2016-10-09 23:52:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Sales.php [ 50 ] in file:line
2016-10-09 23:52:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-09 23:57:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id_sale' in 'where clause' [ SELECT `sales`.`id_sales` AS `id_sales`, `sales`.`fk_client` AS `fk_client`, `sales`.`total` AS `total`, `sales`.`date` AS `date` FROM `sales` AS `sales` WHERE `id_sale` = '1' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/html/test/modules/database/classes/Kohana/Database/Query.php:251
2016-10-09 23:57:22 --- DEBUG: #0 /var/www/html/test/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `sales`....', false, Array)
#1 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/html/test/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/html/test/application/classes/Model/Sales.php(20): Kohana_ORM->find()
#4 /var/www/html/test/application/classes/Controller/Admin/Sales.php(48): Model_Sales->update_register(Object(Model_Sales), 10.5)
#5 /var/www/html/test/system/classes/Kohana/Controller.php(84): Controller_Admin_Sales->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Sales))
#8 /var/www/html/test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/test/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/test/modules/database/classes/Kohana/Database/Query.php:251