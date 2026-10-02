<?php
 = 'app/Config/Database.php';
 = file_get_contents();
 = str_replace('inlislite_v33', 'inislite_db', );
 = str_replace('\'username\' => \'root\'', '\'username\' => \'inislite_user\'', );
 = str_replace('\'password\' => \'\'', '\'password\' => \'Laba1M/Bulan\'', );
 = str_replace('\'hostname\' => \'localhost\'', '\'hostname\' => \'127.0.0.1\'', );
file_put_contents(, );
