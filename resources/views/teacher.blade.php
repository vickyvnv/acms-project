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
   <td><h1>Registration Form For Teachers</h1></td>
</tr><center>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>


		<form method="post" action="teacherdata" class="text-center border border-light p-5">
			
				<tr><td align='center'><tr><td align='center'>Name<input type="text" name="name" placeholder="name" class="form-control mb-2"></br></td></tr>


				<tr><td align='center'>Email<input type="email" name="email" placeholder="email" class="form-control mb-2"></br></td></tr>


				<tr><td align='center'>
                    Contact No.<input type="text" name="cno" placeholder="cno" class="form-control mb-2"></br></td></tr><tr><td align='center'></td></tr>


               <tr><td align='center'>
                     Secondary Contact No.<input type="text" name="scno" placeholder="cno" class="form-control mb-2"></br><tr><td align='center'>
                </td></tr>


				<tr><td align='center'>Address<textarea name="address" placeholder="address" class="form-control mb-2"></textarea></br></td></tr>

			     
                 <tr><td align='center'>
             Subject Proficiency<input type="text" name="subject" placeholder="Subject Proficiency" class="form-control mb-2"></br></td></tr>
   			    
				<tr><td align='center'>Experiance<input type="text" name="experiance" placeholder="Your Experiance" class="form-control mb-2"></br></td></tr>


               <tr><td align='center'> <legend>Batch Shift Select</legend>      
                 <input type="radio" name="batch" value="Morning 7 t0 9"> Morning 7 t0 9      
                 <input type="radio" name="batch" value="Evening 6 to 8">Evening 6 to 8  </br> </td></tr>    
                 
                <tr><td align='center'>Salary<input type="text" name="salary" placeholder="Teacher Salary" class="form-control mb-2"></br></td></tr>

				



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