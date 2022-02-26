@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    Notify Me
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> Notify Me <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> Notify Me </a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>E-mail</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notify as $notify)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $notify -> email }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-notify_id="{{$notify->id}}"
                                                data-toggle="modal" data-target="#deletednotify"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                            @include('layouts.notify.deleted')

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script>
        $('#deletednotify').on('show.bs.modal', function (event){
            var button = $(event.relatedTarget)
            var notify_id = button.data('notify_id')
            var modal = $(this)
            modal.find('.modal-body #notify_id').val(notify_id);
        })
    </script>
@endsection
