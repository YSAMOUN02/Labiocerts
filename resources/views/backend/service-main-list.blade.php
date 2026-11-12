@extends('backend.master')
@section('title')
    Main List
@endsection

@section('content')
<div class="category-info">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/service=NA/category=NA/list=NA">Home</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="/admin/service={{$services[0]->id}}/category=NA/list=NA">{{ $services[0]->title }}</a></li>

          <li class="breadcrumb-item" aria-current="page">{{ $services[0]->categories[0]->category }}</li>
          {{-- <li class="breadcrumb-item" aria-current="page">{{ $services[0]->categories[0]->category }}</li> --}}
        </ol>
      </nav>
</div>

<div class="category-info">
    <form action="/admin/service/mainlist/add/submit" method="POST">
        @csrf
        @if ($services[0]->categories)
        <input type="hidden" name="category_id" value="{{ $services[0]->categories[0]->id }}">
        @endif

        <input type="hidden" name="service_id" value="{{ $services[0]->id }}">
        <div class="row">
            <div class="col-2">
                <label for="no">No</label>
                @if (!empty($no))
                    <input type="number" id="no" name="no" class="form-control" placeholder="No" value="{{$no}}">
                @else
                    <input type="number" id="no" name="no" class="form-control" placeholder="No" value="{{ old('no') }}">
                @endif


            </div>
            <div class="col-4">
                <label for="mainlist">Main List Name</label>
                <input type="text" id="mainlist" required name="mainlist" class="form-control"  value="{{ old('mainlist') }}">

            </div>
            <div class="col-3">
                <label for="type">Type</label>

                <select name="type" id="type" class="form-control" >
                    <option value="analysis">Analysis</option>
                    <option value="service">Service</option>
                    <option value="product">Product</option>
                </select>


                </section>
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
            <th>Main List</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tbody class="btn-control">
            @if (!empty($services))

                @foreach($services[0]->categories[0]->mainlist as $item)

                <tr>
                    <td>{{ $item->no }}</td>
                    <td>{{ $item->list_name }}</td>
                    <td>

                        @if($item->status == 0)
                            <div class="inactive">Inactive</div>
                        @else
                            <div class="active">Active</div>
                        @endif
                    </td>
                    <td>
                        <a href="/admin/service={{$services[0]->id}}/category={{$item->category_id}}/list={{$item->id}}">
                            <button class=" btn btn-primary">
                                SubList
                            </button>
                        </a>
                    </td>
                </tr>

                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection



</script>
