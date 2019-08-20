<!DOCTYPE html>
<html>
<head>
	<title>Login1</title>
</head>
<body>
		<form method="post">
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<fieldset>
				<legend>login</legend>
				<table>
					<tr>
						<td>Username :</td>
						<td><input type="text" name="username" value="{{$username}}" placeholder="type username here"></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="password" placeholder="type password here"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>

		<div>{{session('message')}}</div>
</body>
</html>