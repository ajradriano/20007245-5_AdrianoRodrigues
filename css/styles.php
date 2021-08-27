<style>
  * {
    margin: 0;
    padding: 0;
  }

  html {
    background-color: rgb(246 164 50 / 75%);
  }

  body {
    font-size: 16px;
    font-weight: 400;
    font-family: 'Comic Neue', cursive;


    background-color: #fafafa;
    height: 100vh;
    box-shadow: 0px 0px 5px 3px #00000040;
  }

  .container {
    width: 1200px;
    padding: 0;
    position: relative;
  }

  .header {
    width: 100%;
    height: 180px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 0px 8px 4px -2px #00000040;
  }

  .header .logo {
    width: 160px;
    margin: 20px;
    padding: 5px;
  }

  .header .logo img {
    width: 100%;
    height: 100%;
  }

  .header nav {
    font-size: 2rem;
  }

  .header nav .nav-link {
    color: #272322;
    font-weight: bold;
    transition: .2s;
  }

  .header nav .nav-link:hover {
    color: #6d534d;
  }

  .banner {
    width: 100%;
    height: 400px;
  }

  /* Efeito colmeia */

  .honeycomb {
    width: 100%;
    background: center url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgba(239, 201, 0, 0.6)' viewBox='0 0 100 169.5'%3E%3Cpolygon points='50,34.75 93.5,59.75 93.5,109.75 50,134.75 6.5,109.75 6.5,59.75'%3E%3C/polygon%3E%3Cpolygon points='0,-50 43.5,-25 43.5,25 0,50 -43.5,25 -43.5,-25'%3E%3C/polygon%3E%3Cpolygon points='100,-50 143.5,-25 143.5,25 100,50 56.5,25 56.5,-25'%3E%3C/polygon%3E%3Cpolygon points='0,119.5 43.5,144.5 43.5,194.5 0,219.5 -43.5,194.5 -43.5,144.5'%3E%3C/polygon%3E%3Cpolygon points='100,119.5 143.5,144.5 143.5,194.5 100,219.5 56.5,194.5 56.5,144.5'%3E%3C/polygon%3E%3C/svg%3E");
    background-size: 24px;
  }

  .page-not-found {
    width: 100%;
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .page-not-found .not-found-title {
    font-size: 3rem;
    font-weight: bold;
  }
  .page-not-found .not-found-text {
    font-size: 1.8rem;
  }

  .page-not-found a {
    margin-top: 20px;
    font-size: 1.2rem;
    transition: .3s;
  }

  .page-not-found a:hover {
    font-size: 1.5rem;
    font-weight: bold;
  }

  footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    /* height: 60px; */
    padding: 5px;
    display: flex;
    flex-direction: column;
    font-size: 1.2rem;
    text-align: center;
    box-shadow: 0px -8px 4px -2px #00000040;
  }
</style>
