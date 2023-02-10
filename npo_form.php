<style>
    #institution {
        display: none;
    }
    
</style>

<form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="npo" method="POST">
    <h1>NPO Questions</h1>
    <h2>1. What is the scale of your business?</h2>
    <div>
        <input type="radio" name="npo_1" value="2" />
        <label for="npo">Up and coming</label>
    </div>
    <div>
        <input type="radio" name="npo_1" value="3" />
        <label for="npo">We want to elevate to the next level</label>
    </div>
    <div>
        <input type="radio" name="npo_1" value="3" />
        <label for="npo">We want the cherry on the top</label>
    </div>
    <br>
    <h2>2. Do you deal with donations?</h2>
    <div>
        <input type="radio" name="npo_2" value="2" />
        <label for="npo">Yes we do</label>
    </div>
    <div>
        <input type="radio" name="npo_2" value="1" />
        <label for="npo">We handle it ourselves</label>
    </div>
    <div>
        <input type="radio" name="npo_2" value="3" />
        <label for="npo">We want a handler</label>
    </div>
    <br>
    <h2>3. Want to be able to make changes to your site?</h2>
    <div>
        <input type="radio" name="npo_3" value="1" />
        <label for="npo">Teach me the basics</label>
    </div>
    <div>
        <input type="radio" name="npo_3" value="2" />
        <label for="npo">Show me it's features</label>
    </div>
    <div>
        <input type="radio" name="npo_3" value="3" />
        <label for="npo">Make me a pro</label>
    </div>
    <br>
    <h2>4. Want to have all the customization?</h2>
    <div>
        <input type="radio" name="npo_3" value="1" />
        <label for="npo">Teach me the basics</label>
    </div>
    <div>
        <input type="radio" name="npo_3" value="2" />
        <label for="npo">Show me it's features</label>
    </div>
    <div>
        <input type="radio" name="npo_3" value="3" />
        <label for="npo">Make me a pro</label>
    </div>
    <input type="submit" value="submit" name="submit_npo">
</form>