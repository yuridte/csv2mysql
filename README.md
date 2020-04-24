# csv2mysql
Importing a csv file to update the database.

## Configuration of Database

Create a folder named "config" with a "databaseConfig.php" file inside and set the variables below:

```php
<?php
$cfgHost = "your-host";
$cfgPort = "mysql-port-number"; //Most commom is 3306
$cfgDbName = "your-db-name";
$cfgUser = "your-user";
$cfgPassword = "your-password";
?>
```
