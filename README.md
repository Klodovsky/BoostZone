#BoostZone
a Crowdfunding Platform | Developed with PHP Codeigniter

Step 1 :

Git clone https://github.com/Klodovskyy/BoostZone.git

Step 2 :

Create a New Database and import the boostzone-db.sql file in the phpmyadmin.

File Path: BoostZone/Database/boostzone-db.sql

Step 3 :

Update the following Configurations :

➣ Database


File Path: application/config/database.php

'hostname' => 'localhost',

'username' => 'xxxxxxxxxx',

'password' => 'xxxxxxxxxxx',

'database' => 'xxxxxxxxxxxxxxxx',

➣ Google Login API


File Path: application/config/google.php
Change Apikey

Change client_id

Change client_secret

➣ Razor Payment Gateway API


application/views/home.php

Line no : 290

application/views/videos.php

Line no : 158

PS: This is a demo version for real payments you will need to setup your own Razorpay account .

Step 4 :

Use the below login credentials to access the Admin Panel :

URL: http://localhost/BoostZone/Home/login

Username: admin@admin.com

Password: admin123


That's it,run your own Donation Platform and help making people smile today .


If you liked this project please dont hesitate to give it a star !


