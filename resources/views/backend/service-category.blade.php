@extends('backend.master')
@section('title')
    Service Category
@endsection
@php

    $datas = $services[0]->categories;
@endphp
@section('content')
<div class="category-info">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/service=NA/category=NA/list=NA">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">{{ $services[0]->title }}</li>
        </ol>
      </nav>
</div>

<div class="category-info">
    <form action="/admin/service/category/add/submit" method="POST">
        @csrf
        <input type="hidden" name="service_id" value="">
        <div class="row">
            <div class="col-2">
                <label for="no">No</label>
                @if (!empty($no))
                <input type="number" id="no" name="no" class="form-control" placeholder="No" value="{{$no}}">
                @else
                    <input type="number" id="no" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @endif
            </div>
            <div class="col-7">
                <label for="title_category">Service Category</label>
                <input type="text" id="title_category" name="title_category" class="form-control" placeholder="Service Category" value="{{ old('title_category') }}">

                <input type="hidden" name="service_id" value="{{ $services[0]->id }}">

            </div>
            <div class="col-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" >Active</option>
                    <option value="0" >Inactive</option>
                </select>

            </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <label for="status">Header Category</label>
            <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
          </div>
          <div class="col-6">
            <label for="status">Footer Reference</label>
            <textarea name="reference" id="" cols="30" rows="3" class="form-control"></textarea>
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
            @if (!empty($datas))
                @if (!empty($datas))


                @foreach($datas as $item)

                <tr>
                    <td>{{ $item->no }}</td>
                    <td>{{ $item->category }}</td>
                    <td>
                        @if($item->status == 0)
                            <div class="inactive">Inactive</div>
                        @else
                            <div class="active">Active</div>
                        @endif
                    </td>
                    <td>
                        <a href="/admin/service={{$services[0]->id}}/category={{$item->id}}/list=NA">
                            <button class=" btn btn-primary">
                                Main List
                            </button>
                        </a>
                    </td>
                </tr>

                @endforeach

                @endif
            @endif
        </tbody>
    </table>
</div>
@endsection



</script>
