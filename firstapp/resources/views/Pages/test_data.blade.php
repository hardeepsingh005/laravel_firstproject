<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<h1 class="text-center my-3">Data of Students</h1>

<table class="table container  table-bordered" border="1">
  <tr>
     <th>Student_ID</th>
    <th>Name</th>
    <th>Father_Name</th>
    <th>Mother_Name</th>
    <th>Class</th>
    <th>Gender</th>
    <th>Address</th>
    {{-- <th>Status</th> --}}

  </tr>
  @foreach ($data as $item)
  <tr>
    <td>{{ $item->student_ID }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->father_name }}</td>
     <td>{{ $item->mother_name }}</td>
    <td>{{ $item->class }}</td>
    <td>{{ $item->gender }}</td>
    <td>{{ $item->address }}</td>
    {{-- <td><button class="btn btn-danger">Drop</button></td> --}}
  </tr>
  @endforeach
</table>
