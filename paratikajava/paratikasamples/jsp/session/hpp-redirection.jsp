<!DOCTYPE >
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
	
<script type="text/javascript">
	function redirectToHPP(){
		var hppUrl = document.getElementById('hpp-url').value;
		window.location.replace(hppUrl);
	}
</script>
<head>
   <meta charset="UTF-8">
   <title>HPP Redirection Form</title>
</head>
<body>
    <div class="container">
      <h2>HPP Redirection</h2>
      <p>Please follow these steps:</p>
      <span>1. Create a session token via this <a href="http://localhost:8090/paratikasamples/jsp/session/sessiontoken.jsp">Session Token Page</a>. You should be able to see this kind of response: 
      <pre>
      <code>
      	{ 
      		"sessionToken" : "GAC3X446EDNICOWZANWJXJDBKZ2RYUFFONUT7ZBG2T3IWVUY",
      		"responseCode" : "00",
      		"responseMsg" : "Approved"
      	}
	  </code>
	  </pre>
      </span>
      <p>2. Take the <strong>"sessionToken"</strong> value and replace it below</p>
       <input id="hpp-url" style="width:582px;" type="text" value="https://test.paratika.com.tr/payment/SESSIONTOKEN">
	  <input type="button" onclick="redirectToHPP()" value="Submit">
   </div>
</body>
</html>