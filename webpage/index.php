<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<Form action="">
			<dl>
				<dt>Name</dt>
				<dd>
					<input type="text" pattern="^([a-z]|[A-Z]){2,}$" required/>
				</dd>
				<dt>Email</dt>
				<dd>
					<input type="text" pattern="/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g" require/>
				</dd>
				<dt>UserName</dt>
				<dd>
					<input type="text" pattern="^([a-z]|[A-Z]){5,}$" required />
				</dd>
				<dt>Password</dt>
				<dd>
					<input type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
				</dd>
				<dt>Confirm Password</dt>
				<dd>
					<input type="text" pattern="" required/>
				</dd>
				<dt>Date of Birth</dt>
				<dd>
					<input type="text" pattern="^(0?[1-9]|1[0-2])[\.](0?[1-9]|[12]\d|3[01])[\.](19|20)\d{2}$" require/>
				</dd>
				<dt>Gender</dt>
				<dd>
					<SELECT>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</SELECT>
				</dd>
				<dt>Marital Status</dt>
				<dd>
					<SELECT>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorced">Divorced</option>
						<option value="Widowed">Widowed</option>
					</SELECT>
				</dd>
				<dt>Address</dt>
				<dd>
					<input type="text"  required/>
				</dd>
				<dt>City</dt>
				<dd>
					<input type="text" pattern="^([a-z]|[A-Z]){2,}$" required/>
				</dd>
				<dt>Postal Code</dt>
				<dd>
					<input type="text" pattern="\d{6}" required/>
				</dd>
				<dt>Home Phone</dt>
				<dd>
					<input type="text" pattern="\d{9}" required/>
				</dd>
				<dt>Mobile Phone</dt>
				<dd>
					<input type="text" pattern="\d{9}" required/>
				</dd>
				<dt>Credit Card Number</dt>
				<dd>
					<input type="text" pattern="\d{16}" required/>
				</dd>
				<dt>Credit Card Expiry Date</dt>
				<dd>
					<input type="text" pattern="^(0?[1-9]|1[0-2])[\.](0?[1-9]|[12]\d|3[01])[\.](19|20)\d{2}$" require/>
				</dd>
				<dt>Monthly Salary</dt>
				<dd>
					<input type="text" pattern="" required/>
				</dd>
				<dt>Web Site URL</dt>
				<dd>
					<input type="text" pattern="/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/ig" require/>
				</dd>
				<dt>Overall GPA</dt>
				<dd>
					<input type="text" pattern="" required/>
				</dd>
				</br>
				<dd>
					<input type="submit" value="OK"/>
				</dd>
				<!-- Write other fiels similar to Name as specified in lab6.pdf -->
			</dl>
		</Form>
		<div>
			Register
		</div>
	</body>
</html>