<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticaret Sitesi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap');

    /*-- VARIABLES CSS--*/
    /*Colores*/
    :root{
        --first-color: #E3F8FF;
        --second-color: #DCFAFB;
        --third-color: #FFE8DF;
        --accent-color: #FF5151;
        --dark-color: #161616;
    }
    
    /*Tipografia responsive*/
    :root{
        --body-font: 'Open Sans';
        --h1-font-size: 1.5rem;
        --h3-font-size: 1rem;
        --normal-font-size: 0.938rem;
        --smaller-font-size: 0.75rem;
    }
    @media screen and (min-width: 768px){
        :root{
            --h1-font-size: 2rem;
            --normal-font-size: 1rem;
            --smaller-font-size: 0.813rem;
        }
    }
    
    /*-- BASE --*/
    *,::after,::before{
        box-sizing: border-box;
    }
    body{
        margin: 2rem 0 0 0;
        background-color: #fff;
        color: var(--dark-color);
        font-family: var(--body-font);
    }
    h1{
        font-size: var(--h1-font-size);
    }
    img{
        max-width: 100%;
        height: auto;
    }
    a{
        text-decoration: none;
    }
    
    /*-- LAYAOUT --*/
    .main {
        padding: 2rem 0;
    }
    .bd-grid{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        max-width: 1200px;
        margin-left: 2.5rem;
        margin-right: 2.5rem;
        align-items: center;
        gap: 2rem;
    }
    
    /*-- PAGES --*/
    .title-shop{
        position: relative;
        margin: 0 2.5rem;
    }
    .title-shop::after{
        content: '';
        position: absolute;
        top: 50%;
        width: 72px;
        height: 2px;
        background-color: var(--dark-color);
        margin-left: .25rem;
    }
    
    /*-- COMPONENT --*/
    .card{
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1.5rem 2rem;
        border-radius: 1rem;
        overflow: hidden;
    }
    article:nth-child(1){
        background-color: var(--first-color);
    }
    article:nth-child(2){
        background-color: var(--second-color);
    }
    article:nth-child(3){
        background-color: var(--third-color);
    }
    article:nth-child(4){
        background-color: var(--second-color);
    }
    .card__img{
        width: 180px;
        height: auto;
        padding: 3rem 0;
        transition: .5s;
    }
    .card__name{
        position: absolute;
        left: -25%;
        top: 0;
        width: 3.5rem;
        height: 100%;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        text-align: center;
        background-color: var(--dark-color);
        color: #fff;
        font-weight: bold;
        transition: .5s;
    }
    .card__icon{
        font-size: 1.5rem;
        color: var(--dark-color);
    }
    .card__icon:hover{
        color: var(--accent-color);
    }
    .card__precis{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        transition: .5s;
    }
    .card__preci{
        display: block;
        text-align: center;
    }
    .card__preci--before{
        font-size: var(--smaller-font-size);
        color: var(--accent-color);
        margin-bottom: .25rem;
    }
    .card__preci--now{
        font-size: var(--h3-font-size);
        font-weight: bold;
    }
    /*Move left*/
    .card:hover{
        box-shadow: 0 .5rem 1rem #D1D9E6;
    }
    .card:hover .card__name{
        left: 0;
    }
    .card:hover .card__img{
        transform: rotate(30deg);
        margin-left: 3.5rem;
    }
    .card:hover .card__precis{
        margin-left: 3.5rem;
        padding: 0 1.5rem;
    }
    
    /*-- FOOTER --*/
    
    
    
    /*-- MEDIA QUERIES --*/
    @media screen and (min-width: 1200px){
        body{
            margin: 3rem 0 0 0;
        }
        .title-shop{
            margin: 0 5rem;
        }
        .bd-grid{
            margin-left: auto;
            margin-right: auto;
        }
    }</style>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">SUPSTORE</a>
            </div>
            <ul class="nav-links">
                <li><a href="anasayfa.php">Anasayfa</a></li>
                <li><a href="#">Ürünler</a></li>
                <li><a href="sepet.php">Sepet</a></li>
                <li><a href="#">İletişim</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <body>
    <h1 class="title-shop">Ürünlerimiz</h1>
    <main class="main bd-grid">
      <article class="card">
        <div class="card__img">
          <img src="hardline-nox-2-pre-workout-1090-gr-elma-35-11zon.webp" alt="asfdfga">
        </div>
        <div class="card__name">
          <p>PRE WORKOUT</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
  
          <div>
            <span class="card__preci card__preci--before">$990.00</span>
            <span class="card__preci card__preci--now">$749.00</span>
          </div>
          <a href="" class="card__icon">
            <ion-icon name="cart-outline"></ion-icon>
          </a>
        </div>
      </article>
  
      <article class="card">
        <div class="card__img">
          <img src="hardline_kreatin_100_mikronize_300_gr_14580-750x750.jpeg" alt="">
        </div>
        <div class="card__name">
          <p>CREATİNE</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div>
            <span class="card__preci card__preci--before">$990.00</span>
            <span class="card__preci card__preci--now">$749.00</span>
          </div>
          <a href="" class="card__icon">
            <ion-icon name="cart-outline"></ion-icon>
          </a>
        </div>
      </article>
  
      <article class="card">
        <div class="card__img">
          <img src="grizzonenutrition-maltodextrin-brownie-on.webp" alt="">
        </div>
        <div class="card__name">
          <p>MALTODEXTRİN</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
  
          <div>
            <span class="card__preci card__preci--before">$990.00</span>
            <span class="card__preci card__preci--now">$749.00</span>
          </div>
          <a href="" class="card__icon">
            <ion-icon name="cart-outline"></ion-icon>
          </a>
        </div>
      </article>
  
      <article class="card">
        <div class="card__img">
          <img src="9171098009650.jpg" alt="">
        </div>
        <div class="card__name">
          <p>BCAA</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
  
          <div>
            <span class="card__preci card__preci--before">$990.00</span>
            <span class="card__preci card__preci--now">$749.00</span>
          </div>
          <a href="" class="card__icon">
            <ion-icon name="cart-outline"></ion-icon>
          </a>
        </div>
      </article>
    </main>
  
    <!-- ICONS -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 SUPSTORE</p>
            <ul class="social-links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </footer>

    <script src="app.js"></script>
</body>
</html>
