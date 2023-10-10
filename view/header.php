<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
</head>
<body class="bg-gradient-to-r from-sky-500 to-indigo-500 to-red-500 to-blue-300">
    <div class="controvary mx-auto max-w-7xl">
        <header class="max-w-7xl  bg-amber-300 mt-2 rounded-[10px]">
            <h1 class="font-mono font-medium text-[30px] p-2 " ><a href="index.php">Xshop - Siêu thị trực tuyến </a></h1>
        </header>
        <div class="menu mt-2 bg-slate-800 justify-between flex ">
                <ul class="flex p-4">
                    <li><a class="ml-4 p-1 text-white hover:bg-blue-300 hover:rounded hover:text-black" href="index.php">Trang chủ</a></li>
                    <li><a class="ml-4 p-1 text-white hover:bg-blue-300 hover:rounded hover:text-black" href="index.php?act=gt">Giới thiệu</a></li>
                    <li><a class="ml-4 p-1 text-white hover:bg-blue-300 hover:rounded hover:text-black" href="index.php?act=gy">Góp ý </a></li>
                    <li><a class="ml-4 p-1 text-white hover:bg-blue-300 hover:rounded hover:text-black" href="index.php?act=hd">Hỏi đáp</a></li>
                    <li><a class="ml-4 p-1 text-white hover:bg-blue-300 hover:rounded hover:text-black" href="index.php?act=sp">Sản Phẩm</a></li>
                </ul>
                <div class="giohang flex m-4 hover:bg-blue-300 hover:rounded" >
                    <span><a class="pl-4 text-white pr-3" href="index.php?act=gh">Giỏ hàng</a></span> 
                    <svg class="mt-1 text-white mr-1" xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                        <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                      </svg>
                </div>
        </div>
        <div class="flex">