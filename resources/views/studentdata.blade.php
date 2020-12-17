
@extends('master')
        <!-- //header-ends -->
        <!-- main content start-->
        @section('body')
        <!-- //header-ends -->
        <!-- main content start-->
<div id="page-wrapper">
<div class="main-page">


<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1>Registration Form For Students</h1></td>
</tr><center>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
		<form method="post" action="student" class="text-center border border-light p-5">
			
			  <tr><td align='center'>  Name</td><td><input type="text" name="name" placeholder="name" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'>Email</td><td><input type="email" name="email" placeholder="email" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'>Contact No.</td><td><input type="text" name="cno" placeholder="cno" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'>Address</td><td><textarea name="address" placeholder="address" class="form-control mb-2"></textarea></br></td></tr>

			     <tr><td align='center'>Subject Selected</td><td><input type="text" name="subject" placeholder="Enter Subjects" class="form-control mb-2"></br></td></tr>
			    <tr><td align='center'> Joining Date</td><td><input type="date" name="jdate" placeholder="Student Joing Date" class="form-control mb-2"></br></td></tr>
                 
				 <tr><td align='center'>Parent Contact No.</td><td><input type="text" name="pcno" placeholder="Parent Contact Number" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'>Parent Email address</td><td><input type="email" name="pemail" placeholder="Parent Email Address" class="form-control mb-4"></br></td></tr>
				 <tr><td align='center'>Total Fee</td><td><input type="text" name="fee" placeholder="Total Fees" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'>Deposite Amount</td><td><input type="text" name="deposite" placeholder="Deposite Amount" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'>Pending Amount</td><td><input type="text" name="pending" placeholder="Pending Amount" class="form-control mb-2"></br></td></tr>
				 <tr><td align='center'> Expiry Date of Amount</td><td><input type="date" name="edate" placeholder="Expiry date of Amount" class="form-control mb-2"></br></td></tr>




     
		</table>
	</table><table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
          <tr>
				 <td align='center'><input type="hidden" name="_token" value="{{ csrf_token() }}" >
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<button name="submit" alert-msg = "Done" align = "center">Submit</button></td></tr>

		</form>
</table>

</div>
</div>
@endsection




        
        
    