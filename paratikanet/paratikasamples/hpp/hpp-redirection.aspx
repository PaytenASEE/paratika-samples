<%@ Page Language="C#" %>
<html>
<!DOCTYPE >
<head>
   <meta charset="UTF-8">
   <title>HPP Redirection Form</title>
</head>
<script type="text/javascript" src="common.js"></script>
<body>
   <div class="container">
      <h2>HPP Redirection</h2>
      <p>Please follow these steps:</p>
      <span>1. Create a session token via this <a target="_blank" href="../sessiontoken.aspx">Session Token Page</a>. You should be able to see this kind of response: 
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


