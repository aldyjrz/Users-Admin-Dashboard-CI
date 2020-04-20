
@extends('layouts.app')

@section('css')

<html>
.btn-group .btn {
    transition: background-color .3s ease;
}

.panel-table .panel-body {
    padding: 0;
}

.table > thead > tr > th {
    border-bottom: none;
}

.panel-footer, .panel-table .panel-body .table-bordered {
    border-style: none;
    margin: 0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align: center;
    width: 50px;
}

.panel-table .panel-body .table-bordered > thead > tr > th.col-tools {
    text-align: center;
    width: 120px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
    border-right: 0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
    border-left: 0;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td {
    
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th {
    border-top: 0;
}

.pagination > li > a, .pagination > li > span {
    border-radius: 50% !important;
    margin: 0 5px;
}

.pagination {
    margin: 0;
}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Members</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                 <form action="{{ url()->current() }}">
                            <div class="col-md-10">
                                <input type="text" name="keyword" class="form-control" placeholder="Search name or email..." value="{{ request('keyword') }}">
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </form>
</br>
                    <table id="mytable" class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th class="col-tools"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                            </th>
                            <th class="hidden-xs">Nama</th>
                            <th class="col-text">Email</th>
                            <th class="col-text">IMEI</th> 
                            <th class="col-text">Created</th>
                            <th class="col-text">Expired</th>
                            <th class="col-text">Created By</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                        <tr>
                            <td align="center">
                                <a class="btn btn-danger" href="{{route('deleteMember',$member->id)}}"><span class="glyphicon glyphicon-trash"
                                                                aria-hidden="true"></span></a>
                                                                 <a class="btn btn-danger" href="{{route('editMember',$member->id)}}"><span class="glyphicon glyphicon-pencil"
                                                                aria-hidden="true"></span></a>
                            </td>
                            <td>{{$member->nama}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->IMEI}}</td>
                            <td>{{$member->created_at}}</td>
                            <td>{{$member->expired_date}}</td>
                            <td>{{$member->created_by}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-offset-3 col-xs-6">
                            <nav aria-label="Page navigation" class="text-center">
                               {{ $members->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>

@endsection

@section('js')
@endsection