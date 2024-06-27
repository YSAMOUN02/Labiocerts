@extends('backend.master')
@section('content')
<div class="category-info">

    <form action="/admin/service/submit" method="POST">
        @csrf
        <div class="row">

            <div class="col-2">
                <label for="id">No</label>
                <input type="text" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
            </div>

            <div class="col-8">
                <label for="service">Service</label>
                <input type="text" name="service" id="service" class="form-control" placeholder="service" value="{{ old('title') }}">
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
                <div class="text-danget">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="text" name="reference" class="form-control" placeholder="Reference" value="{{ old('reference') }}">
                @error('reference')
                <div class="text-danger">{{ $message  }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" class="btn-success">Add</button>
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
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->reference }}</td>
                <td>{{ $service->status }}</td>
                <td>

                <a href="{{ route('backend.service-category', $service->id) }}">
                    <button class="btn-primary">
                        Category
                    </button>
                </a>
                    <!-- Update Button -->
                    <form action="/admin/service/update/{{ $service->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary update-btn">Update</button>
                    </form>
                    <!-- Update Form (Initially hidden) -->
                    <form class="update-form" action="/admin/service/update/{{ $service->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" value="{{ $service->title }}" required>
                        <input type="text" name="reference" value="{{ $service->reference }}" required>
                        <select name="status" required>
                            <option value="Active" {{ $service->status == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Inactive" {{ $service->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                    </form>

                    <!-- Delete Form -->
                    <form action="/admin/service/delete/{{ $service->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateButtons = document.querySelectorAll('.update-btn');
        const cancelButtons = document.querySelectorAll('.cancel-btn');

        updateButtons.forEach(button => {
            button.addEventListener('click', function() {
                const updateForm = this.closest('td').querySelector('.update-form');
                updateForm.style.display = 'block';
                this.style.display = 'none';
            });
        });

        cancelButtons.forEach(button => {
            button.addEventListener('click', function() {
                const updateForm = this.closest('.update-form');
                updateForm.style.display = 'none';
                updateForm.closest('td').querySelector('.update-btn').style.display = 'inline';
            });
        });
    });
</script>
@endsection