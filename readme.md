## Online Notes created using Laravel PHP Framework

I developed this application using Laravel while learning the Framework.

### Installation
1. Clone this repository
2. In the root of your application, create a file called .env.development.php and return an array containing your database configuration

return array(
    'DB_CONFIG' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'your-db',
        'username'  => 'your username',
        'password'  => 'your password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
));

In your app/config/database.php get the database details from the $_ENV superglobal:
'mysql' => $_ENV['DB_CONFIG'],

Make sure that your environment variable is 'development'. Laravel also allows you to configure your local environment
Read the instructions from the Laravel website

3. Run composer to get Laravel Library

4. Set up your webserver

....And you are done!



Steve Popoola