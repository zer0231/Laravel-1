@extends('layouts.app')
@section('contents')


<h1>Student List</h1>
<div style="margin:20px 0;">
    <a href="/student-form/create">
        <button>
            Add Student
        </button>
    </a>

    <a href="/student-list">
        <button>
            View Students
        </button>
    </a>
</div>

<table>
<tr>
  <th>SN</th>
  <th>Name</th>
  <th>Email Address</th>
  <th>Phone Number</th>
  <th>Status</th>
  <th>Action</th>
</tr>

@if($students)
@foreach($students as $student)
<tr>
  <td>{{ $student->id }}</td>
  <td>{{ $student->name}}</td>
  <td>{{ $student->email}}</td>
  <td>{{ $student->phone}}</td>
  <td>
    @if($student->status == 1)
    <span>Active</span>
    @elseif($student->status == 0)
    <span>Deleted</span>
    @endif
  </td>

<td>
    <a href="/student/{{$student->id}}">View</a>
    <a href="/student/update/{{$student->id}}">Edit</a>
    <a onClick="confirmDelete(this.id)" id="{{$student->id}}" href="javascript:void(0)">Delete</a>
</td>
</tr>
@endforeach
@else
<tr colspan="5">
  <td>No students record found</td>
</tr>
@endif
</table>
<script>
function confirmDelete(id) {
  let del = confirm();
  if (del) {
    window.location.href = '/student/remove/' + id
  }
}
</script>
@endsection