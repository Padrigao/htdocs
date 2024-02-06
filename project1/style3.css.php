*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open sans', sans-serif;
}

body{
    height: 100vh;
    background-color: #000;
    background-image: url(1.jpg);
    background-size: cover;
    background-position: center;
}

li{
    list-style: none;
}

a{
    text-decoration: none;
    color: #fff;
    font-size: 1rem;
    transition: color 0.5s;
    
}
a:hover {
    color: yellow;
    transition: width 0.5;
    
}

header{
    position: relative;
    padding: 0 2rem;
}

.nav-bar{
    width: 100%;
    height: 70px;
    max-width: 100%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    backdrop-filter: blur(4px);
    background: linear-gradient(45deg, #0F280A, #0C2008);
}

.nav-bar .logo a{
    font-size: 1rem;
    font-weight: bold;
}

img{
    margin-top: 15px;
    width:60px;
    height:55px;
}

.nav-bar .links{
    display: flex;
    margin-right: 20%;
    gap: 3rem;   
    transition-delay: 5s;
}

.nav-bar .toggle_btn{
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
    display: none;
}

.action_btn{
    --color: white;
    font-family: inherit;
    display: inline-block;
    width: 8em;
    height: 2.6em;
    line-height: 2.5em;
    margin: 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
    border: 0px solid var(--color);
    transition: color .7s;
    z-index: 1;
    font-size: 17px;
    border-radius: 50px;
    font-weight: 100;
    color: var(--color);
}

.action_btn:before {
    content: "";
    position: absolute;
    z-index: -1;
    background: var(--color);
    height: 170px;
    width: 200px;
    border-radius: 50%;
}

.action_btn:hover {
    color: black;
}
   
.action_btn:before {
    top: 100%;
    left: 100%;
    transition: all .7s;
    background-color: yellow;
}
   
.action_btn:hover:before {
    top: -30px;
    left: -30px;
}
   
.action_btn:active:before {
    background:black;
    transition: background 0.5s;
}

/* DROPDOWN MENU */

.dropdown_menu{
    display: none;
    position: absolute;
    right: 2rem;
    top: 50px;
    height: 0;
    width: 300px;
    background: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(15px);
    border-radius: 10px;
    overflow: hidden;
    transition: height cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.dropdown_menu.open{
    height: 240px;
}

.dropdown_menu li{
    padding: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.dropdown_menu .action_btn{
    width: 100%;
    display: flex;
    justify-content: center;
}

/* HERO */

section#hero{
    height: calc(100vh - 60px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
}

#hero h1{
    font-size: 3rem;
    margin-bottom: 1rem;
}

/* RESPONSIVE DESIGN */

@media (max-width: 992px){
    .nav-bar .links,
    .nav-bar .action_btn {
        display: none;
    }

    .nav-bar .toggle_btn{
        display: block;
    }

    .dropdown_menu{
        display: block;
    }
}

@media (max-width: 575px){
    .dropdown_menu{
        left: 2rem;
        width: unset;
    }
}