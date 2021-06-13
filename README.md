# Backend Assessment

for this project, PHP 7 was used as the language, Laravel 8 was used as the framework, sqlite was used as the database and Sanctum was used as the authentication middleware, According to the Instructions I was required to create a RESTful API which provides one with the ability to:

1. Register a user
2. Login the user
3. Update the user's details
4. Fetch the user's details
5. Delete the user

One can only be able to login and register without authentication.

# Actions
if You want to start the server, download the folder containing the source code, check into the directory through your terminal and run the following code: php artisan serve.

Under the routes folder, in the api.php file, there are the routes which show the specific HTTP requests which when triggered in softwares like Insomnia or Postman will perform the requests demanded in the assessment.

# Further explanations

for the Middleware Authentication, Sanctum was used, two controllers were generated manually: UserController and AuthController. AuthController was used for registering and logging in users, while UserController was used for Updating, Fetching User Details and Deleting Users.

