<!DOCTYPE html>
@extends('pharmacylayout')
<html>
<head>
	<title>Pharmacy Change Password</title>
</head>
<body>
	@section('changepassword')
	<form method="post" style="background: none;">
		{{csrf_field()}}
		<div id="admininputdiv" style="margin: 0px 80px">
			<table align="center">
				<input type="hidden" name="pharmacyid" value="{{$pharmacy->Id}}">
				<tr>
					<td colspan="2" align="center"><font color="blue">Change Your Password</font></td>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><font color="red">{{session('msgpharpass')}}</font></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><font color="red">
						@if ($errors->has('pharmacyOldPassword'))
							{{ $errors->first('pharmacyOldPassword') }}
						@endif
						<font>
					</td>
				</tr>
				<tr>
					<td>Current Password</td>
					<td><input id="admininput" type="password" name="pharmacyOldPassword" maxlength="20"></td>
				</tr>	
				<tr>
					<td colspan="2" align="center"><font color="red">
						@if ($errors->has('pharmacyNewPassword'))
							{{ $errors->first('pharmacyNewPassword') }}
						@endif
						<font>
					</td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input id="admininput" type="password" name="pharmacyNewPassword" minlength="6" maxlength="20"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><font color="red">
						@if ($errors->has('pharmacyConPassword'))
							{{ $errors->first('pharmacyConPassword') }}
						@endif
						<font>
					</td>
				</tr>
				<tr>
					<td>Retype New Password</td>
					<td><input id="admininput" type="password" name="pharmacyConPassword" maxlength="20"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input id="admininput" type="submit" name="changepassword" value="Save"></td>
				</tr>
			</table>
		</div>
	</form>
	@endsection
</body>
</html>