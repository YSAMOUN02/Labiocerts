@extends('backend.master')
@section('title')
    Service Category
@endsection
@section('content')
<div class="category-info">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/service">{{ $service->title }}</a></li>
          <li class="breadcrumb-item" aria-current="page">Service Category List<a href="#"></a></li>

        </ol>
      </nav>
</div>

<div class="category-info">
    <form action="/admin/service/service-category/submit" method="POST">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">
        <div class="row">
            <div class="col-2">
                <label for="no">No</label>
                <input type="text" id="no" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">

            </div>
            <div class="col-4">
                <label for="title_category">Service Category</label>
                <input type="text" id="title_category" name="title_category" class="form-control" placeholder="Service Category" value="{{ old('title_category') }}">

            </div>
            <div class="col-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" >Active</option>
                    <option value="0" >Inactive</option>
                </select>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>
    </form>
</div>

<div class="view-serve">
    <table class="mt-4">
        <tr>
            <th>No</th>
            <th>Service Category</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tbody class="btn-control">
            @foreach($services_category as $item)
            @if($item->service_id == $service->id)
            <tr>
                <td>{{ $item->no }}</td>
                <td>{{ $item->category }}</td>
                <td>
                    @if($item->status == 0)
                        <div class="inactive">Inactive</div>
                    @else
                        <div class="active">Active</div>
                    @endif
                </td>
                <td>
                    <!-- Parameter Button -->
                    <a href="/admin/service={{$servce_id}}/category={{$item->id}}">
                        <button class="btn btn-primary">Main List</button>
                    </a>

                    <!-- Update Button -->
                    <form id="form-{{ $item->id }}" action="'/admin/service/categoryupdate/{{$item->id}}}}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary update-btn" onclick="showUpdateForm('{{ $item->id }}')"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                    </form>

                    <div id="update-form-modal-{{  $item->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                    <div id="update-form-content-{{  $item->id }}" class="modal-content">
                        <form id="update-form-{{ $item->id }}" class="form-signin" action="'/admin/service/categoryupdate/{{$item->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <h2 class="form-signin-heading">Update Category</h2>
                            <p>No
                                <input id="no-{{  $item->id }}" type="number" class="form-control" name="no" value="{{ $item->no }}" placeholder="Number" required min="1" step="1">
                            </p>
                            <p>Service Category
                                <input id="title-{{ $item->id }}" type="text" class="form-control" name="title_category" value="{{ $item->category }}" placeholder="Service Title" required  maxlength="255">
                            </p>
                            <p>Reference
                                <input id="title-{{ $item->id }}" type="text" class="form-control" name="reference" value="{{ $item->reference }}" placeholder="Reference" required  maxlength="255">
                            <p>Status
                                <select id="status-{{ $item->id }}" class="form-control" name="status" required>
                                    @if($item->status == 0)
                                    <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Active</option>
                                    @else
                                    <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    @endif
                                </select>
                            </p>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
                            <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideUpdateForm('{{ $item->id }}')">Cancel</button>
                        </form>
                    </div>
                </div>

                    <!-- Delete Button -->
                    <button type="button" class="btn btn-danger delete-btn" onclick="showDeleteConfirm('{{ $item->id }}')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                    <!-- Delete Confirmation Modal -->
                    <div id="delete-confirm-modal-{{ $item->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="delete-confirm-content-{{ $item->id }}" class="modal-content" style="background-color: #fefefe; margin: 10% auto; padding: 20px 0px; border: 1px solid #888;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                            <div class="form-signin">
                                <h2 class="form-signin-heading">Confirm Delete</h2>
                                <p>Are you sure you want to delete this service?</p>
                                <form action="/admin/service/categorydelete/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>
                                    <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideDeleteConfirm('{{ $item->id }}')">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
{{-- <script>
   document.addEventListener('DOMContentLoaded', (event) => {
    const forms = document.querySelectorAll('form[id^="update-form-"]');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            const noInput = form.querySelector('[name="no"]');
            const noValue = parseInt(noInput.value, 10);
            const errorMessages = form.querySelectorAll('.error-message');

            // Reset previous error messages
            errorMessages.forEach(msg => msg.style.display = 'none');


            if (isNaN(noValue) || noValue <= 0) {
                e.preventDefault();
                noInput.nextElementSibling.textContent = 'Please enter a valid number greater than zero.';
                noInput.nextElementSibling.style.display = 'block';
                return;
            }

            // Additional validation can be added here if needed
        });
    });
}); --}}


</script>
