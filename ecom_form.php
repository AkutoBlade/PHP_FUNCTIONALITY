<style>
    #institution {
        display: none;
    }
</style>

<form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="ecom" method="POST">
    <h1>Ecom </h1>
    <div>
        <input type="radio" name="npo" value="1" />
        <label for="npo">NPO</label>
    </div>
    <div>
        <input type="radio" name="npo" value="2" />
        <label for="ecom">ECOM</label>
    </div>
    <div>
        <input type="radio" name="npo" value="3" />
        <label for="smme">SMME</label>
    </div>
    <input type="submit" value="submit" name="submit_1">
</form>