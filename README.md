# BoostZone
a Crowdfunding Platform | Developed with PHP Codeigniter


![BZ](https://user-images.githubusercontent.com/55706752/71542452-c944f800-2934-11ea-9c4c-e8dc152cc095.PNG)

## Step 1 :

Fork the BoostZone repository and clone it locally.

```bash
Git clone https://github.com/Klodovskyy/BoostZone.git
```

## Step 2 :

Create a New Database and import the boostzone-db.sql file in the phpmyadmin.

File Path: BoostZone/Database/boostzone-db.sql
 
## Step 3 :
Update the following Configurations :

➣ Database

File Path: application/config/database.php

'hostname' => 'localhost',

'username' => 'xxxxxxxxxx',

'password' => 'xxxxxxxxxxx',

'database' => 'xxxxxxxxxxxxxxxx',

➣ Google Login API

File Path: application/config/google.php Change Apikey

Change client_id

Change client_secret

➣ Razor Payment Gateway API

application/views/home.php

Line no : 290

application/views/videos.php

Line no : 158

PS: This is a demo version for real payments you will need to setup your own Razorpay account .

## Step 4 :

Use the below login credentials to access the Admin Panel :

URL: http://localhost/BoostZone/Home/login

Username: admin@admin.com

Password: admin123

That's it,run your own Donation Platform and help making people smile today .

If you liked this project please don't hesitate to give it a star !

## Contributing

Pull requests are welcome.If you would like to contribute enhancements or fixes, please do the following:

Please open an issue first to discuss what you would like to change and make sure to update tests as appropriate.

for contact please visit http://khaledbenhassen.tech/

## License
[MIT](https://choosealicense.com/licenses/mit/)
