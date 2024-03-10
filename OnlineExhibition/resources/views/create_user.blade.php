<form action="/insert-user" method="POST">
@csrf
<label for="user_student_id">Student Id</label>
<input type="text" name="user_student_id"></br>
<label for="user_fname">First name</label>
<input type="text" name="user_fname"></br>
<label for="user_lname">Last name</label>
<input type="text" name="user_lname"></br>
<label for="user_email">Email</label>
<input type="text" name="user_email"></br>
<label for="user_password">Password</label>
<input type="password" name="user_password"></br>
<input type="radio" name="user_role" id="user_admin" value="1">
<label for="user_admin">Admin</label>
<input type="radio" name="user_role" id="user_student" value="2">
<label for="user_student">Student</label>
<input type="radio" name="user_role" id="user_guest" value="3">
<label for="user_guest">Guest</label></br>
<input type="submit" value="Submit">

</form>
