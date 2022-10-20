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
        margin-top: 250px;
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
    .text-center h1{
        margin-top: 100px;
    }
    h1{
        color: white;
    }
    h2{
        margin-top: 250px;
    }
</style>
<body>
    <h1 class="text-center shadow-sm p-3 mb-5 bg-black"> My Products </h1>

    <h2 class="text-center"> We regret to inform you that our products are currently out of stock for now. </h2>

    <div class="footer ">
        <ul>
            <li><a href="/">Product</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</body>
</html>