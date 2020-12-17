@extends('master')
        <!-- //header-ends -->
        <!-- main content start-->
        @section('body')

<div id="page-wrapper">
<div class="main-page">

		<table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>cno</th>
            <th>scno</th>
            <th>address</th>
            <th>subject</th>
            <th>experiance</th>
            <th>Batch</th>
            <th>Salary</th>
            
        </tr>
        @foreach($teacher as $teach)
        <tr>
            <td>{{$teach->id}}</td>
            <td>{{$teach->name}}</td>    
            <td>{{$teach->email}}</td>
            <td>{{$teach->cno}}</td>
            <td>{{$teach->scno}}</td>
            <td>{{$teach->address}}</td>
            <td>{{$teach->subject}}</td>
            
            <td>{{$teach->experiance}}</td>
            <td>{{$teach->batch}}</td>
            <td>{{$teach->salary}}</td>
            
            <td><a href="teacheredit/{{$teach->id}}">Edit</td>
            	<td><a href="retriveteach/{{$teach->id}}">Delete</td>


        </tr>
        @endforeach
    </table>
		

</div>
</div>


         @endsection