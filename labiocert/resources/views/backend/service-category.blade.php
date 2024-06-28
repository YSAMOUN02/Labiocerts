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
                    <button type="button" class="btn btn-primary update-btn" data-id="{{ $service_category->id }}">Update</button>

                    <!-- Update Form (Initially hidden) -->
                    <form class="update-form" action="/admin/service/categoryupdate/{{ $service_category->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title_category" value="{{ $service_category->title_category }}" required>
                        <select name="status" required>
                            <option value="Active" {{ $service_category->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="Inactive" {{ $service_category->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                    </form>

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
    document.addEventListener('DOMContentLoaded', function() {
        const updateButtons = document.querySelectorAll('.update-btn');
        updateButtons.forEach(button => {
            button.addEventListener('click', function() {
                const form = this.nextElementSibling;
                form.style.display = 'block';
                this.style.display = 'none';
            });
        });

        const cancelButtons = document.querySelectorAll('.cancel-btn');
        cancelButtons.forEach(button => {
            button.addEventListener('click', function() {
                const form = this.closest('.update-form');
                form.style.display = 'none';
                form.previousElementSibling.style.display = 'inline-block';
            });
        });
    });
</script>