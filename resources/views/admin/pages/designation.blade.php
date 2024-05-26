@extends('admin.layouts.app')

@section('page-content')

<div class="content-wrapper">
    @if (\Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {!! \Session::get('error') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {!! \Session::get('success') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Designation</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Designation</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <?php
                    for ($i = 1; $i <= $noOfSections; $i++) {
                    ?>
                        <!-- Section 1 -->
                        <form action="{{ route('admin.designation.updatesection') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" id="pageName" name="pageName" value="designation">
                            <div class="form-group">
                                <input type="hidden" class="form-control " id="section" name="section" value="{{$i}}">
                                <label for="section{{$i}}Image">Section {{$i}} Image</label>
                                <input type="file" name="section{{$i}}Image" id="section{{$i}}Image" class="form-control">
                            </div>
                            <?php
                            if (!in_array($i, [3, 5, 7, 9])) {
                            ?>
                                <div class="form-group">
                                    <label for="section{{$i}}Heading">Section {{$i}} Heading</label>
                                    <input type="text" class="form-control" id="section{{$i}}Heading" name="section{{$i}}Heading"></input>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="section{{$i}}Content">Section {{$i}} Content</label>
                                <textarea class="form-control" id="section{{$i}}Content" name="section{{$i}}Content" rows="3"></textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!-- Section 1 -->
                        <hr>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
@endsection