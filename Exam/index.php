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
        }
        body {
            margin: 4vh;
            background-color:light grey;
            background-image: url('b.jpg');
            background-size: cover;
            background-position: center;
          

            
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
            height: 50vh;
            box-shadow: 0px 0px 3px gray;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-image: url('store.webp');
            background-size: cover;
            background-position: center;

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
            margin-top: 5%;
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
        .header {
            height: 100px;
            border-radius: 3px;
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
            background-color: black;
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


.cta {
  border: none;
  background: none;
  background-color: light grey;
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
  background-color: black;
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
            <img src="vio.gif" alt="Shop" style="width:150px;height:150px;">
        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
    </svg>
</button>
            </div>
            <div class="header">
                <p style="font-family:serif; color: black;">Hizola Clothing Shop</p>
                <img src="add.png" alt="Shop" style="width:150px;height:139px;">
                <div class="">
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
                image: 'pink.jpg',
                title: 'Dress',
                price: 100,
            },
            {
                id: 1,
                image: 'selling-clothes.png',
                title: 'Package',
                price: 900,
            },
            {
                id: 2,
                image: 'pajama.webp',
                title: 'Pajama',
                price: 230,
            },
            {
                id: 3,
                image: 'skirts.webp',
                title: 'Skirt Black',
                price: 200,
            },
            {
                id: 4,
                image: 'hoodie.jpg',
                title: 'Hoodie',
                price: 180,
            },
            {
                id: 5,
                image: 'goods.avif',
                title: 'Jacket',
                price: 150,
            },
            {
                id: 6,
                image: 'denim.webp',
                title: 'Denim Dress',
                price: 100,
            },
            {
                id: 7,
                image: 'Dress.jpg',
                title: 'Floral Dress',
                price: 120,
            },
            {
                id: 8,
                image: 'long.jpg',
                title: 'Galaxy Long Skirts',
                price: 130,
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
                        <button>Rating
                        <div class="rating">
  <input id="rating1" type="radio" name="rating" value="1">
  <label for="rating1">1</label>
  <input id="rating2" type="radio" name="rating" value="2">
  <label for="rating2">2</label>
  <input id="rating3" type="radio" name="rating" value="3">
  <label for="rating3">3</label>
  <input id="rating4" type="radio" name="rating" value="4">
  <label for="rating4">4</label>
  <input id="rating5" type="radio" name="rating" value="5">
  <label for="rating5">5</label>
</div>
</button>
                        
                        </div>
                    </div>`
                )
            }).join('')
        };
        displayItem(categories);

    </script>
</body>

</html>