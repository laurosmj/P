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
        margin-top: -15px;
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
    h1{
        color: white;
    }
    h2{
        margin-top: 100px;
    }
</style>
<body>
    <h1 class="text-center shadow-sm p-3 mb-5 bg-black">About Us</h1>

    <h2 class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia officiis, dicta est natus voluptatibus
        quibusdam! Maxime asperiores iste debitis adipisci. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt qui accusamus
        perferendis placeat nisi, a atque cum quibusdam, maxime minima autem? Deserunt, eveniet explicabo! Aperiam id, blanditiis similique
        maiores laudantium odio laborum totam est magnam eligendi voluptatum reprehenderit esse minima modi ipsa quaerat corrupti, ad debitis
        tempore sunt dignissimos!</h2>

    <div class="footer ">
        <ul>
            <<li><a href="{{url('/')}}">Product</a></li>
            <li><a href="{{url('/about')}}">About Us</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
    </div>
</body>
</html>