<section class = "onclick_nav">
  <div class = "img_nav">
    <a href = "#"><img src = "#" alt = "crew0_nav"></a>
    <a href = "#"><img src = "#" alt = "crew1_nav"></a>
  </div>

  <div class = "text_nav">
    <ul>
      <li><a href = "index.html">Home</a></li>
      <li><a href = "Crew.html">The Crew</a></li>
      <li><a href = "Jerry.html">Jerry Law</a></li>
      <li><a href = "Tony.html">Tony Laam</a></li>
    </ul>
  </div>
  <style>
  .onclick_nav {
    opacity: 0;
    transition: all 0.5s ease;
  }

  .img_nav {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-items: space-evenly;
    position: relative;
    top: -120px;
  }

  .img_nav a {
    margin:0 15px;
  }

  .text_nav {
    display: flex;
    flex-flow: column wrap;
    text-align: center;
  }

  .text_nav ul li {
    list-style: none;
    margin: 15px 0;
  }

  .text_nav ul li a {
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 20px;
  }
  </style>
</section>
