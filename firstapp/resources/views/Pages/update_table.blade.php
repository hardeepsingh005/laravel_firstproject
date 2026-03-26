@extends('Pages.layouts.main')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="pt-5 mt-5 my-5 py-5">
  <div class="container mt-5 pt-5">

    <div class="card p-3 shadow-sm">
      <h5 class="mb-3">Update Employee</h5>

      <!-- Header Row -->
      <div class="row g-2 flex-nowrap overflow-auto mb-2 fw-bold text-nowrap bg-light py-2 rounded">
        <div class="col">ID</div>
        <div class="col">Name</div>
        <div class="col">Designation</div>
        <div class="col">Department</div>
        <div class="col">Location</div>
        <div class="col">DOJ</div>
        <div class="col">Image Upload</div>
        <div class="col">Status</div>
        <div class="col text-center">Actions</div>
      </div>

      <!-- Form Row -->
      <form class="tableForm"  action="{{route('career', $data->id)}}" method="post">@csrf 

        <div class="row g-2 align-items-center flex-nowrap overflow-auto">

          <div class="col">
            <input type="text" class="form-control" value="{{ $data->id }}" require>
          </div>

          <div class="col">
            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name">
          </div>

          <div class="col">
            <input type="text" class="form-control" name="designation" value="{{$data->designation}}" placeholder="Designation">
          </div>

          <div class="col">
            <input type="text" class="form-control" name="department" value="{{$data->department}}" placeholder="Department">
          </div>

          <div class="col">
            <input type="text" class="form-control" name="location" value="{{$data->location}}" placeholder="Location">
          </div>

          <div class="col">
            <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::parse($data->date)->format('Y-m-d') }}">
          </div>

          <div class="col">
            <input type="file" name="image"  class="form-control" style="width: 105px">
          </div>

          <div class="col">
            <select name="status" class="form-select">
              <option selected>Active</option>
              <option>Inactive</option>
            </select>
          </div>

          <div class="col">
            <button type="submit" class="btn btn-success w-100">
              Submit
            </button>
          </div>

        </div>
      </form>

    </div>

  </div>
</div>

@endsection

@push('webscript')
<script src="{{ url('assets/js/table_data.js') }}"></script>
@endpush