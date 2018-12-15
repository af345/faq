# faq

To run the FAQ project:

1. git clone https://github.com/af345/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/5.6/database)

How to Use:
1. Register as a user or log in as a user.
2. Once a user creates a question 2 buttons will show bellow it.
3. One is to view the question and answer. The other is send a e-mail push notification.
4. When the e-mail notification is used it'll prompt you to another view.
5. Enter your email and body of the email.
6. Use the email button to send the email push notification. 
7. This email will be sent to MailTrap.

Credentials to login to MailTrap
email: af345@njit.edu
password: IS6012018

Epic - Adding push notifications to FAQ application 

User Story 1 - As a user I want the ability to send notifications in the question form

User Story 2 - As a user I want the ability to send notifications in the answer form