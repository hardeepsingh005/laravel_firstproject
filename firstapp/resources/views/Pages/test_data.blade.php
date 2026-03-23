<h1>Data of Students</h1>


 
<table border="1">
  <tr>
     <th>Student_ID</th>
    <th>Name</th>
    <th>Father_Name</th>
    <th>Mother_Name</th>
    <th>Class</th>
    <th>Gender</th>
    <th>Address</th>

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
  </tr>
  @endforeach
</table>
