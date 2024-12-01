
    <link rel="stylesheet" href="css/pago.css">
    <link rel="stylesheet" href="css/cartPanel.css">
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
                        <div class="purchase">
                            <div class="purchase-title">Resúmen</div>
                            <img src="assets/movies/huerfanas.jpg">
                            <div class="purchase-movie">
                                <div class="purchase-movie-title">Las dos Huérfanas</div>
                                <div class="purchase-movie-details">60 min ESP</div>
                                <div class="purchase-movie-location">Cine Cuervos, Refugio</div>
                                <div class="purchase-scheduled-time">A las 16:50 PM</div>
                                <div class="purchase-summary-item">
                                    <div class="purchase-summary-title">x8 Tickets</div>
                                    <div class="purchase-summary-image"><img src="assets/svg/ticket.svg"></div>
                                    <div class="purchase-summary-total">$360 MXN</div>
                                </div>
                                <div class="purchase-summary-item">
                                    <div class="purchase-summary-title">Alimentos</div>
                                    <div class="purchase-summary-image"><img src="assets/svg/food.svg"></div>
                                    <div class="purchase-summary-total">$120 MXN</div>
                                </div>
                                <div class="purchase-taxes">
                                    <div class="purchase-tax-title">Impuestos</div>
                                    <div class="purchase-tax-total">$76 MXN</div>
                                </div>
                                <div class="purchase-total">
                                    <div class="purchase-total-title">Total</div>
                                    <div class="purchase-total-number">$480 MXN</div>
                                </div>
                            </div>
                            <div class="purchase-action">
                                <button>Continuar con el Pago</button>
                            </div>
                        </div>
                        <div class="payment">
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
                            <button id="paybtn">Continuar</button>
                        </div>
                        <div class="completion">
                            <div class="completion-title">¡Compra Exitosa!</div>
                            <img src="assets/movies/huerfanas.jpg">
                            <div class="completion-details">
                                <div class="comp-movie">Las dos huérfanas <div>60 min ESP</div></div>
                                <img src="assets/svg/ticket_final.svg">
                                <div class="ticket-end-title">Las dos Huérfanas</div>
                                <div class="ticket-end-time">16:50 PM</div>
                                <div class="ticket-end-place">Cine Cuervos, Refugio</div>
                                <img class="ticket-end-logo" src="assets/svg/logo_white.svg" alt="">
                            </div>
                            <div class="completion-actions">
                                <div class="actions-title">Descargar Tickets</div>
                                <img src="assets/svg/pdf.svg">
                                <img src="assets/svg/img.svg">
                            </div>
                            <button id="endbtn">Finalizar</button>
                        </div>
                    </div>
                    <div class="purchase-details">
                        <div class="table">
                            <div class="table-main-title">Detalle de la compra</div>
                            <div class="table-title">Tickets</div>
                            <div class="line"></div>
                            <tbody>
                                <!-- Las filas se generarán dinámicamente -->
                            </tbody>
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
                            <table>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="table-price"></td>
                                </tr>
                                <tr>
                                    <td>x2 Soda</td>
                                    <td>Mediana</td>
                                    <td class="table-price"></td>
                                </tr>
                                <tr>
                                    <td>x1 Nachos con queso</td>
                                    <td>Jalapeños</td>
                                    <td class="table-price"></td>
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