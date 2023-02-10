<style>
    #institution {
        display: none;
    }
</style>
<form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="npo" method="POST">
    <h1>SMME Questions</h1>
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
    <br>
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
    <br>
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
    <br>
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
    <br>
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
    <input type="submit" value="submit" name="submit_smme">
</form>