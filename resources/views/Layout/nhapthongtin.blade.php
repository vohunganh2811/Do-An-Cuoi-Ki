@extends('homelayout')
@section('NoiDung')
<form class="form-inline" action="{{route('donhangcuatoi')}}" method="get">
							
								<input class="typeahead form-control mr-sm-2" type="search" placeholder="" aria-label="Search" required="" name="sdt">
								<button class="btn my-2 my-sm-0" type="submit">Xem đơn hàng</button>
								{{ csrf_field() }}
							
							</form>
@endsection