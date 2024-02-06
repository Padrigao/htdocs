<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
            font-size: 18px;
            background: 
        }
        body {
            margin: 4vh;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sidebar {
            width: 25%;
            border: 1px solid #eee;
            border-radius: 3px;
            padding: 15px;
            height: 92vh;
            box-shadow: 0px 0px 3px gray;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-image: url
        }
        .fa-circle {
            color: orangered;
        }
        .searchBar {
            width: 100%;
            background-color: #eee;
            border-radius: 3px;
            padding: 9px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        input {
            border: none;
            outline: none;
            background: none;
        }
        .glass:hover {
            color: orangered;
            cursor: pointer;
        }
        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .fa-brands {
            font-size: 25px;
            margin: 0 10px;
            color: #333;
            cursor: pointer;
        }
        .fa-brands:hover {
            color: orangered;
        }
        .data {
            width: 73%;
            border-radius: 3px;
            height: 92vh;
            overflow-y: auto;
        }
        .top {
            height: 60px;
            border-radius: 3px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
        }
        .header {
            height: 200px;
            border-radius: 3px;
            background-color: #333;
            margin: 3vh 0px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header p {
            font-size: 40px;
            font-weight: bold;
            color: white;
        }
        #root {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }
        .box {
            margin: 1px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 15px;
        }
        .img-box {
            width: 100%;
            height: 176px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .images {
            max-height: 90%;
            max-width: 90%;
            object-fit: cover;
            object-position: center;
        }
        .bottom {
            margin-top: 20px;
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 110px;
        }
        h2 {
            font-size: 20px;
            color: orangered;
        }
        button {
            width: 100%;
            position: relative;
            border: none;
            border-radius: 5px;
            background-color: #333;
            padding: 7px 25px;
            cursor: pointer;
            color: white;
        }
        button:hover {
            background-color: orangered;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        @-webkit-keyframes honeycomb {
  0%,
  20%,
  80%,
  100% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  30%,
  70% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes honeycomb {
  0%,
  20%,
  80%,
  100% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  30%,
  70% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.honeycomb {
  height: 24px;
  position: relative;
  width: 24px;
}

.honeycomb div {
  -webkit-animation: honeycomb 2.1s infinite backwards;
  animation: honeycomb 2.1s infinite backwards;
  background: #f3f3f3;
  height: 12px;
  margin-top: 6px;
  position: absolute;
  width: 24px;
}

.honeycomb div:after, .honeycomb div:before {
  content: '';
  border-left: 12px solid transparent;
  border-right: 12px solid transparent;
  position: absolute;
  left: 0;
  right: 0;
}

.honeycomb div:after {
  top: -6px;
  border-bottom: 6px solid #f3f3f3;
}

.honeycomb div:before {
  bottom: -6px;
  border-top: 6px solid #f3f3f3;
}

.honeycomb div:nth-child(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  left: -28px;
  top: 0;
}

.honeycomb div:nth-child(2) {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
  left: -14px;
  top: 22px;
}

.honeycomb div:nth-child(3) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
  left: 14px;
  top: 22px;
}

.honeycomb div:nth-child(4) {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
  left: 28px;
  top: 0;
}

.honeycomb div:nth-child(5) {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  left: 14px;
  top: -22px;
}

.honeycomb div:nth-child(6) {
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
  left: -14px;
  top: -22px;
}

.honeycomb div:nth-child(7) {
  -webkit-animation-delay: 0.6s;
  animation-delay: 0.6s;
  left: 0;
  top: 0;
}
.honeycomb{
    transform: translate(-500px);
}
.cta {
  border: none;
  background: none;
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 4px;
  font-size: 14px;
  padding-right: 15px;
  text-transform: uppercase;
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: black;
  padding-bottom: 20px;
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #000000;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
        
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidehead">
                <div class="dots">
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle" style="color: #333;"></i>
                    <i class="fa-solid fa-circle"></i>
                    
                </div>
                <hr style="margin: 15px 0; border: 1px solid #eee">
            </div>
            <div class="sidebody" style="height: 69vh;">
                <div class="searchBar">
                    <input placeholder="Search..." id="searchBar" name="searchBar" type="text">
                    <i class="fa-solid fa-magnifying-glass glass" id="btn"></i>
                </div>
            </div>
            <div class="sidefoot">
                <hr style="margin: 15px 0; border: 1px solid #eee">
                <div class="social-icons">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-square-github"></i>
                </div>
            </div>

        </div>
        <div class="data">
            <div class="top">
            <button class="cta">
    <span class="hover-underline-animation"> Shop now </span>
    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
    </svg>
</button>
            </div>
            <div class="header">
                <p>BUY SLAVE ONLINE</p>
                <div class="honeycomb">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
            </div>
            <div class="body">
                <div id="root"></div>
            </div>
        </div>
    </div>

    <script>
        const product = [
            {
                id: 0,
                image: 'a.png',
                title: 'jan9',
                price: 120,
            },
            {
                id: 1,
                image: 'j.png',
                title: 'ebyot',
                price: 60,
            },
            {
                id: 2,
                image: 'd.png',
                title: 'junplox',
                price: 230,
            },
            {
                id: 3,
                image: 'k.png',
                title: 'kylie',
                price: 100,
            },
            {
                id: 4,
                image: 'm.png',
                title: 'jopay',
                price: 230,
            },
            {
                id: 5,
                image: 'r.png',
                title: 'ricky girl',
                price: 100,
            },
            {
                id: 6,
                image: 'e.png',
                title: 'dextar',
                price: 100,
            },
            {
                id: 7,
                image: 'c.png',
                title: 'CEO sa GCC',
                price: 100,
            },
            {
                id: 8,
                image: 'keeyboard.jpg',
                title: 'fake keyboard',
                price: 100,
            },
        ];

        const categories = [...new Set(product.map((item) => { return item }))]

        document.getElementById('searchBar').addEventListener('keyup', (e) => {
            const searchData = e.target.value.toLowerCase();
            const filteredData = categories.filter((item) => {
                return (
                    item.title.toLowerCase().includes(searchData)
                )
            })
            displayItem(filteredData)
        });

        const displayItem = (items) => {
            document.getElementById('root').innerHTML = items.map((item) => {
                var { image, title, price } = item;
                return (
                    `<div class='box'>
                        <div class='img-box'>
                            <img class='images' src=${image}></img>
                        </div> 
                        <div class='bottom'>
                            <p>${title}</p>
                            <h2>$ ${price}.00</h2>
                        <button>Add to cart</button>
                        </div>
                    </div>`
                )
            }).join('')
        };
        displayItem(categories);

    </script>
</body>

</html>