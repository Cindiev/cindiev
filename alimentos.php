    <link rel="stylesheet" href="css/alimentos.css">
    <link rel="stylesheet" href="css/cartPanel.css">
    <script src="js/alimentos.js"></script>

    <main onload="initAlimentos()">
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="main-panel">
                <div class="main-panel-title">
                    <div class="return">
                        <img src="assets/svg/return.svg">
                    </div>
                    <h2>Añadir Alimentos</h2>
                </div>
                <div class="main-panel-detail">
                    <div class="square-selector">
                        <div class="square-align">
                            <div id="popcorn" class="square">
                                <div class="sq-decorative">
                                    <div class="square-icon">
                                        <img src="assets/svg/popcorns.svg">
                                    </div>
                                    <div class="square-title">Palomitas</div>
                                </div>
                                <div class="sq-content">
                                    <div class="sqc-item" id="mantg">
                                        <img class="sqci-img" src="assets/svg/popcorns.svg">
                                        <label class=sqci-title>Palomitas Grandes de Mantequilla</label>
                                        <label class=sqci-price>$65</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item" id="mantm">
                                        <img class="sqci-img" src="assets/svg/popcorns.svg">
                                        <label class=sqci-title>Palomitas Medianas</label>
                                        <label class=sqci-price>$59</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item" id="mantp">
                                        <img class="sqci-img" src="assets/svg/popcorns.svg">
                                        <label class=sqci-title>Palomitas Prqueñas</label>
                                        <label class=sqci-price>$50</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                </div>
                            </div>
                            <div id="drink" class="square">
                                <div class="sq-decorative">
                                    <div class="square-icon">
                                        <img src="assets/svg/drink.svg">
                                    </div>
                                    <div class="square-title">Bebidas</div>
                                </div>
                                <div class="sq-content">
                                    <div class="sqc-item" id="sodj">
                                        <img class="sqci-img" src="assets/svg/drink.svg">
                                        <label class=sqci-title>Vaso Jumbo</label>
                                        <label class=sqci-price>$87</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item" id="sodg">
                                        <img class="sqci-img" src="assets/svg/drink.svg">
                                        <label class=sqci-title>Vaso Grande</label>
                                        <label class=sqci-price>$83</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item" id="sodm">
                                        <img class="sqci-img" src="assets/svg/drink.svg">
                                        <label class=sqci-title>Vaso Mediano</label>
                                        <label class=sqci-price>$60</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item" id="sodc">
                                        <img class="sqci-img" src="assets/svg/drink.svg">
                                        <label class=sqci-title>Vaso Chico</label>
                                        <label class=sqci-price>$40</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item" id="sodr">
                                        <img class="sqci-img" src="assets/svg/drink.svg">
                                        <label class=sqci-title>Vaso Grande Refill</label>
                                        <label class=sqci-price>$87</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                </div>
                            </div>
                            <div id="candy" class="square-mid">
                                <div class="sqm-decorative">
                                    <div class="square-mid-icon">
                                        <img src="assets/svg/candy.svg">
                                    </div>
                                    <div class="square-title">Dulces</div>
                                </div>
                                <div class="sqm-content">
                                    <div class="sqc-item sqcm-item" id="chsng">
                                        <img class="sqcim-img" src="assets/svg/candy.svg">
                                        <label class=sqci-title>Chocolate Snickers 48g</label>
                                        <label class=sqci-price>$25</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                </div>
                            </div>
                            <div id="snacks" class="square-mid">
                                <div class="sqm-decorative">
                                    <div class="square-mid-icon">
                                        <img src="assets/svg/snack.svg">
                                    </div>
                                    <div class="square-title">Snacks</div>
                                </div>
                                <div class="sqm-content">
                                    <div class="sqc-item sqcm-item" id="nachen">
                                        <img class="sqcim-img" src="assets/svg/snack.svg">
                                        <label class=sqci-title>Nachos</label>
                                        <label class=sqci-price>$35</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                    <div class="sqc-item sqcm-item" id="nacheq">
                                        <img class="sqcim-img" src="assets/svg/snack.svg">
                                        <label class=sqci-title>Nachos Queso Extra</label>
                                        <label class=sqci-price>$40</label>
                                        <div class="sqci-minus">-</div>
                                        <div class="sqci-plus">+</div>
                                    </div>
                                </div>
                            </div>   
                        </div>     
                    </div>
                </div>
                <div class="main-panel-footer">
                    <div class="footer-elements">
                    </div>
                    <div class="buttons">
                        <button id="continuar-pago" class="btn register">Continuar</button>
                    </div>
                </div>
            </div>


            <div class="cart-panel">
                <div class="panel-header">
                    <img src="assets/svg/cart.svg">
                </div>
                <div class="panel-content">
                    <div class="movie-summary">
                        <img src="assets/movies/nocover.png">
                        <div id="selected-title" class="summary-title"></div>
                        <div class="summary-details">60 min ESP</div>
                        <div id="selected-time" class="summary-date"></div>
                    </div> 
                    <div class="table">
                        <div class="table-title">Tickets</div>
                        <div class="line"></div>
                        <table>
                            <tbody>
                                <!-- Las filas se generarán dinámicamente -->
                            </tbody>
                        </table>
                    </div>
                    <div class="table">
                        <div class="table-title">Alimentos</div>
                        <div class="line"></div>
                        <table id="food-table">
                        </table>
                    </div>
                    <div class="table">
                        <div class="table-title">Asientos</div>
                        <div class="line"></div>
                        <table>
                            <tbody id="seats-table">
                                <!-- Las filas se generarán dinámicamente -->
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="panel-footer">
                    <div id="taxes-value" class="footer-text sub">
                        Impuestos: $0
                    </div>
                    <div id="total-value" class="footer-text">
                        Total: $0
                    </div>
                </div>
            </div>

            <div class="tentacle tentacle-left"></div>
            <div class="tentacle tentacle-right"></div>
            <div class="icon"></div>
        </div>
    </main>
    <footer>
        <a href="#" class="more-info">Más sobre nosotros</a>      
    </footer>
</body>
</html>