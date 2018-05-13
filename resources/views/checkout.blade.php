@extends ('welcome')

@section('content')



    <form action="{{ route('admin.store') }}" method="post" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name"> Card number </label>
            <input type="text" class="form-control" id="name">
        </div>
        <button class="btn btn-success">
            создать
        </button>
    </form>


@endsection('content')