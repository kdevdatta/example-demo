<html>
<body>

@if(isset($id) and !empty($id))
    Hi this is user controller and calling {{ $id }} method
@else
    Hi this is user controller and calling M1 method
@endif

</body>
</html>
