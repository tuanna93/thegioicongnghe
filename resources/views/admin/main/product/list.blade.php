@extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách sản phẩm</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          @include('block.message')
          <div class="more">
            <a href="/admin/product/add.html" class="btn btn-success">Thêm mới</a>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">

                  <table id="datatable-keytable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th width="">STT</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Nhóm sản phẩm</th>
                        <th>Ngày đăng</th>
                        <th>Giá bán/niêm yết</th>
                        <th>Trạng thái SALE</th>
                        <th>Kích hoạt</th>
                        <th style="text-align: right">Chức năng</th>
                      </tr>
                    </thead>
                    <?php $stt = 1 ?>
                      @foreach($product as $pro)
                    <tbody>
                      <tr>
                        <td>{{ $stt++ }}</td>
                        <td  style="text-align: center"><img src="{{ isset($pro->image) ? $pro->image : '' }}" alt="{{ $pro->name }}" class="img_pro"/></td>
                        <td>{{ $pro->name }}</td>
                        <td>{{ \App\Helpers\Helpers::get_cate_product($pro->cate_id) }}</td>
                        <td>{{ \App\Helpers\Helpers::get_time($pro->created_at) }}</td>
                        <td>
                          <div class="vina_price">
                            <span class="jshop_price"> <span>{{ \App\Helpers\Helpers::get_price_product($pro->price_new) }}</span> </span>
                            @if($pro->price_old)
                            - <span class="old_price"><span>{{ \App\Helpers\Helpers::get_price_product($pro->price_old) }} </span></span>
                            @endif
                            Đ
                          </div>
                        </td>
                        <td>{!! \App\Helpers\Helpers::check_label_product($pro->status_sale) !!}</td>
                        <td>{!! \App\Helpers\Helpers::check_status_active($pro->status) !!}</td>
                        <td  style="text-align:right">
                            <a href="/admin/product/view/{{ $pro->slug }}.html" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem</a>
                            <a href="/admin/product/edit/{{ $pro->slug }}.html" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Sửa</a>
                            <a href="/admin/product/delete/{{ $pro->slug }}.html" class="btn btn-warning btn-xs" onclick="xacnhanxoa('Bạn có muốn xóa không ?')"><i class="fa fa-trash"></i> Xóa</a>
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