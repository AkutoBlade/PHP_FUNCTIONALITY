<style>
    #institution {
        display: none !important;
    }

    .form1 {
        display: none !important;
    }

    .form5 {
        min-height: 100vh !important;
        max-width: 100%;
        background: rgb(45, 56, 86);
        background: linear-gradient(355deg, rgba(45, 56, 86, 1) 68%, rgba(140, 126, 138, 1) 100%);
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;

    }

    #passage5 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 90%;
    }

    #passage5 p {
        text-align: left;
        color: #cbccf5;
        font-size: 20px;
        letter-spacing: 2px;
        font-family: 'freshwost', sans-serif;
        text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3),
            0px -4px 10px rgba(255, 255, 255, 0.3);
    }

    #passage5 h1 {
        /* text-align: left !important; */
    }

    h2 {
        font-size: 16px !important;
    }

    #np {
        display: flex;
        flex-direction: row;
    }

    #maint {
        padding: 20px;
        border-radius: 12px;
        background-color: #7463fd;
        height: 455px;
        width: 65%;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
    }

    #content5 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        height: 90%;
        width: 70%;
    }

    #card {
        max-height: 100% !important;
        max-width: 100% !important;
        /* background-color:red; */
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .submit-btn-maint {
        font-family: 'freshwost', sans-serif;
        letter-spacing: 3px;
        border: none;
        background-color: #7a7add;
        border-radius: 12px;
        height: 60px;
        width: 150px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        font-size: 24px;
        color: #cbccf5;
        transition: 0.3s ease-in;
    }

    div>input {
        /* HIDE RADIO */
        visibility: visible !important;
        /* Makes input not-clickable */
        /* position: absolute; Remove input from document flow */
    }
</style>
<section class="form5">
    <form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="maint" method="POST">
        <div id="passage5">
            <h1>Maintenance Questions</h1>
            <div id="np">
                <button class="control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span aria-hidden="true">PREVIOUS</span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span aria-hidden="true">NEXT</span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
            <button type="submit" value="submit" name="submit_maint" class="submit-btm-maint">SUBMIT</button>
        </div>
        <div id="content5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div id="card">
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
                        </div>
                    </div>
                            <div class="carousel-item">
                                <div id="card">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div id="card">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div id="card">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div id="card">
                                    <h2>5. Want us on demand for any issues that sites?</h2>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</section>