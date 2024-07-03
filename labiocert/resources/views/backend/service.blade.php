@extends('backend.master')
@section('content')
<div class="category-info">

    <form action="/admin/service/submit" method="POST">
        @csrf

        <div class="row">
            <div class="col-2">
                <label for="no">No</label>
                <input type="text" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @error('no')
                <div class="text-danger">{{ $message  }}</div>
                @enderror
            </div>

            <div class="col-8">
                <label for="service">Service</label>
                <input type="text" name="service" class="form-control" placeholder="service" value="{{ old('service') }}">
                @error('service')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-2">
                <label for="status"></label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status') == 1 ? 'selected' : ''}}>Active</option>
                    <option value="0" {{ old('status') == 0 ? 'selected' : ''}}>Inactive</option>
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <textarea name="reference" class="form-control" placeholder="Reference">{{ old('reference') }}</textarea>
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
</div>
</form>
<div class="view-servce">
    <table class="mt-4">
        <tr>
            <th>No</th>
            <th>Service Title</th>
            <th>Reference</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->no }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->reference }}</td>
                <td>{{ $service->status }}</td>
                <td>

                    <a href="{{ route('backend.service-category', $service->id) }}">
                        <button class=" btn btn-primary">
                            Category
                        </button>
                    </a>
                    <!-- Update Button -->
                    <form id="form-{{ $service->id }}" action="/admin/service/update/{{ $service->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary update-btn" onclick="showUpdateForm('{{ $service->id }}')">Update</button>
                    </form>

                    <!-- Update Form (Initially hidden) -->
                    <div id="update-form-modal-{{ $service->id }}" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="update-form-content-{{ $service->id }}" class="modal-content">
                            <span class="close" onclick="hideUpdateForm('{{ $service->id }}')" style="cursor: pointer; float: left; font-size:40px;">&times;</span>
                            <form id="update-form-{{ $service->id }}" class="form-signin" action="/admin/service/update/{{ $service->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h2 class="form-signin-heading">Update Service</h2>
                                <p>Service Title
                                <input id="title-{{ $service->id }}" type="text" class="form-control" name="title" value="{{ $service->title }}" placeholder="Service Title" required></p>
                                <p>Reference
                                <textarea id="reference-{{ $service->id }}" class="form-control" name="reference" placeholder="Reference" required>{{ $service->reference }}</textarea></p>
                                <p>Status
                                <select id="status-{{ $service->id }}" class="form-control" name="status" required>
                                    <option value="Active" {{ $service->status == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Inactive" {{ $service->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                </select></p>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
                                <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideUpdateForm('{{ $service->id }}')">Cancel</button>
                            </form>
                        </div>
                    </div>
                   <!-- Delete Button -->
                   <button type="button" class="btn btn-danger delete-btn" onclick="showDeleteConfirm('{{ $service->id }}')">Delete</button>
                   <!-- Delete Confirmation Modal -->
                   <div id="delete-confirm-modal-{{ $service->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="delete-confirm-content-{{ $service->id }}" class="modal-content" style="background-color: #fefefe; margin: 10% auto; padding: 20px 0px; border: 1px solid #888;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                            <div class="form-signin">
                                <h2 class="form-signin-heading">Confirm Delete</h2>
                                <p>Are you sure you want to delete this service?</p>
                                <form action="{{ url('/admin/service/delete/'.$service->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>
                                    <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideDeleteConfirm('{{ $service->id }}')">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    function showUpdateForm(serviceId) {
        const modal = document.getElementById(`update-form-modal-${serviceId}`);
        modal.style.display = 'block';

        // Adjust modal background
        modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        modal.style.backdropFilter = 'blur(5px)';

        // Adjust modal content
        const modalContent = document.getElementById(`update-form-content-${serviceId}`);
        modalContent.style.backgroundColor = '#fefefe';
        modalContent.style.margin = '10% auto';
        modalContent.style.padding = '20px';
        modalContent.style.border = '1px solid #888';
        modalContent.style.width = '30%';
        modalContent.style.boxShadow = '0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)';

        // Adjust form elements
        const titleInput = document.getElementById(`title-${serviceId}`);
        const referenceTextarea = document.getElementById(`reference-${serviceId}`);
        const statusSelect = document.getElementById(`status-${serviceId}`);

        applyStyle(titleInput);
        applyStyle(referenceTextarea);
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

    function hideUpdateForm(serviceId) {
        const modal = document.getElementById(`update-form-modal-${serviceId}`);
        modal.style.display = 'none';
    }
    //update 
    function showDeleteConfirm(serviceParameterId) {
        const modal = document.getElementById(`delete-confirm-modal-${serviceParameterId}`);
        modal.style.display = 'block';

        // Adjust modal content
        const modalContent = document.getElementById(`delete-confirm-content-${serviceParameterId}`);
        modalContent.style.backgroundColor = '#fefefe';
        modalContent.style.margin = '10% auto';
        modalContent.style.padding = '20px';
        modalContent.style.border = '1px solid #888';
        modalContent.style.width = '15%';
        modalContent.style.boxShadow = '0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)';
    }

    function hideDeleteConfirm(serviceParameterId) {
        const modal = document.getElementById(`delete-confirm-modal-${serviceParameterId}`);
        modal.style.display = 'none';
    }
</script>
@endsection