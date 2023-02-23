<style>
    #institution {
        display: none !important;
    }
    .form1{
        display:none !important;
    }
    .form4{
    min-height:100vh !important;
    max-width: 100%;
    background: rgb(45,56,86);
    background: linear-gradient(355deg, rgba(45,56,86,1) 68%, rgba(140,126,138,1) 100%);
    display:flex;
    flex-direction:row;
    flex-wrap:nowrap;
    justify-content:center;
    align-items:center;

   }
   #passage4{
    display:flex;
  flex-direction:column;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  width: 50%;
  height: 90%;
   }
   #passage4 p{
    text-align:left;
  color:#cbccf5;
  font-size:16px;
  letter-spacing:2px;
  font-family: 'freshwost', sans-serif;
  text-shadow: 1px 2px 3px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);
   }
   #passage3 h1{
    /* text-align: left !important; */
   }
   h2{
    font-size:16px !important;
   }
   #np{
    display: flex;
    flex-direction: row;
   }
   #npo{
    padding:20px;
  border-radius:12px;
  background-color:#7463fd;
  height:455px;
  width:65%;
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
   }
   #content4{
    display:flex;
  flex-direction:column;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  height:90%;
  width:70%;
   }
   #card{
    max-height:100% !important;
    max-width:100% !important;
    /* background-color:red; */
    display:flex;
  flex-direction:column;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
   }
   .submit-btn-smme{
  font-family: 'freshwost', sans-serif;
  letter-spacing:3px;
  border:none;
  background-color:#7a7add;
  border-radius:12px;
  height:60px;
  width:150px;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
font-size:24px;
color:#cbccf5;
transition:0.3s ease-in;
}
div > input{ /* HIDE RADIO */
    visibility:visible !important; /* Makes input not-clickable */
    /* position: absolute; Remove input from document flow */
}
</style>
<section class="form4">

    <form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="npo" method="POST">
    <div id="passage4">
        <h1>SMME Questions</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, corrupti. Tenetur asperiores minima recusandae at velit aut nobis illum exercitationem! Quaerat impedit atque voluptate ratione! Temporibus quas sequi totam at.
        </p>
        <div id="np">
        <button class="control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span  aria-hidden="true">PREVIOUS</span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span aria-hidden="true">NEXT</span>
            <span class="sr-only">Next</span>
        </button>
        </div>
        <button type="submit" value="submit" name="submit_smme" class="submit-btn-smme">SUBMIT</button>
    </div>
    <div id="content4">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div id="card">
        <h2>1. What is the scale of your business?</h2>
        <div>
            <input type="radio" name="smme_1" value="1" />
            <label for="smme">Up and coming</label>
        </div>
        <div>
            <input type="radio" name="smme_1" value="2" />
            <label for="smme">We want to elevate to the next level</label>
        </div>
        <div>
            <input type="radio" name="smme_1" value="3" />
            <label for="smme">We want to add the cherry on top</label>
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div id="card">
    <h2>2. Bigger?</h2>
        <div>
            <input type="radio" name="smme_2" value="1" />
            <label for="smme">Staring out</label>
        </div>
        <div>
            <input type="radio" name="smme_2" value="2" />
            <label for="smme">Frequently</label>
        </div>
        <div>
            <input type="radio" name="smme_2" value="3" />
            <label for="smme">Professional</label>
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div id="card">
    <h2>3. Want to be able to make changes to your site?</h2>
        <div>
            <input type="radio" name="smme_3" value="1" />
            <label for="smme">Teach me the basics</label>
        </div>
        <div>
            <input type="radio" name="smme_3" value="2" />
            <label for="smme">Show me it's features</label>
        </div>
        <div>
            <input type="radio" name="smme_3" value="3" />
            <label for="smme">Make me a pro</label>
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div id="card">
    <h2>4. Want to have all the customization?</h2>
        <div>
            <input type="radio" name="smme_4" value="1" />
            <label for="smme">Something basic</label>
        </div>
        <div>
            <input type="radio" name="smme_4" value="2" />
            <label for="smme">Add some more flare</label>
        </div>
        <div>
            <input type="radio" name="smme_4" value="3" />
            <label for="smme">All the bells and whistles</label>
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div id="card">
    <h2>5. Is content the name of the game, need extra room?</h2>
        <div>
            <input type="radio" name="smme_5" value="1" />
            <label for="smme">Short and sweet</label>
        </div>
        <div>
            <input type="radio" name="smme_5" value="2" />
            <label for="npo">Story time</label>
        </div>
        <div>
            <input type="radio" name="smme_5" value="3" />
            <label for="smme">It's a novel</label>
        </div>
        </div>
    </div>
  </div>
</div>
        
        <br>
        <br>
        <br>
        <br>
    </div>
    </form>
</section>