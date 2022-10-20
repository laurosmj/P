<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style src="{{asset('js/bootstrap.js')}}"></style>
</head>
<style>
    .footer {
        text-align: center;
        font-size: 30px;
        margin-top: 25px;
    }
    li{
        transition: 0.1s;
        background-color: black;
        border-radius: 10px;
        padding: 20px;
        margin: 50px;
        cursor: pointer;
        width: 200px;
        
    }
    ul{
        list-style-type: none;
    }
    ul li a{
        color: white;
        text-decoration: none;
        padding-top: 22px;
        padding-bottom: 25px;
        
        position: static;
    }
    ul li a:hover{
        color: red;
        text-decoration: none;
    }
    ul li{
        
        display: inline-block;
    }
  
    ul li:hover{
     
        background-color: #808080;
    }
    h3{
        color: white;
    }
    h4{
        margin-top: 100px;
    }
</style>
<body>
    <h3 class="text-center shadow-sm p-3 mb-5 bg-black">Get in touch with us.</h3>
    
    <div class="text-center">
        <h4>Phone Number: +14155552671</h4>
        <h4>Email: Bproducts@gmail.com</h4>
        <h4>Address: 115 New Cavendish Street, London W1T 5Du, United Kingdom</h4>
    </div>
    <div class="footer ">
        <ul>
            <li><a href="{{url('/')}}">Product</a></li>
            <li><a href="{{url('/about')}}">About Us</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
    </div>
    
</body>
</html>