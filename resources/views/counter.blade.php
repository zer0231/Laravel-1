<html>
<body>
<form name="counter_form" method="post" action="/counter">
<h1>
<input type='hidden' name='CurrentValue' value="{{ $count }}">
{{ $count }}
</h1>
@csrf
<input type='submit' name='submitbutton' value='add'>
<input type='submit' name='submitbutton' value='sub'>
</form>
</body>
</html>