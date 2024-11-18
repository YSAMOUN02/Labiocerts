@extends('backend.master')
@section('content')
<div class="category-info">
    <form>
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="service">Service Title</label>
                <input type="text" name="service" id="service" class="form-control" value="{{ $service->title }}" disabled>
            </div>
            <div class="col-6">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" disabled>
                    <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
    </form>
</div>

<div class="category-info">
    <form action="{{ route('backend.service-category', $service->id) }}" method="POST">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">
        <div class="row">
            <div class="col-2">
                <label for="no">No</label>
                <input type="text" id="no" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @error('no')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="title_category">Service Category</label>
                <input type="text" id="title_category" name="title_category" class="form-control" placeholder="Service Category" value="{{ old('title_category') }}">
                @error('title_category')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" >Active</option>
                    <option value="0" >Inactive</option>
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <textarea  name="reference" class="form-control" placeholder="Reference">{{ old('reference') }}</textarea>
                @error('reference')
                <div class="text-danger">{{ $message }}</div>
                @enderror
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
            @foreach($services_category as $service_category)
            @if($service_category->service_id == $service->id)
            <tr>
                <td>{{ $service_category->no }}</td>
                <td>{{ $service_category->title_category }}</td>
                <td>
                    @if($service_category->status == 0)
                        <div class="inactive">Inactive</div>
                    @else
                        <div class="active">Active</div>
                    @endif
                </td>
                <td>
                    <!-- Parameter Button -->
                    <a href="{{ route('backend.service-parameter',$service_category->id) }}">
                        <button class="btn btn-primary">Parameter</button>
                    </a>

                    <!-- Update Button -->
                    <form id="form-{{ $service_category->id }}" action="{{ url('/admin/service/categoryupdate/' . $service_category->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary update-btn" onclick="showUpdateForm('{{ $service_category->id }}')"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                    </form>

                    <div id="update-form-modal-{{  $service_category->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                    <div id="update-form-content-{{  $service_category->id }}" class="modal-content">
                        <form id="update-form-{{ $service_category->id }}" class="form-signin" action="{{ url('/admin/service/categoryupdate/' .  $service_category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <h2 class="form-signin-heading">Update Category</h2>
                            <p>No
                                <input id="no-{{  $service_category->id }}" type="number" class="form-control" name="no" value="{{ $service_category->no }}" placeholder="Number" required min="1" step="1">
                            </p>
                            <p>Service Category
                                <input id="title-{{ $service_category->id }}" type="text" class="form-control" name="title_category" value="{{ $service_category->title_category }}" placeholder="Service Title" required  maxlength="255">
                            </p>
                            <p>Reference
                                <input id="title-{{ $service_category->id }}" type="text" class="form-control" name="reference" value="{{ $service_category->reference }}" placeholder="Reference" required  maxlength="255">
                            <p>Status
                                <select id="status-{{ $service_category->id }}" class="form-control" name="status" required>
                                    @if($service_category->status == 0)
                                    <option value="0" {{ $service_category->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    <option value="1" {{ $service_category->status == 1 ? 'selected' : '' }}>Active</option>
                                    @else
                                    <option value="1" {{ $service_category->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $service_category->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    @endif 
                                </select>
                            </p>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
                            <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideUpdateForm('{{ $service_category->id }}')">Cancel</button>
                        </form>
                    </div>
                </div>

                    <!-- Delete Button -->
                    <button type="button" class="btn btn-danger delete-btn" onclick="showDeleteConfirm('{{ $service_category->id }}')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                    <!-- Delete Confirmation Modal -->
                    <div id="delete-confirm-modal-{{ $service_category->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="delete-confirm-content-{{ $service_category->id }}" class="modal-content" style="background-color: #fefefe; margin: 10% auto; padding: 20px 0px; border: 1px solid #888;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                            <div class="form-signin">
                                <h2 class="form-signin-heading">Confirm Delete</h2>
                                <p>Are you sure you want to delete this service?</p>
                                <form action="{{ url('/admin/service/categorydelete/'.$service_category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>
                                    <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideDeleteConfirm('{{ $service_category->id }}')">Cancel</button>
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
<script>
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
});


</script>