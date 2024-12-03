
    <link rel="stylesheet" href="css/pago.css">
    <link rel="stylesheet" href="css/cartPanel.css">
    <script src="js/pago.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>

    <main>
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="main-panel">
                <div class="main-panel-title-left">
                    <div class="return">
                        <img src="assets/svg/return.svg">
                    </div>
                    <h2>Pago</h2>
                </div>
                <div class="main-panel-detail">
                    <div class="purchase-container">
<!--1st Panel-->
                        <div class="purchase" id="purchase-container">
                            <div class="purchase-title">Resúmen</div>
                            <img src="assets/movies/huerfanas.jpg">
                            <div class="purchase-movie">
                                <div id="r-mtitle" class="purchase-movie-title">Las dos Huérfanas</div>
                                <div id="r-mdetail" class="purchase-movie-details">60 min ESP</div>
                                <div class="purchase-movie-location">Cine Cuervos, El Refugio</div>
                                <div id="r-start" class="purchase-scheduled-time">A las 16:50 PM</div>
                                <div class="purchase-summary-item">
                                    <div id="purchase-total-tickets" class="purchase-summary-title">x8 Tickets</div>
                                    <div class="purchase-summary-image"><img src="assets/svg/ticket.svg"></div>
                                    <div id="purchase-total-tickets-price" class="purchase-summary-total">$360 MXN</div>
                                </div>
                                <div class="purchase-summary-item">
                                    <div class="purchase-summary-title">Alimentos</div>
                                    <div class="purchase-summary-image"><img src="assets/svg/food.svg"></div>
                                    <div id="purchase-total-food-price" class="purchase-summary-total">$120 MXN</div>
                                </div>
                                <div class="purchase-taxes">
                                    <div class="purchase-tax-title">Impuestos</div>
                                    <div id="final-taxes" class="purchase-tax-total">$76 MXN</div>
                                </div>
                                <div class="purchase-total">
                                    <div class="purchase-total-title">Total</div>
                                    <div id="final-total" class="purchase-total-number">$480 MXN</div>
                                </div>
                            </div>
                            <div class="purchase-action">
                                <button id="continue-payment">Continuar con el Pago</button>
                            </div>
                        </div>
<!--2nd Panel-->
                        <div class="payment" id="payment-container" style="display:none;">
                            <div class="payment-title">Seleccione su método de pago</div>
                            <div class="payment-buttons">
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                                <div class="payment-button"></div>
                            </div>
                            <div class="payment-selector">
                                <select name="payment_method" id="payment">
                                    <option value="Visa">VISA **71</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="MercadoPago">Mercado Pago</option>
                                    <option value="Oxxo">Oxxo</option>
                                </select>
                            </div>
                            <div class="payment-mail">Cuenta: iadeb287@gmail.com</div>
                            <button class="paybtn" id="continue-method">Continuar</button>
                        </div>
<!--3rd Panel-->
                        <div class="completion" id="completion-container" style="display:none;">
                            <div class="completion-title">¡Compra Exitosa!</div>
                            <img src="assets/movies/huerfanas.jpg">
                            <div id="movie-info" class="comp-movie">Las dos huérfanas <div>60 min ESP</div></div>

                            <div id="print" class="completion-details hover-effect">
                                <img class="ticket-end-bg" src="assets/svg/ticket_final.svg">
                                <div id="t-title" class="ticket-end-title">Las dos Huérfanas</div>
                                <div id="t-end" class="ticket-end-time">16:50 PM</div>
                                <div class="ticket-end-place">Cine Cuervos, Refugio</div>
                                <img class="ticket-end-logo" src="assets/svg/logo_white.svg" alt="">
                            </div>
                            <div class="completion-actions">
                                <div id="download-default" class="actions-title">Descargar Tickets</div>
                                <img id="download-button" src="assets/svg/img.svg">
                            </div>
                            <button id="endbtn">Finalizar</button>
                        </div>
                    </div>
                    <div class="purchase-details">
                        <div  class="table">
                            <div class="table-main-title">Detalle de la compra</div>
                            <div class="table-title">Tickets</div>
                            <div class="line"></div>
                            <table id="ticket-table"></table>
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
                        <div class="table">
                            <div class="table-title">Alimentos</div>
                            <div class="line"></div>
                            <table id="food-table">
                                <tr>
                                    <td>Soda Mediana</td>
                                    <td>x2</td>
                                    <td class="table-price">$80</td>
                                </tr>
                                <tr>
                                    <td>Nachos con queso</td>
                                    <td>x1</td>
                                    <td class="table-price">$60</td>
                                </tr>
                            </table>
                        </div>
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