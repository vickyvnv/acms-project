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
            <th>cno</th>
            <th>address</th>
            <th>subject</th>
            <th>Joining Date</th>
            <th>pcno</th>
            <th>pemail</th>
            <th>fee</th>
            <th>deposite</th>
            <th>pending</th>
            <th>Expiry remaining fee</th>
        </tr>
        @foreach($student as $stud)
        <tr>
            <td>{{$stud->id}}</td>
            <td>{{$stud->name}}</td>    
            <td>{{$stud->email}}</td>
            <td>{{$stud->cno}}</td>
            <td>{{$stud->address}}</td>
            <td>{{$stud->subject}}</td>
             <td>{{$stud->jdate}}</td>
            <td>{{$stud->pcno}}</td>
            <td>{{$stud->pemail}}</td>
            <td>{{$stud->fee}}</td>
            <td>{{$stud->deposite}}</td>
            <td>{{$stud->pending}}</td>
             <td>{{$stud->edate}}</td>
            <td><a href="studentedit/{{$stud->id}}">Edit</td>
            	<td><a href="retrivestud/{{$stud->id}}">Delete</td>


        </tr>
        @endforeach
    </table>
		

</div>
</div>

@endsection