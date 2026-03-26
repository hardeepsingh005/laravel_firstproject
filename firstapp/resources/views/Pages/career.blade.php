 @extends('Pages.layouts.main')

@section('content')

    {{-- career form page  --}}
 <div class="mt-5 pt-5 my-5 py-5">
   <div class="container mt-5 pt-5">
    <h1 class="mb-2">Table Data</h1>

  <!-- Table -->
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive rounded">
        <table style="padding: 10px" class="table table-hover fromTable align-middle mb-0 ">
          <a href="{{route('web.career')}}"></a>
          <thead class="table-light">
            <tr>
              <th style="width:40px"><input type="checkbox"></th>
              <th>ID</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Department</th>
              <th>Location</th>
              <th>DOJ</th>
              <th style="width:124px">Image Upload</th>
              <th>Status</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)

            <tr>
              <td><input type="checkbox"></td>
              <td>{{ $item->id}}</td>
              <td>{{ $item->name}}</td>
              <td>{{ $item->designation}}</td>
              <td>{{ $item->department}}</td>
              <td>{{ $item->location}}</td>
              <td>{{ $item->date}}</td>
              <td>
              <img id=""  src="{{ asset('uploads/' . $item->file) }}" alt="developer_Img"  class="rounded-3">
              </td>
              <td><span class="status-badge status-active">
              {{ $item->status}} 
            </span>
          </td>

              <td class="text-end">
                <button class="btn btn-sm  text-success border-0">
                  <a href="{{route('web.update_table', $item->id  )}}" target="_blank" class="text-success"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h8.925l-2 2H5v14h14v-6.95l2-2V19q0 .825-.587 1.413T19 21zm4-6v-4.25l9.175-9.175q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4t-.137.738t-.438.662L13.25 15zM21.025 4.4l-1.4-1.4zM11 13h1.4l5.8-5.8l-.7-.7l-.725-.7L11 11.575zm6.5-6.5l-.725-.7zl.7.7z"/></svg>
</a>

                </button>
               <button class="btn btn-sm text-danger border-0"
                               data-bs-toggle="modal"
                                data-bs-target="#deleteModal"
                                 data-id="{{ $item->id }}">
    <span>

        <form action="{{ route('destroy' , $item->id)}}" method="post" >
           @method('delete')
            @csrf
            
            <input type="submit" value="Delete" >
          </form>
        </span>
</button>  
              </td>
            </tr>
            @endforeach
          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>
</div>






 @endsection
 
 @push('webscript')
 <script src="{{url('assets\js\table_data.js')}}"></script>
<script>
 function myFunction() {
  let text;
  if (confirm("Press a button!") == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
 @endpush