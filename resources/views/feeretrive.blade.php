@extends('master')
        <!-- //header-ends -->
        <!-- main content start-->
        @section('body')
        <!-- //header-ends -->
        <!-- main content start-->
<div id="page-wrapper">
<div class="main-page">

		<table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Contact No.</th>
            <th>address</th>
            <th>Joining Date</th>
            <th>Parent Contact</th>
            <th>Parent Email</th>
            <th>fee</th>
            <th>deposite</th>
            <th>pending</th>
            <th>Expiry fee date</th>
        </tr>
        @foreach($student as $stud)
        <tr>
            <td>{{$stud->id}}</td>
            <td>{{$stud->name}}</td>    
            <td>{{$stud->email}}</td>
            <td>{{$stud->cno}}</td>
            <td>{{$stud->address}}</td>
             <td>{{$stud->jdate}}</td>
           
            <td>{{$stud->pcno}}</td>
            <td>{{$stud->pemail}}</td>
            <td>{{$stud->fee}}</td>
            <td>{{$stud->deposite}}</td>
            <td>{{$stud->pending}}</td>
             <td>{{$stud->edate}}</td>
            

        </tr>
        @endforeach
    </table>
		

</div>
</div>

@endsection