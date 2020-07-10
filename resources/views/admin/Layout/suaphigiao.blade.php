@extends('admin.homeadmin')
@section('noidungchinh')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Khu vực giao hàng</h6>
        <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                        @foreach($citysua as $s)
                        <form action="{{route('setphigiao', $s->id)}}"  method="post">
                       
                    
                                <fieldset class="form-group">
                                    <label>Thành Phố</label>
                                    <input class="form-control" value="{{$s->name}}" name="name">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Phí Giao Đến</label>
                                    <input class="form-control" value="{{$s->shipcost}}" name="shipcost">
                                </fieldset>
                                
                               
                                <div class="modal-footer">
                                <input type="submit" value="Lưu" />
                              <a href="{{route('phigiao')}}"><button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy Bỏ</button><a>
                            </div>
                            {{ csrf_field() }} 
                            <!-- {{ csrf_field() }}  -->
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection

