<style>
#institution{
  display:none;
}
</style>
<form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="maint" method="POST">
    <h1>Maintenance Questions</h1>
    <h2>1. Looking to elevate your optimisation to next level?</h2>
    <div>
        <input type="radio" name="main_1" value="2" />
        <label for="main">We could use the help</label>
    </div>
    <div>
        <input type="radio" name="main_1" value="3" />
        <label for="main">Yes, optimization is key to efficiency</label>
    </div>
    <div>
        <input type="radio" name="main_1" value="1" />
        <label for="main">We are running at maximum efficiency</label>
    </div>
    <br>
    <h2>2. Want a full scale visual representation of your user-base?</h2>
    <div>
        <input type="radio" name="main_2" value="1" />
        <label for="main">We don't care about</label>
    </div>
    <div>
        <input type="radio" name="main_2" value="3" />
        <label for="main">We want to know our demographics</label>
    </div>
    <div>
        <input type="radio" name="main_2" value="3" />
        <label for="main">We want to see our reach</label>
    </div>
    <br>
    <h2>3. Want us to keep an eye on things for you?</h2>
    <div>
        <input type="radio" name="main_3" value="1" />
        <label for="main">Not right now</label>
    </div>
    <div>
        <input type="radio" name="main_3" value="2" />
        <label for="main">We feel safe when you do</label>
    </div>
    <div>
        <input type="radio" name="main_3" value="3" />
        <label for="main">Security is king</label>
    </div>
    <br>
    <h2>4. Want us on demand for any issues that sites?</h2>
    <div>
        <input type="radio" name="main_4" value="3" />
        <label for="main">Something basic</label>
    </div>
    <div>
        <input type="radio" name="main_4" value="1" />
        <label for="main">Add some more flare</label>
    </div>
    <div>
        <input type="radio" name="main_4" value="2" />
        <label for="main">All the bells and whistles</label>
    </div>
    <input type="submit" value="submit" name="submit_main">
</form>