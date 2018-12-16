# faq

To run the FAQ project:

1. git clone https://github.com/af345/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/5.6/database)

How to Use:
1. Register as a user or log in as a user.
2. Once a user creates a question 2 buttons will show bellow it.
3. One is to view the question and answer. The other is send an e-mail push notification on the question card.
5. If you go to the question and answer screen you could also send e-mail push notification on the answer card.
4. When the e-mail notification button is used in either the question or answer card it'll prompt you to another view.
5. This is the e-mail push screen, enter your email and body of the email.
6. Use the e-mail button to send the email push notification. 
7. This e-mail will be sent to MailTrap.
8. After sending the notification you have the ability to go back to the home, question or answer page

Credentials to login to MailTrap
email: af345@njit.edu
password: IS6012018

Epic - Adding e-mail push notifications to FAQ application 

User Story 1 - As a user I want the ability to send notifications while in the question card

User Story 2 - As a user I want the ability to send notifications while in the answer card

User Story 3 - After sending a notification I want the ability to go back to the home, question or answer page

https://is601onlineproject3.herokuapp.com/