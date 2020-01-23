Simple API

<h3>First</h3>
1. clone this project
2. create a database with the name "flip"

<h3>Second</h3>
1. run "php artisan migrate" (if you want to fresh migrate run "php artisan migrate:fresh")
2. run "php artisan serve" (if you want to using another port, you can use "php artisan serve --port=3030")

<h3>Third</h3>
<strong>Disbursement</strong>
Request
POST /disburse HTTP/1.1
Content-Type: application/x-www-form-urlencoded
Authorization: none

Attribute:
bank_code
account_number
amount
remark

<strong>Disbursement Status</strong>
Request
GET /disburse/{id} HTTP/1.1
Content-Type: application/x-www-form-urlencoded
Authorization: none