
@extends('admin.layout.index')

@section('content')





<div id="content">

 <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> </a> </div> 
  </div>



  
  <div class="container-fluid">

    <hr>
    <div class="row-fluid">
      <div class="span12">
         @if(session('thongbao'))
          <div class="alert">
            
            {{session('thongbao')}}
          </div>
          @endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Danh sách loại tin</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  
                  <th>ID loại tin</th>
                  <th>Tên loại tin</th>
                  <th>Tên nhóm tin</th>
                  <th>Trạng thái</th>
                  <th>Thao tác</th>
               

                  

                </tr>
              </thead>
              <tbody>

                
               
                 @foreach($loaitin as $lt )

                <tr class="gradeX">

                  <td>{{$lt['id']}}</td>
                  <td>{{$lt->tenloaitin}}</td>
                  <td>{{$lt->nhomtin->tennhomtin}}</td>
                  <td>
                    @if($lt->trangthai==1)
                      Hiện
                      @else
                      Ẩn
                   @endif                  
                    </td>
               
            <td class="center">
              <form  action="admin/loaitin/sua-{{$lt->id}}.html">
              <button type="submit" class="btn btn-mini">Sửa</button></form>

                <form  action="admin/loaitin/xoa-{{$lt->id}}.html">
              <button type="submit" class="btn btn-mini">Xóa</button></form>
              
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
    @endsection
    @section('script')
<script src="admin_asset/js/jquery.uniform.js"></script> 
<script src="admin_asset/js/select2.min.js"></script> 
<script src="admin_asset/js/jquery.dataTables.min.js"></script> 
<script src="admin_asset/js/matrix.tables.js"></script>
@endsection