#Palmera Gardens System

I am developing a laravel application for my curent employer that will be used to track how alcohol is sold from the store to the bar.
The system will also later be integrated with the kitchen so that the kitchen people can use the system to requeat for products and will be easy for the people using the system to take stoke.
#The system has four main accounts
1. Store(The person to issue the alcohol)
2. Service(Those who will sell the alcohol)
3. Admin
4. Kitchen(To be added later)

#How the sysem works

<b>******The system is in development********</d>

1. Create a database in xampp called palmera
2. Run php artisan migrate
3. Run php artisan serve
4. Access the aplication using http://127.0.0.1:8000/
5. Create a store account first(The account has to be activated to get in so an admin account is required)
6. Create an admin account in the second browser by default. For now the admin is asctivated manually. Go to palmera database and choose users table, chnage the status for the admin account to activated and restart the browser with admin account.
7. Using the admin account in the panel you will be able to activate other account type
