<h1 class="text-center my-3">Data of Appointment</h1>

<table class="table container  table-bordered" border="1">
  <tr>
     <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Services</th>
    <th>Date Of Appointment</th>
    {{-- <th>Status</th> --}}

  </tr>
  @foreach ($data as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->firstName }}</td>
    <td>{{ $item->lastName }}</td>
     <td>{{ $item->email }}</td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->services }}</td>
    <td>{{ $item->appointment }}</td>
    {{-- <td><button class="btn btn-danger">Drop</button></td> --}}
  </tr>
  @endforeach
</table>
