<?php include('header.php'); ?>
<div class="container">
    <div class="product-view">
        <div class="product-essential">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <img id="image-main" class="gallery-image visible" src="https://placehold.co/250x250?text=LegendMC" alt="VIP" title="VIP">

                        <div class="more-views row">
                            <ul class="product-image-thumbs">
                                <li>
                                    <a class="thumb-link" href="#" title="" data-image-index="0">
                                        <img src="https://placehold.co/250x250?text=LegendMC" width="75" height="75" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="thumb-link" href="#" title="" data-image-index="1">
                                        <img src="https://placehold.co/250x250?text=LegendMC" width="75" height="75" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="thumb-link" href="#" title="" data-image-index="2">
                                        <img src="https://placehold.co/250x250?text=LegendMC" width="75" height="75" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="thumb-link" href="#" title="" data-image-index="3">
                                        <img src="https://placehold.co/250x250?text=LegendMC" width="75" height="75" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="thumb-link" href="#" title="" data-image-index="4">
                                        <img src="https://placehold.co/250x250?text=LegendMC" width="75" height="75" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="thumb-link" href="#" title="" data-image-index="5">
                                        <img src="https://placehold.co/250x250?text=LegendMC" width="75" height="75" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-shop">
                            <div class="product-name">
                                <span class="h1">VIP</span>
                            </div>
                            <div class="price-info">
                                <div class="price-box">
                                    <span class="regular-price" id="product-price-3">
                                        <span class="price">R$10,00</span> </span>
                                </div>
                            </div>

                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" type="hidden" value="AiYtcW4qVF1kPqAn">
                                <div class="no-display">
                                    <input type="hidden" name="product" value="3">
                                    <input type="hidden" name="related_product" id="related-products-field" value="">
                                </div>

                                <div class="product-options" id="product-options-wrapper">
                                    <dl class="last">
                                        <dt>
                                            <label class="required"><em>*</em>Tipo de VIP</label>
                                        </dt>
                                        <dd class="last">
                                            <div class="input-box">

                                                <select name="super_attribute[136]" id="attribute136" class="required-entry super-attribute-select">

                                                    <option value="">Selecione...</option>
                                                    <option value="5" price="0">LEGEND</option>
                                                    <option value="6" price="0">MVP</option>
                                                    <option value="7" price="0">VIP</option>
                                                </select>
                                            </div>
                                        </dd>
                                    </dl>


                                    <p class="required">*Campos Obrigatórios</p>
                                </div>

                                <div class="product-options-bottom">
                                    <div class="price-box">
                                        <span class="regular-price" id="product-price-3_clone">
                                            <span class="price">R$10,00</span> </span>

                                    </div>

                                    <div class="add-to-cart">
                                        <label for="qty">Qtd:</label>
                                        <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qtd" class="input-text qty">
                                        <button type="button" title="Comprar" id="product-addtocart-button" class="button btn-cart" onclick="productAddToCartForm.submit(this)"><span><span>Comprar</span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="product-collateral toggle-content tabs">
            <dl id="collateral-tabs" class="collateral-tabs">
                <dt class="tab"><span></span></dt>
                <dd class="tab-container">
                    <div class="tab-content">
                        <h2>Detalhes</h2>
                        <div class="std">
                            VIP </div>
                    </div>
                </dd>
            </dl>
        </div>


    </div>
</div>
<?php include('footer.php'); ?>