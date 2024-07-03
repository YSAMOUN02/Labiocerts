@extends('backend.master')
@section('content')
<div class="category-info">
            <form action="{{ route('client-logos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="image">Logo client</label>
                        <input type="file" name="image" accept="image/*" onchange="loadFile(event)" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="preview-logo mt-4">
            <small class="text-danger">Recommend image for web size 200x200</small>
            <img width="200px" height="200px" style="object-fit: contain;" alt="Preview File" id="output" />
        </div>
        <div class="preview-logo mt-4">
            <small class="text-danger">Recommend image for web size 200x200</small>
            <img width="200px" height="200px" style="object-fit: contain;" alt="Preview File" id="output" />
        </div>

        <table class="mt-2">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientLogos as $clientLogo)
                    <tr>
                        <td><img width="200px" height="150px" style="object-fit: contain;" src="{{ Storage::url($clientLogo->image_path) }}" alt=""></td>
                        <td><a href="{{ $clientLogo->link }}">{{ $clientLogo->link }}</a></td>
                        <td>
                            <form action="{{ route('client-logos.destroy', $clientLogo) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            <a href="#" onclick="document.getElementById('update-form-{{ $clientLogo->id }}').style.display='block';">
                                <button class="btn btn-primary">Update</button>
                            </a>
                        </td>
                    </tr>
                    <tr id="update-form-{{ $clientLogo->id }}" style="display: none;">
                        <td colspan="3">
                            <form action="{{ route('client-logos.update', $clientLogo) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <label for="image">Logo client</label>
                                        <input type="file" name="image" accept="image/*" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="link">Link</label>
                                        <input type="text" name="link" value="{{ $clientLogo->link }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection