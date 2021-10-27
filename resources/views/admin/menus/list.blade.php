@extends('admin.main')

@section('content')

                <div class="row" style="">
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Table design <small>Custom design</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                        <tr class="headings">
                                             <th class="column-title">ID</th>
                                            <th class="column-title">Name</th>
                                            <th class="column-title">Active</th>
                                            <th class="column-title">Update</th>
                                            <th class="column-title">&nbsp; </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {!! \App\Helpers\Helper::menu($menus) !!}


                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

<div>
    <span >{{$menus->render() }}</span>
</div>
@endsection


