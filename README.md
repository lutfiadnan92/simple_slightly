Simple API

<h3>First</h3>
<ol>
    <li>clone this project</li>
    <li>create a database with the name "flip"</li>
</ol>

<h3>Second</h3>
<ol>
    <li>run "php artisan migrate" (if you want to fresh migrate run "php artisan migrate:fresh")</li>
<li>run "php artisan serve" (if you want to using another port, you can use "php artisan serve --port=3030")</li>
</ol>

<h3>Third</h3>
<strong>Disbursement</strong>
<p>
Request<br>
POST /disburse HTTP/1.1<br>
Content-Type: application/x-www-form-urlencoded<br>
Authorization: none
</p>
<p>
Attribute:<br>
bank_code<br>
account_number<br>
amount<br>
remark
</p>

<strong>Disbursement Status</strong>
<p>
Request<br>
GET /disburse/{id} HTTP/1.1<br>
Content-Type: application/x-www-form-urlencoded<br>
Authorization: none
</p>
