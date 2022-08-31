<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<% String username =  request.getParameter("username");
   String password = request.getParameter("password");
   if("admin".equals(username)){
	   
	   String address = "123 tuyet tinh coc";
	   
	   request.setAttribute("address",address);
	   
	   RequestDispatcher rd = request.getRequestDispatcher("welcome.jsp");
	   rd.forward(request, response);
   } else {
	   RequestDispatcher rd = request.getRequestDispatcher("login.jsp");
	   rd.forward(request, response);
   }
%>
</body>
</html>