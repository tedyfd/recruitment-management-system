# Recruitment Management System

Codeigniter 4 & MySql

Setup & Running
1. run `composer install`
2. setup database `.env` and `app->Config->Database.php ` file
3. run `php spark migrate`
4. run `php spark db:seed SelectionStatusSeed`
5. run `php spark db:seed HRSeed`
6. run `php spark db:seed JobCategorySeed`
6. run `php spark db:seed JobPositionSeed`
7. run `php spark db:seed JobOrganizationSeed`
