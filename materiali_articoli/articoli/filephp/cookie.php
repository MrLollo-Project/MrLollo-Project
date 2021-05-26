<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background: #FCBA7F;
}
.wrapper{
  position: fixed;
  bottom: 30px;
  left: 30px;
  max-width: 365px;
  background: #fff;
  padding: 25px 25px 30px 25px;
  border-radius: 15px;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  text-align: center;
}
.wrapper.hide{
  opacity: 0;
  pointer-events: none;
  transform: scale(0.8);
  transition: all 0.3s ease;
}
::selection{
  color: #fff;
  background: #FCBA7F;
}
.wrapper img{
  max-width: 90px;
}
.content header{
  font-size: 25px;
  font-weight: 600;
}
.content{
  margin-top: 10px;
}
.content p{
  color: black;
  margin: 5px 0 20px 0;
}
.content h1{
  color: black;
  margin: 10px 0 20px 0;
}
.content .buttons{
  display: flex;
  align-items: center;
  justify-content: center;
}
.buttons button{
  padding: 10px 20px;
  border: none;
  outline: none;
  color: #fff;
  font-size: 16px;
  font-weight: 500;
  border-radius: 5px;
  background: #4db8ff;
  cursor: pointer;
  transition: all 0.3s ease;
}
.buttons button:hover{
  transform: scale(0.97);
}
.buttons .item{
  margin: 0 10px;
}
.buttons a{
  color: #4db8ff;
}

</style>

<div class="wrapper">
    <img src="/images/cookie.png" alt="">
    <div class="content">
      <h1>Consenso sui cookie</h1>
      <p>Questo sito Web utilizza i cookie per assicurarti di ottenere la migliore esperienza sul nostro sito Web.</p>
      <div class="buttons">
        <button class="item">Accetta</button>
        <a href="privacy.php" class="item">Per saperne di più</a>
      </div>
    </div>
  </div>

  <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");

    acceptBtn.onclick = ()=>{

      document.cookie = "Cookie=IexsDiscovery; max-age="+60*60*24*30;
      if(document.cookie){
        cookieBox.classList.add("hide");
      }else{
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("Cookie=IexsDiscovery");
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>