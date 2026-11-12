@extends('backend.master')
@section('title')
    Sub List
@endsection
@php

    $datas = $services[0]->categories[0]->mainlist[0]->sublist;
@endphp

@section('content')
<div class="category-info">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/service=NA/category=NA/list=NA">Home</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="/admin/service={{$services[0]->id}}/category=NA/list=NA">{{ $services[0]->title }}</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="/admin/service={{$services[0]->id}}/category={{$services[0]->categories[0]->id}}/list=NA">{{ $services[0]->categories[0]->category }}</a></li>
          <li class="breadcrumb-item" aria-current="page">{{ $services[0]->categories[0]->mainlist[0]->list_name }}</li>
        </ol>
      </nav>
</div>

<div class="category-info">
    <form action="/admin/service/sublist/add/submit" method="POST">
        @csrf

        <input type="hidden" name="mainlist_id" value="{{ $services[0]->categories[0]->mainlist[0]->id }}">

        <input type="hidden" name="service_id" value="{{ $services[0]->id }}">
        <input type="hidden" name="category_id" value="{{ $services[0]->categories[0]->id }}">

        <div class="row">
            <div class="col-1">
                <label for="no">No</label>
                @if (!empty($no))
                    <input type="number" id="no" name="no" class="form-control" placeholder="No" value="{{$no}}">
                @else
                    <input type="number" id="no" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @endif


            </div>
            <div class="col-3">
                @if ($services[0]->categories[0]->mainlist[0]->type == 'product')
                <label for="mainlist">Product </label>
                @else
                <label for="mainlist">Sub list </label>
                @endif

                <input type="text" id="mainlist" required name="sublist" class="form-control"  value="{{ old('mainlist') }}">

            </div>
            <div class="col-3">
                @if ($services[0]->categories[0]->mainlist[0]->type == 'product')
                <label for="method">Recommended Test Parameters</label>
                @else
                <label for="method">Method</label>
                @endif

                <input type="text" id="method"  name="method" class="form-control"  value="{{ old('method') }}">

            </div>
            @if ($services[0]->categories[0]->mainlist[0]->type == 'product')

            @else

            <div class="col-2">
                <label for="duration">Duration </label>
                <input type="text" id="duration"  name="duration" class="form-control"  value="2 days">

            </div>
            @endif

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
            <th>Sub List</th>
            <th>Method</th>
            <th>Duration</th>
            <th>Action</th>
        </tr>
        <tbody class="btn-control">
            @if (!empty($datas))

                @foreach($datas as $item)

                <tr>
                    <td>{{ $item->no }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->method }}</td>
                    <td>{{ $item->duration }}</td>
                    <td></td>
                </tr>

                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection



</script>
