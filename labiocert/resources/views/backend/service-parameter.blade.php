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
                    <label for="title_parameter">Add Parameter</label>
                    <input type="text" name="title_parameter" class="form-control" placeholder="Parameter" value="{{ old('title_parameter') }}">
                    @error('title_parameter')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="duration"></label>
                    <input type="text" name="duration" class="form-control" placeholder="Duration Analysis" value="{{ old('duration') }}">
                    @error('duration')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="method"></label>
                    <input type="text" name="method" class="form-control" placeholder="Method" >
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
        <tbody>
            @foreach($services_parameter as $service_parameter)
            @if($service_parameter->service_category_id == $service_category->id)
            <tr>
                <td>{{ $service_parameter->no }}</td>
                <td>{{ $service_parameter->title_parameter }}</td>
                <td>{{ $service_parameter->duration }}</td>
                <td>{{ $service_parameter->method }}</td>
                <td>
                    <!-- Update Button -->
                    <button type="button" class="btn btn-primary update-btn" data-id="{{ $service_parameter->id }}">Update</button>

                    <!-- Update Form -->
                    <form action="{{ url('/admin/service/service-category/parameterupdate/'.$service_parameter->id) }}" class="update-form" method="POST" style="display: none;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title_parameter" value="{{ $service_parameter->title_parameter }}">
                        <input type="text" name="duration" value="{{ $service_parameter->duration }}">
                        <input type="text" name="method" value="{{ $service_parameter->method }}">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                    </form>

                    <!-- Delete Form -->
                    <form action="{{ url('/admin/service/service-category/parameterdelete/'.$service_parameter->id) }}" method="POST" style="display: inline;">
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
    function setupUpdateButtons() {
        document.querySelectorAll('.update-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                showUpdateForm(button);
            });
        });
    }

    function setupCancelButtons() {
        document.querySelectorAll('.cancel-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                hideUpdateForm(button);
            });
        });
    }

    function showUpdateForm(button) {
        var form = button.nextElementSibling;
        form.style.display = 'block';
        button.style.display = 'none';
    }

    function hideUpdateForm(button) {
        var form = button.closest('.update-form');
        var updateBtn = form.previousElementSibling;
        form.style.display = 'none';
        updateBtn.style.display = 'block';
    }

    document.addEventListener('DOMContentLoaded', function() {
        setupUpdateButtons();
        setupCancelButtons();
    });
</script>