<style type="text/css">
	html{
			scroll-behavior: smooth;
	}
*{
	margin: 0;
	padding:0;
	box-sizing: border-box;
	font-family: 'Muli', sans-serif;


}	

.nav_style{

	background-color:rgb(185,185,185)!important;
}
.nav_style a{
	color:white;
}
.main_header
{
	height:450px;
	width:100%;
}

.rightside h1{
	font-size: 3rem;
}
.corona_animation img{
	animation: c2 4s linear infinite;
}
@keyframes c2{

	0%{ transform:rotate(0);}
	100%{transform:rotate(360deg);}
	
}

.leftside img{
	animation: c1 5s linear infinite;
}

@keyframes c1{
0%{ transform:scale(.75);}


20%{ transform:scale(1);}


40%{ transform:scale(.75);}


60%{ transform:scale(1);}


80%{ transform:scale(.75);}


100%{ transform:scale(.75);}


}


.corona_update{
margin:0 0 30px 0;
}

.corona_update h3{
	color:purple;
}

.corona_update h1{
	font-size: 2rem;
	text-align: center;
}
.sub_section{
background-color:lightgrey;
}

.footer_style{
	background-color: lightblue!important;
}
.footer_style p{
	margin-bottom: 0!important;
}


 #mybtn{
	display:none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	float: right;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10x;
	scroll-behavior: smooth;
}
#mybtn:hover{
	background:purple
		;
}


video{
	top: 0;
	width: 100%
	height:auto;
	
}

</style>