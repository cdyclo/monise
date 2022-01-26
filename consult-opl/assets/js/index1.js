var NewComponent = React.createClass({
	render: function() {
	  return (
		<div>
		  <title>Login RAN OPG Member</title>
		  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
		  <link rel="stylesheet" type="text/css" href="login.css" />
		  <div className="center">
			<form action="login.php" method="post">
			  <h2><img src="Indosat/Inspire.png" width={120} height={50} /></h2>
			  <div className="txt_field">
				<input type="text" name="uname" required />
				<span />
				<label>User Name</label>
			  </div>
			  <div className="txt_field">
				<input type="password" name="password" required />
				<span />
				<label>Password</label>
			  </div>
			  <input type="submit" name defaultValue="Login" /> 
			  <br /><br />
			</form>
		  </div>
		</div>
	  );
	}
  });