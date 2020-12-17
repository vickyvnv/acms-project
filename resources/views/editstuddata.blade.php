<html>
<title></title>
<head></head>
<body>
<table>

<tr>
	<th><h1>Edit Student</h1></th></tr>

		<form method="post" action="{{$student->id}}" class="text-center border border-light p-5">
			
		<tr><td>	Name</td><td><input type="text" name="name" placeholder="name" class="form-control mb-2" value="{{$student->name}}"></br></label></td></tr>
			<tr><td>	Email</td><td><input type="email" name="email" placeholder="email" class="form-control mb-2" value="{{$student->email}}"></br></td></tr>
			<tr><td><tr><td>	Contact No.</td><td><input type="text" name="cno" placeholder="cno" class="form-control mb-2" value="{{$student->cno}}"></br></td></tr>
			<tr><td>	Address</td><td><textarea name="address" placeholder="address" class="form-control mb-2" value="{{$student->address}}"></textarea></br></td></tr>

			     
            <tr><td>Subject Selected</td><td><input type="text" name="subject" placeholder="Enter Subjects" class="form-control mb-2"></br></td></tr>

                 <tr><td> Joining Date</td><td><input type="date" name="jdate" placeholder="Student Joing Date" class="form-control mb-2"></br></td></tr>
   			    
			<tr><td>	Parent Contact No.</td><td><input type="text" name="pcno" placeholder="Parent Contact Number" class="form-control mb-2" value="{{$student->pcno}}"></br></td></tr></td></tr>
			<tr><td>	Parent Email address</td><td><input type="email" name="pemail" placeholder="Parent Email Address" class="form-control mb-4" value="{{$student->pemail}}"></br></td></tr>
			<tr><td>	Total Fee</td><td><input type="text" name="fee" placeholder="Total Fees" class="form-control mb-2" value="{{$student->fee}}"></br></td></tr></td></tr>
			<tr><td>	Deposite Amount</td><td><input type="text" name="deposite" placeholder="Deposite Amount" class="form-control mb-2" value="{{$student->deposite}}"></br></td></tr>
			<tr><td>	Pending Amount</td><td><input type="text" name="pending" placeholder="Pending Amount" class="form-control mb-2" value="{{$student->pending}}"></br></td></tr>
			<tr><td align='center'> Expiry Date of Amount</td><td><input type="date" name="edate" placeholder="Expiry date of Amount" class="form-control mb-2"></br></td></tr>




			<tr><td>	<input type="hidden" name="_token" value="{{ csrf_token() }}" >
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<button name="submit" alert-msg = "Done">Submit</button></td></tr>

		</form>
</table>




</body></html>










