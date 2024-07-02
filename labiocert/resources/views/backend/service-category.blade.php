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
                <input type="text" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @error('no')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="title_category">Service Category</label>
                <input type="text" name="title_category" class="form-control" placeholder="Service Category" value="{{ old('title_category') }}">
                @error('title_category')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status') == 1 ? 'selected' : ''}}>Active</option>
                    <option value="0" {{ old('status') == 0 ? 'selected' : ''}}>Inactive</option>
                </select>
                @error('status')
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
        <tbody>
            @foreach($services_category as $service_category)
            @if($service_category->service_id == $service->id)
            <tr>
                <td>{{ $service_category->no }}</td>
                <td>{{ $service_category->title_category }}</td>
                <td>{{ $service_category->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    <!-- Parameter Button -->
                    <a href="{{ route('backend.service-parameter',$service_category->id) }}">
                        <button class="btn btn-primary">Parameter</button>
                    </a>

                    <!-- Update Button -->
                    <form id="form-{{ $service_category->id }}" action="/admin/service/categoryupdate/{{ $service_category->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary update-btn" onclick="showUpdateForm('{{ $service_category->id }}')">Update</button>
                    </form>
                    <!-- Update Form (Initially hidden) -->
                    <div id="update-form-modal-{{ $service_category->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="update-form-content-{{$service_category->id}}" class="modal-content">
                            <span class="close" onclick="hideUpdateForm('{{ $service_category->id }}')" style="cursor: pointer; float:right; font-size:40px;">&times;</span>
                            <form id="update-form-{{ $service_category->id }}" class="form-signin" action="/admin/service/update/{{ $service_category->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h2 class="form-signin-heading">Update Category</h2>
                                <p>Service Category
                                    <input id="title-{{ $service_category->id }}" type="text" class="form-control" name="title_category" value="{{ $service_category->title_category }}" placeholder="Service Title" required>
                                </p>
                                <p>Status
                                    <select id="status-{{ $service_category->id }}" class="form-control" name="status" required>
                                        <option value="Active" {{ $service_category->status == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="Inactive" {{ $service_category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </p>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
                                <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideUpdateForm('{{ $service_category->id }}')">Cancel</button>
                            </form>
                        </div>
                    </div>

                    <!-- Delete Form -->
                    <form action="/admin/service/categorydelete/{{ $service_category->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<script>
   function showUpdateForm(servicecategoryId) {
        const modal = document.getElementById(`update-form-modal-${servicecategoryId}`);
        modal.style.display = 'block';

        // Adjust modal content
        const modalContent = document.getElementById(`update-form-content-${servicecategoryId}`);
        modalContent.style.backgroundColor = '#fefefe';
        modalContent.style.margin = '10% auto';
        modalContent.style.padding = '20px';
        modalContent.style.border = '1px solid #888';
        modalContent.style.width = '30%';
        modalContent.style.boxShadow = '0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)';

        // Adjust form elements
        const titleInput = document.getElementById(`title_category-${servicecategoryId}`);
        const statusSelect = document.getElementById(`status-${servicecategoryId}`);

        applyStyle(titleInput);
        applyStyle(statusSelect);
    }

    function applyStyle(element) {
        element.style.width = '100%';
        element.style.marginBottom = '10px';
        element.style.padding = '10px';
        element.style.border = '1px solid #ccc';
        element.style.borderRadius = '4px';
        element.style.boxSizing = 'border-box';
        element.style.fontSize = '16px';
    }

    function hideUpdateForm(servicecategoryId) {
        const modal = document.getElementById(`update-form-modal-${servicecategoryId}`);
        modal.style.display = 'none';
    }
</script>