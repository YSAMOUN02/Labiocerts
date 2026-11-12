@extends('backend.master')
@section('title')
    All Service
@endsection
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
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
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
</div>
</form>
<div class="view-service mt-3" >
    <table >
        <tr>
            <th>No</th>
            <th>Service Title</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <tbody class="btn-control">
            @foreach($services as $service)
            <tr>
                <td>{{ $service->no }}</td>
                <td>{{ $service->title }}</td>
                <td>
                    @if($service->status == 0)
                        <div class="inactive">Inactive</div>
                    @else
                        <div class="active">Active</div>
                    @endif
                </td>
                <td>

                    <a href="/admin/service={{$service->id}}/category=NA/list=NA">
                        <button class=" btn btn-primary">
                            Category
                        </button>
                    </a>
                    {{-- <!-- Update Button -->
                    <button type="button" class="btn btn-primary update-btn" onclick="showUpdateForm('{{ $service->id }}')"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>

                   <!-- Delete Button -->
                   <button type="button" class="btn btn-danger delete-btn" onclick="showDeleteConfirm('{{ $service->id }}')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
