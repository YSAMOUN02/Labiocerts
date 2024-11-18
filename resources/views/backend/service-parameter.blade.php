@extends('backend.master')
@section('content')

<div class="category-info">
    <form action="">
        <div class="row">
            <div class="col-6">
                <label for="service_category">Service Category Title</label>
                <input type="text" name="service_category" id="service_category" class="form-control" value="{{$service_category->title_category}}" disabled>
            </div>
            <div class="col-6">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" disabled>
                    <option value="1" {{ $service_category->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $service_category->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
    </form>
</div>

<div class="view-service">
    <div class="category-info">
        <form action="{{ route('backend.service-parameter', $service_category->id) }}" method="POST">
            @csrf
            <input type="hidden" name="service_category_id" value="{{ $service_category->id }}">
            <div class="row">
                <div class="col-2">
                    <label for="no">No</label>
                    <input type="number" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                    @error('no')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="title_parameter">Parameter Title</label>
                    <input type="text" name="title_parameter" class="form-control" placeholder="Parameter" value="{{ old('title_parameter') }}">
                    @error('title_parameter')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control" placeholder="Duration Analysis" value="{{ old('duration') }}">
                    @error('duration')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="method">Method No</label>
                    <input type="text" name="method" class="form-control" placeholder="Method">
                    <!-- @error('method')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror -->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
        </form>
    </div>
    <table class="mt-4">
        <tr>
            <th>No</th>
            <th>Parameter</th>
            <th>Duration Analysis</th>
            <th>Method</th>
            <th>Action</th>
        </tr>
        <tbody class="btn-control">
            @foreach($services_parameter as $service_parameter)
            @if($service_parameter->service_category_id == $service_category->id)
            <tr>
                <td>{{ $service_parameter->no }}</td>
                <td>{{ $service_parameter->title_parameter }}</td>
                <td>{{ $service_parameter->duration }}</td>
                <td>{{ $service_parameter->method }}</td>
                <td>
                    <!-- Update Button -->
                    <form id="form-{{ $service_parameter->id }}" action="{{ url('/admin/service/service-category/parameterupdate/' . $service_parameter->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary" onclick="showUpdateForm('{{ $service_parameter->id}}')"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                    </form>

                    <!-- Update Form -->
                    <div id="update-form-modal-{{ $service_parameter->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="update-form-content-{{ $service_parameter->id }}" class="modal-content">
                            <form id="update-form-{{ $service_parameter->id }}" class="form-signin" action="{{ url('/admin/service/service-category/parameterupdate/' . $service_parameter->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h2 class="form-signin-heading">Update Parameter</h2>
                                <p>
                                    <label for="no-{{ $service_parameter->id }}">No</label>
                                    <input id="no-{{  $service_parameter->id }}" type="number" class="form-control" name="no" value="{{ $service_parameter->no }}" placeholder="Number" required min="1" step="1">
                                </p>
                                <p>
                                    <label for="title-{{ $service_parameter->id }}">Add Parameter</label>
                                    <input id="title-{{ $service_parameter->id }}" type="text" class="form-control" name="title_parameter" value="{{ $service_parameter->title_parameter }}" placeholder="Parameter Title" required>
                                </p>
                                <p>
                                    <label for="duration-{{ $service_parameter->id }}">Duration Analysis</label>
                                    <input id="duration-{{ $service_parameter->id }}" type="text" class="form-control" name="duration" value="{{ $service_parameter->duration }}" placeholder="Duration" required>
                                </p>
                                <p>
                                    <label for="method-{{ $service_parameter->id }}">Method</label>
                                    <input id="method-{{ $service_parameter->id }}" type="text" class="form-control" name="method" value="{{ $service_parameter->method }}" placeholder="Method" >
                                </p>

                                <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
                                <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideUpdateForm('{{ $service_parameter->id }}')">Cancel</button>
                            </form>
                        </div>
                    </div>
                    <!-- Delete Confirmation Modal -->
                    <!-- Delete Button -->
                    <button type="button" class="btn btn-danger delete-btn" onclick="showDeleteConfirm('{{ $service_parameter->id }}')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                    <div id="delete-confirm-modal-{{ $service_parameter->id }}" class="modal" style="display:none; position:fixed; top:0; left:0; width: 100%; height:100%; background-color:rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 100;">
                        <div id="delete-confirm-content-{{ $service_parameter->id }}" class="modal-content" style="background-color: #fefefe; margin: 10% auto; padding: 20px 0px; border: 1px solid #888;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                            <div class="form-signin">
                                <h2 class="form-signin-heading">Confirm Delete</h2>
                                <p>Are you sure you want to delete this service?</p>
                                <form action="{{ url('/admin/service/service-category/parameterdelete/'.$service_parameter->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>
                                    <button type="button" class="btn btn-lg btn-secondary btn-block cancel-btn" onclick="hideDeleteConfirm('{{ $service_parameter->id }}')">Cancel</button>
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
                const errorMessage = document.createElement('div');
                errorMessage.className = 'error-message';
                errorMessage.style.color = 'red';
                errorMessage.textContent = 'Please enter a valid number greater than zero.';
                noInput.parentNode.appendChild(errorMessage);
                errorMessage.style.display = 'block';
                return;
            }

            // Additional validation can be added here if needed
        });
    });
});

    function showUpdateForm(serviceParameterId) {
        const modal = document.getElementById(`update-form-modal-${serviceParameterId}`);
        modal.style.display = 'block';

        // Adjust modal content
        const modalContent = document.getElementById(`update-form-content-${serviceParameterId}`);
        modalContent.style.backgroundColor = '#fefefe';
        modalContent.style.margin = '10% auto';
        modalContent.style.padding = '20px';
        modalContent.style.border = '1px solid #888';
        modalContent.style.width = '30%';
        modalContent.style.boxShadow = '0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)';

        // Adjust form elements
        const titleInput = document.getElementById(`title-${serviceParameterId}`);
        const durationInput = document.getElementById(`duration-${serviceParameterId}`);
        const methodInput = document.getElementById(`method-${serviceParameterId}`);

        applyStyle(titleInput);
        applyStyle(durationInput);
        applyStyle(methodInput);
        // Allow closing modal by clicking outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                hideUpdateForm(serviceCategoryId);
            }
        };
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

    function hideUpdateForm(serviceParameterId) {
        const modal = document.getElementById(`update-form-modal-${serviceParameterId}`);
        modal.style.display = 'none';
    }

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