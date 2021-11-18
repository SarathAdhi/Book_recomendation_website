<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>About me</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Exo+2:400,500,700,900'>
  
<style type="text/css">

  html, body {
  width: 100%;
  height: 100%;
}

html {
  display: table;
}

body {
  background: #121212;
  background-size: cover;
  display: table-cell;
  vertical-align: middle;
  font-family: "Exo 2", sans-serif;
  background-color: #312e4a;
  color: #d8d8d8;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: 0.85;
}

h1, h3, p {
  margin: 0;
  text-transform: uppercase;
}

h1 {
  font-weight: 400;
  color: #fff;
  margin-bottom: 60px;
}

h3 {
  font-size: 1.5rem;
  margin-bottom: 5px;
  color: #fff;
}

p {
  font-size: 0.8rem;
  font-weight: 400;
  letter-spacing: 2px;
}

.wrapper {
  position: relative;
  max-width: 1170px;
  margin: 0 auto;
  padding: 80px 20px;
}

.roll-up {
  overflow: hidden;
  position: relative;
}
.roll-up > span {
  display: inline-block;
  position: relative;
}
.roll-up > span:nth-child(1) {
  transition-delay: 0.03s;
}
.roll-up > span:nth-child(2) {
  transition-delay: 0.06s;
}
.roll-up > span:nth-child(3) {
  transition-delay: 0.09s;
}
.roll-up > span:nth-child(4) {
  transition-delay: 0.12s;
}
.roll-up > span:nth-child(5) {
  transition-delay: 0.15s;
}
.roll-up > span:nth-child(6) {
  transition-delay: 0.18s;
}
.roll-up > span:nth-child(7) {
  transition-delay: 0.21s;
}
.roll-up > span > span {
  display: inline-block;
  transition: 0.6s cubic-bezier(0.7, 0.01, 0.37, 1);
  transition-delay: inherit;
}
.roll-up > span > span:nth-child(1) {
  position: relative;
}
.roll-up > span > span:nth-child(2) {
  position: absolute;
  transform: translateY(100%);
  left: 0;
  color: #16e590;
}

.text-reveal {
  position: relative;
  overflow: hidden;
}
.text-reveal span {
  display: block;
  transition: cubic-bezier(0.7, 0.01, 0.37, 1) 0.6s;
}
.text-reveal > span:nth-child(2) {
  position: absolute;
  top: 0;
  left: 0;
  color: #fff;
}
.text-reveal > span:nth-child(2) > span {
  overflow: hidden;
  transform: translateX(-100%);
}
.text-reveal > span:nth-child(2) > span:nth-child(1) {
  transition-delay: 0.1s;
}
.text-reveal > span:nth-child(2) > span:nth-child(2) {
  transition-delay: 0.2s;
}
.text-reveal > span:nth-child(2) > span:nth-child(3) {
  transition-delay: 0.3s;
}
.text-reveal > span:nth-child(2) > span:nth-child(4) {
  transition-delay: 0.4s;
}
.text-reveal > span:nth-child(2) > span:nth-child(5) {
  transition-delay: 0.5s;
}
.text-reveal > span:nth-child(2) > span:nth-child(6) {
  transition-delay: 0.6s;
}
.text-reveal > span:nth-child(2) > span:nth-child(7) {
  transition-delay: 0.7s;
}
.text-reveal > span:nth-child(2) > span > span {
  transform: translateX(100%);
  transition-delay: inherit;
}

.card {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: relative;
  max-width: 370px;
  width: 240px;
  height: 450px;
  padding: 20px;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
  background-size: cover;
  cursor: pointer;
  margin: 0 100px 60px 0;
}
.card:before {
  content: "";
  display: block;
  height: 100%;
  width: 100%;
  position: absolute;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.75) 100%);
}
.card .card__content {
  z-index: 1;
}
.card .card__content .card__content--description {
  position: absolute;
  bottom: 20px;
  right: 0;
  margin-right: -80px;
  text-align: left;
  max-width: 175px;
}
.card:hover .roll-up > span > span:nth-child(1) {
  transform: translateY(-100%);
}
.card:hover .roll-up > span > span:nth-child(2) {
  transform: translateY(0);
}
.card:hover .text-reveal > span:nth-child(2) > span,
.card:hover .text-reveal > span:nth-child(2) > span > span {
  transform: translateX(0);
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <button onclick="goBack()"><span class="glyphicon glyphicon-chevron-left"></span>Go Back</button>
  <script>
  function goBack() {
    window.history.back();
  }
  </script>

  <h1>About Us..</h1>
  
  <div class="card" style="background-image: url(about_us/sara1.jpg)">
    <div class="card__content" >
      <div class="card__content--description">
        <h3 class="roll-up">
          <span><span>S</span><span>S</span></span>
          <span><span>a</span><span>a</span></span>
          <span><span>r</span><span>r</span></span>
          <span><span>a</span><span>a</span></span>
          <span><span>t</span><span>t</span></span>
          <span><span>h</span><span>h</span></span>
        </h3>
        <p class="text-reveal">
          <span>
            <span>UI/UX Designer</span>
            <span>Back-end Developer</span>
            <span>HTML, CSS, Java, PHP</span>
          </span>
          <span>
            <span><span>UI/UX Designer</span></span>
            <span><span>Back-end Developer</span></span>
            <span><span>HTML, CSS, Java, PHP</span></span>
          </span>
        </p>
      </div>
    </div>
  </div>
  <div class="card" style="background-image: url(about_us/vig.jpeg);">
    <div class="card__content">
      <div class="card__content--description">
        <h3 class="roll-up">
          <span><span>V</span><span>V</span></span>
          <span><span>i</span><span>i</span></span>
          <span><span>g</span><span>g</span></span>
          <span><span>n</span><span>n</span></span>
          <span><span>e</span><span>e</span></span>
          <span><span>s</span><span>s</span></span>
          <span><span>h</span><span>h</span></span>
        </h3>
        <p class="text-reveal">
          <span>
            <span>UI/UX Designer</span>
            <span>HTML, CSS</span>
          </span>
          <span>
            <span><span>UI/UX Designer</span></span>
            <span><span>HTML, CSS</span></span>
          </span>
        </p>
      </div>
    </div>
  </div>

  <div class="card" style="background-image: url('https://d21950x0o1sh55.cloudfront.net/uploads/inside_exclusif/picture/50/desktop_guided_tour_2.jpg');">
    <div class="card__content" >
      <div class="card__content--description" >
        <h3 class="roll-up" style="margin-left:-4px;">
          <span><span>H</span><span>H</span></span>
          <span><span>a</span><span>a</span></span>
          <span><span>r</span><span>r</span></span>
          <span><span>s</span><span>s</span></span>
          <span><span>h</span><span>h</span></span>
          <span><span>e</span><span>e</span></span>
          <span><span>n</span><span>n</span></span>
          <span><span>e</span><span>e</span></span>
          <span><span>e</span><span>e</span></span>
        </h3>
        <p class="text-reveal">
          <span>
            <span>UI/UX Designer</span>
            <span>HTML, CSS</span>
          </span>
          <span>
            <span><span>UI/UX Designer</span></span>
            <span><span>HTML, CSS</span></span>
          </span>
        </p>
      </div>
    </div>
  </div>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script  src="./script.js"></script>

</body>
</html>
