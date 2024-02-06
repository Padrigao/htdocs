<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
    <style>
body {
    font-family: 'Lato', sans-serif;
}
#hero {
  background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.1)),
    url('https://www.shutterstock.com/image-photo/background-cooking-tagliatelle-pasta-ingredients-260nw-1724611486.jpg');
   height: 1000px;
   background-size: cover;
   color: #fff;
}

#hero h1 {
  margin: 0;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav ul {
  display: flex;
  list-style-type: none;
}

nav ul li {
  margin: 0 1rem;
  font-weight: 1000;
}

.content {
  text-align: center;
  font-size: 4rem;
  margin-top: 100px;
  font-weight: 1000;
  text-transform: uppercase;
}

.content button {
  font-size: 2rem;
  color: #fff;
  background-color: #2f70d8;
  border: none;
  padding: .5rem 2rem;
  cursor: pointer;
  transition: all .3s ease;
}

.content button:hover {
  background-color: #08347a;
}

.container {
  max-width: 600px;
  margin: 0 auto;
}
    </style>
</head>
<body>
  <section id="hero">
    <div class="container">
      <nav>
        <h1>COOKING</h1>
        <ul>
          <li>Home</li>
          <li>About</li>
          <li>Contact</li>
          <li>Login</li>
        </ul>
      </nav>
      <div class="content">
        <p>Welcome to cooking!</p>
        <button>Start your cooking lesson</button>
      </div>
    </div>
  </section>
  

</body>
</html>







