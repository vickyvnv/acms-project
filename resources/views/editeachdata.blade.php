<html>
<title></title>
<head></head>
<body>
<table>

<tr>
	<th><h1>Edit Teacher Data</h1></th></tr>

		<form method="post" action="{{$teacher->id}}" class="text-center border border-light p-5">
			
		<tr><td>	Name<input type="text" name="name" placeholder="name" class="form-control mb-2" value="{{$teacher->name}}"></br></label></td></tr>


			<tr><td>	Email<input type="email" name="email" placeholder="email" class="form-control mb-2" value="{{$teacher->email}}"></br></td></tr>


			<tr><td><tr><td>	Contact No.<input type="text" name="cno" placeholder="cno" class="form-control mb-2" value="{{$teacher->cno}}"></br></td></tr>

			<tr><td>	Secondary Contact No.<input type="text" name="scno" placeholder="Parent Contact Number" class="form-control mb-2" value="{{$teacher->scno}}"></br></td></tr></td></tr>



			<tr><td>	Address<textarea name="address" placeholder="address" class="form-control mb-2" value="{{$teacher->address}}"></textarea></br></td></tr>

			     
            <tr><td>      Subject Proficiency<input type="text" name="subject" placeholder="Subject Proficiency" class="form-control mb-2"> </td></tr> 
   			    
			<tr><td>	Experiance<input type="text" name="experiance" placeholder="Parent Contact Number" class="form-control mb-2" value="{{$teacher->experiance}}"></br></td></tr></td></tr>

			



			<tr><td align='center'> <legend>Batch Shift Select</legend>      
                 <input type="radio" name="batch" value="Morning 7 t0 9"> Morning 7 t0 9      
                 <input type="radio" name="batch" value="Evening 6 to 8">Evening 6 to 8  </br> </td></tr>   


			<tr><td>Salary<input type="text" name="salary" placeholder="Deposite Amount" class="form-control mb-2" value="{{$teacher->salary}}"></br></td></tr>


			




			<tr><td>	<input type="hidden" name="_token" value="{{ csrf_token() }}" >
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<button name="submit" alert-msg = "Done">Submit</button></td></tr>

		</form>
</table>




</body></html>










