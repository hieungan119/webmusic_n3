<form action="{{url('tinhtuoi')}}" method="post">

Nhập năm sinh:
<input type="text" name="namsinh"><br><br>

<input type="submit" value="Submit">

{{ csrf_field() }}

</form>