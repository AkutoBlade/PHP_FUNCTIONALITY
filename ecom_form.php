<style>
    #institution {
        display: none !important;
    }

    .form1 {
        display: none !important;
    }

    .form3 {
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

    #passage3 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 90%;
    }

    #passage3 p {
        text-align: left;
        color: #cbccf5;
        font-size: 20px;
        letter-spacing: 2px;
        font-family: 'freshwost', sans-serif;
        text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3),
            0px -4px 10px rgba(255, 255, 255, 0.3);
    }

    #passage3 h1 {
        /* text-align: left !important; */
    }

    h2 {
        font-size: 16px !important;
    }

    #np {
        display: flex;
        flex-direction: row;
    }

    #ecom {
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

    #content3 {
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

    .submit-btn-ecom {
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
<section class="form3">
    <form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="ecom" method="POST">
        <div id="passage3">
            <h1>E-commerce Questions</h1>
            <p>Ecommerce or electronic commerce is the trading of goods and services on the internet.</p>
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
            <button type="submit" value="submit" name="submit_ecom" class="submit-btm-ecom">SUBMIT</button>
        </div>
        <div id="content3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div id="card">
                            <h2>1. What is the scale of your store?</h2>
                            <div>
                                <input type="radio" name="ecom_1" value="1" />
                                <label for="ecom">Up and coming</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_1" value="3" />
                                <label for="ecom">We want to add the cherry on top</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_1" value="2" />
                                <label for="ecom">We want to grow to the next level</label>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="card">
                            <h2>2. Do you get an influx of products?</h2>
                            <div>
                                <input type="radio" name="ecom_2" value="1" />
                                <label for="ecom">We keeping it nice</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_2" value="3" />
                                <label for="ecom">We set the trends</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_2" value="2" />
                                <label for="ecom">We looking to expand</label>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="card">
                            <h2>3. Mutiple catalogs?</h2>
                            <div>
                                <input type="radio" name="ecom_3" value="1" />
                                <label for="ecom">We have our flavour</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_3" value="2" />
                                <label for="ecom">We testing out new flavours</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_3" value="3" />
                                <label for="ecom">We want all the flavours</label>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="card">
                            <h2>4. Want to have all the customization?</h2>
                            <div>
                                <input type="radio" name="ecom_4" value="1" />
                                <label for="ecom">Something basic</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_4" value="2" />
                                <label for="ecom">Add some more flare</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_4" value="3" />
                                <label for="ecom">All the bells and whistles</label>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="card">
                            <h2>5. Need a safety net?</h2>
                            <div>
                                <input type="radio" name="ecom_5" value="1" />
                                <label for="ecom">We like living on the edge</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_5" value="3" />
                                <label for="ecom">Safety first</label>
                            </div>
                            <div>
                                <input type="radio" name="ecom_5" value="2" />
                                <label for="ecom">Full scale protection</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>