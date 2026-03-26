<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<h1 class="text-center my-3">Resume Candidate</h1>

<table class="table container  table-bordered" border="1">
  <tr>
     <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Qualification</th>
    <th>Address</th>
    <th>Position</th>
    <th>Resume</th>
    <th>Gender</th>
    <th>Interest</th>
    <th>Security</th>

  </tr>
  @foreach ($data as $item)
  <tr>
    <td>{{ $item->id}}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
     <td>{{ $item->contact }}</td>
    <td>{{ $item->qualification }}</td>
    <td>{{ $item->address }}</td>
    <td>{{ $item->position }}</td>
    <td>{{ $item->resume }}</td>
    <td>{{ $item->gender }}</td>
    <td>{{ $item->interest }}</td>
    <td>{{ $item->security }}</td>
  </tr>
  
  @endforeach

</table>
