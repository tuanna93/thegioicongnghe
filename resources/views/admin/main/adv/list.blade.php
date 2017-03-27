@extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách quảng cáo</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          @include('block.message')
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">

                  <table id="datatable-keytable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên danh mục</th>
                        <th>Vị trí</th>
                        <th>Chiều cao</th>
                        <th>Chiều rộng</th>
                        <th>Trạng thái</th>
                        <th style="text-align: right">Action</th>
                      </tr>
                    </thead>
                    <?php $stt = 1 ?>
                      @foreach($adv as $adv)
                    <tbody>
                      <tr>
                        <td>{{ $stt++ }}</td>
                        <td><img src="{{ $adv->image }}" alt="" class="img_pro"/></td>
                        <td>{{ $adv->name }}</td>
                        <td>{!! \App\Helpers\Helpers::check_position_adv($adv->position) !!}</td>
                        <td>{{ $adv->weight }}</td>
                        <td>{{ $adv->height }}</td>
                        <td>{!! \App\Helpers\Helpers::check_status_active($adv->status) !!}</td>
                        <td  style="text-align:right">
                            <a href="/admin/adv/edit/{{ $adv->id }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Sửa</a>
                            <a href="/admin/adv/delete/{{ $adv->id   }}" class="btn btn-warning btn-xs" onclick="xacnhanxoa('Bạn có muốn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
@endsection