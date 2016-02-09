This is a test.

The assignment
===
"As an authenticated user, I want to sort the table on the Users page by clicking on the table headers".

Remember that less is more: nothing that has not been defined in the user story should be assumed. Choose the fastest means to implement what the story says. 

Setup the project
====
1. Clone the fork to your computer, delete .git folder and init git again
2. Copypaste config.sample.php to config.php and adjust settings there
3. Import doc/database.sql to your local mysql database
4. Run composer install
5. Install codeception globally to your computer or use vendor/bin/codecept
6. Install and run selenium server on port 4444 (or change acceptance.suite.yml to use PhpBrowser instead) 
7. Test that http://localhost/sampleproject/ opens and you can click on Users and log in with demo:demo.
8. Go to /tests/codeception/backend/tests folder .Change the acceptance.suite.yml as per need.
9. Open the terminal
10. Go to /tests/codeception/backend directory.
11. Run the codecept build command
12. Run "codecept run acceptance", to run the acceptance test

 
