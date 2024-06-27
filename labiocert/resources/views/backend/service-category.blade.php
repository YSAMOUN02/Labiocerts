@extends('backend.master')
@section('content')
<div class="category-info">
    <form >
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
    <form action="/admin/service/categorysubmit" method="POST">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">
        <div class="row">
            <div class="col-2">
                <label for="id">No</label>
                <input type="text" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @error('no')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="title_category">Service Category</label>
                <input type="text" name="title_category" class="form-control" placeholder="Service Category" value="{{ old('category') }}">
                @error('category')
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
                <button type="submit" class="btn-success">Add</button>
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
            <tr>
                <td>{{ $service_category->no }}</td>
                <td>{{ $service_category->title_category }}</td>
                <td>{{ $service_category->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="/admin/service/category/parameter">
                        <button class="btn-primary">
                            Parameter
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection