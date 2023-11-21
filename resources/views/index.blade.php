@extends('layouts.main')

@section('container')

    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<a href="#home"><title>TraFeler</title></a>

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<style>
    body {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
    }
    :root{
        --bg-color: #fff;
        --text-color: #221314;
        --second-color: #5a7184;
        --main-color: #6e54fa;
        --big-font: 6rem;   
        --h2-font: 3rem;
        --p-font: 1.1rem;
    }
    body{
        background: var(--bg-color);
        color: var(--text-color);
    }
    
    header{
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        height: 5%;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #D0AEA1;
        padding: 30px 18%;
        transition: ease .40s;
    }
    .logo{
        font-size: 35px;
        font-weight: 600;
        letter-spacing: 1px;
        color: var(--bg-color);
    }
    .navbar{
        display: flex;
    }
    .navbar a{
        color: var(--bg-color);
        font-size: var(--p-font);
        font-weight: 500;
        padding: 10px 22px;
        border-radius: 4px;
        transition: ease .40s;
    }
    .navbar a:hover{
        background: var(--bg-color);
        color: var(--text-color);
        box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
        border-radius: 4px;
    }
    #menu-icon{
        color: var(--bg-color);
        font-size: 35px;
        z-index: 10001;
        cursor: pointer;
        display: none;
    }
    
    section{
        padding: 80px 18%;
    }
    .home{
        position: relative;
        width: 100%;
        height: 100vh;
        background:url(images/background.jpg);
        background-size: cover;
        background-position: center;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }
    .home-text h1{
        font-size: var(--big-font);
        line-height: 1.2;
        color: var(--bg-color);
        font-family: 'Paytone One', sans-serif;
        letter-spacing: 4px;
        margin-bottom: 20px;
    }
    .home-text p{
        color: #ffffffbf;
        font-size: 20px;
        font-weight: 400;
        line-height: 38px;
        margin-bottom: 50px;
    }
    .home-btn{
        display: inline-block;
        font-size: 16px;
        padding: 15px 30px;
        background: #ffffffbf;
        color: var(--main-color);
        border-radius: 4px;
        transition: ease .40s;
    }
    .home-btn:hover{
        background: var(--bg-color);
        transform: scale(1.1);
    }
    header.sticky{
        background: var(--bg-color);
        padding: 10px 18%;
        box-shadow: rgba(10, 108, 255, 0.1) 0px 10px 10px -10px;
    }
    .sticky .logo{
        color: var(--text-color);
    }
    .sticky .navbar a{
        color: rgb(0, 0, 0)
    } 
    
    .text h2{
        font-size: var(--h2-font);
        line-height: 1.1;
    }
    .row-items{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, auto));
        grid-gap: 2rem;
        align-items: center;
        text-align: center;
        margin-top: 5rem;
    }
    .container-box{
        background: var(--bg-color);
        border: 1px solid #f0eded;
        padding: 50px 10px;
        border-radius: 4px;
        transition: all 1s ease 0s;
        cursor: pointer;
    }
    .container-img img{
        height: 85px;
        width: 85px;
        padding: 15px;
        background: var(--bg-color);
        box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
        border-radius: 4px;
        margin-bottom: 15px;
        cursor: pointer;
    }
    .container-box h4{
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 8px;
    }
    .container-box p{
        font-size: 15px;
        color: var(--second-color);
    }
    .container-box:hover{
        box-shadow: 5px 30px 56.1276px rgb(55 55 55 / 12%);
        border: 1px solid transparent;
        transform: translateY(-3px);
    }
    
    .title{
        text-align: center;
    }
    .title h2{
        font-size: var(--h2-font);
        line-height: 1.2;
    }
    .package-content{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        grid-gap: 2rem;
        align-items: center;
        margin-top: 5rem;
    }
    .thum{
        position: relative;
        transition: all .3s cubic-bezier(.445,.05,.55,.95);
        will-change: filter;
        cursor: pointer;
    }
    .thum img{
        width: 100%;
        height: auto;
    }
    .thum h3{
        position: absolute;
        font-size: 30px;
        font-weight: 600;
        text-align: right;
        color: var(--bg-color);
        top: 36px;
        right: 40px;
    }
    .dest-content{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding-top: 24px;
    }
    .stars i{
        color: #D0AEA1;
        font-size: 20px;
    }
    .location h4{
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 8px;
    }
    .location p{
        font-size: 15px;
        color: var(--second-color);
    }
    .thum:hover{
        filter: brightness(100%) hue-rotate(45deg);
        transform: scale(1.04);
    }
    
    .destination-content{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, auto));
        grid-gap: 2rem;
        align-items: center;
        margin-top: 5rem;
    }
    .col-content{
        position: relative;
    }
    .col-content img{
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 15px;
        filter: brightness(80%);
        transition: all .3s cubic-bezier(.495,.05,.55,.95);
        will-change: filter;
    }
    .col-content h5{
        position: absolute;
        font-size: 22px;
        font-weight: 500;
        color: var(--bg-color);
        left: 15px;
        bottom: 60px;
    }
    .col-content p{
        position: absolute;
        font-size: 15px;
        color: var(--bg-color);
        left: 15px;
        bottom: 30px;
        letter-spacing: 2px;
    }
    .col-content img:hover{
        filter: brightness(100%) hue-rotate(45deg);
        transform: scale(1.04);
        cursor: pointer;
    }
    
    .newsletter{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        grid-gap: 3rem;
    }
    .news-text h2{
        font-size: var(--h2-font);
        margin-bottom: 5px;
    }
    .news-text p{
        font-size: var(--p-font);
        color: var(--second-color);
        line-height: 30px;
    }
    .newsletter form{
        max-width: 100%;
        width: 450px;
        position: relative;
    }
    .newsletter form input:first-child{
        display: inline-block;
        width: 100%;
        padding: 20px 150px 20px 30px;
        box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
        outline: none;
        border: none;
        border-radius: 15px;
    }
    .newsletter form input:last-child{
        display: inline-block;
        position: absolute;
        outline: none;
        border: none;
        padding: 14px 30px;
        border-radius: 15px;
        background: #D0AEA1;
        color: var(--bg-color);
        top: 6px;
        right: 6px;
        cursor: pointer;
    }
    
    #contact{
        background: #D0AEA1;
    }
    .main{
        display: flex;
        flex-wrap: wrap;
    }
    .footer{
        padding: 20px 0;
    }
    .list{
        width: 25%;
    }
    .list h4{
        font-size: 21px;
        color: var(--bg-color);
        margin-bottom: 30px;
        position: relative;
    }
    .list h4::before{
        content: "";
        position: absolute;
        height: 2px;
        width: 60px;
        left: 0;
        bottom: -10px;
        background: var(--bg-color);
    }
    .list ul li:not(last-child) {
        margin-bottom: 16px;
    }
    .list ul li a{
        color: #ffffffbf;
        font-size: var(--p-font);
        display: block;
        transition: .3s;
    }
    .list ul li a:hover{
        color: var(--bg-color);
        transform: translateX(14px);
    }
    .list .social a{
        height: 40px;
        width: 40px;
        background: var(--bg-color);
        color: var(--main-color);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        border-radius: 15px;
        transition: .3s;
        margin-right: 10px;
    }
    .list .social a:hover{
        transform: scale(1.1);
    }
    .end-text{
        text-align: center;
        padding-top: 90px;
    }
    .end-text p{
        color: var(--bg-color);
        font-size: 14px;
        letter-spacing: 2px;
    }
    
    
    
    
    .sea{
        position: relative;
        width: 100%;
        height: 100vh;
        background:url(img/ocean.jpg);
        background-size: cover;
        background-position: center;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }
    .Mount{
        position: relative;
        width: 100%;
        height: 100vh;
        background:url(img/guunung.jpg);
        background-size: cover;
        background-position: center;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }
    
    .borobudur{
        position: relative;
        width: 100%;
        height: 100vh;
        background:url(img/mario-la-pergola-KTHA8H_qpOw-unsplash.jpg);
        background-size: cover;
        background-position: center;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }
    .Borobudur-text h1{
        font-size: var(--big-font);
        line-height: 1.2;
        color: #fff;
        font-family: 'Paytone One', sans-serif;
        letter-spacing: 4px;
        margin-bottom: 20px;
    }
    .Borobudur-text p{
        color: #ffffffbf;
        font-size: 20px;
        font-weight: 400;
        line-height: 38px;
        margin-bottom: 50px;
    }
    .ubud{
        position: relative;
        width: 100%;
        height: 100vh;
        background:url(img/1116422.jpg);
        background-size: cover;
        background-position: center;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }
    .monas{
        position: relative;
        width: 100%;
        height: 100vh;
        background:url(img/ga.jpg);
        background-size: cover;
        background-position: center;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }
    .gallery
    {
        background-color:radial-gradient(top to, #fff ,#C69749);
    }
    .gallery .box-container {
        -webkit-columns: 3 25rem;
                columns: 3 25rem;
        -webkit-column-gap: 1.5rem;
                column-gap: 1.5rem;
      }
      
      .gallery .box-container .box {
        margin-bottom: 1rem;
        -webkit-column-break-inside: avoid;
                break-inside: avoid;
      }
      
      .gallery .box-container .box img {
        width: 100%;
        border-radius: 1rem;
        margin-bottom: 1rem;
        cursor: pointer;
      }
      
      .gallery .box-container .box span {
        font-size: 1.4rem;
        color: #aaa;
      }
      
      .gallery .box-container .box h3 {
        margin-top: .5rem;
        font-size: 2rem;
        color: #fff;
      }
    
    
    @media (max-width: 1400px){
        header{
            padding: 17px 3%;
            transition: .2s;
        }
        header.sticky{
            padding: 10px 3%;
            transition: .2s;
        }
        section{
            padding: 80px 3%;
            transition: .2s;
        }
        :root{
            --big-font: 4.5rem;
          --h2-font: 2.3rem;
          --p-font: 1rem;
          transition: .2s;
        }
    }
    
    @media (max-width: 1040px){
        #menu-icon{
            display: block;
        }
        .stick #menu-icon{
            color: var(--text-color);
        }
        .home{
            height: 88vh;
        }
        .navbar{
            position: absolute;
            top: 0;
            right: -100%;
            width: 270px;
            height: 120vh;
            background: #1067cc;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 150px 30px;
            transition: 0.5s all;
        }
        .navbar a{
            display: block;
            margin: 1.2rem 0;
        }
        .sticky .navbar a{
            color: var(--bg-color);
        }
        .navbar a:hover{
            color: var(--text-color);
        }
        .open{
            right: 0;
        }
        .list{
            width: 50%;
            margin-bottom: 12px;
        }
    }
    
    @media (max-width: 575px){
        .list{
            width: 100%;
        }
        .newsletter form{
            width: 350px;
        }
        :root{
            --big-font: 3.8rem;
          --h2-font: 1.8rem;
          transition: .2s;
        }
        .text{
            text-align: center;
        }
        .home{
            height: 85vh;
            transition: .2s;
        }
    }

</style>
<body>
	

	<!--Home section--->

	<section class="home" id="home">
		<div class="home-text">
		
        
			<h1>Let's<br> Dolan - Dolan</h1>
			<p>Be amazed at the enormity of this universe,<br> and be amazed at the power of the Substance that has created it</p>
		
		</div>
	</section>

	<!--container--->
	<section class="container">
		<div class="text">
			<h2>Start Your Vacation <br> with Lots of Services!</h2>
		</div>

		<div class="row-items">
			<div class="container-box">
				<div class="container-img">
					<a href="sea_tours.html"><img src="images/trip1.png"/></a>	
				</div>
				<h4>Sea Tours</h4>
				<p>see more</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<a href="mountain.html"><img src="images/trip4.png"></a>
					
				</div>
				<h4>Mountains Tours</h4>
				<p>see more></p>
			</div>

		</div>
	</section>

	<!--Package section--->
	
	<!--destination section--->
	<section class="destination" id="destination">
		<div class="title">
			<h2>Our Most Popular <br> Destination!</h2>
		</div>

		<div class="destination-content">
			<div class="col-content">
				<a href="borobudur.html"><img src="images/img-1.jpg"></a>
				<h5>Borobudur Tample</h5>
				<p>Magelang, Jawa Tengah</p>
			</div>

			<div class="col-content">
				
				<a href="danau ubud.html"><img src="images/img-2.jpg"></a>
				<h5> Danau beratan</h5>
				<p>Bali</p>
			</div>

			<div class="col-content">
				<a href="monas.html"><img src="images/ga.jpg"></a>
				<h5>Green Canyon</h5>
				<p>Pangandaran</p>
			</div>

			<div class="col-content">
				<a href="https://www.jtp.id/"><img src="images/img-4.jpg"></a>
				<h5>JATIM PARK</h5>
				<p>Batu, Jawa Timur</p>
			</div>

			<div class="col-content">
				<a href="https://www.ancol.com/unit-rekreasi/dunia-fantasi--2"><img src="images/1502442548.jpeg"></a>
				<h5>ANCOL-Dufan</h5>
				<p>Jakarta</p>
			</div>

			<div class="col-content">
				<a href="karimun.html"><img src="images/img-6.jpg"></a>
				<h5>KARIMUN JAWA</h5>
				<p>Jawa Tengah</p>
			</div>

		</div>
	</section>

	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Enjoy in Wonderfull Nusantara</h2>

		</div>

		
	</section>
			
		<div class="end-text">
			<p>Copyright ©2022  Mentari Febian</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
@endsection