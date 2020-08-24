<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="java.util.Enumeration"%>
<html>
<head>
<title>Merchant Result Page</title>
</head>
<body>
	<%
		request.setCharacterEncoding("UTF-8");
		Enumeration<String> params = request.getParameterNames();
		if (params == null) {
			out.println("Parameters are empty");
			return;
		}
		while (params.hasMoreElements()) {
			String param = params.nextElement();
			String paramValue = request.getParameter(param);
			out.println(param + ": " + paramValue + "</br>");
		}
	%>
</body>
</html>
