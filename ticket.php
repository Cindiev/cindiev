    <link rel="stylesheet" href="css/tickets.css">
    <link rel="stylesheet" href="css/cartPanel.css">
    <script src="js/tickets.js"></script>

    <main onload="init()">
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="main-panel">
                <div class="main-panel-title">
                    <div class="return">
                        <img src="assets/svg/return.svg">
                    </div>
                    <h2>Seleccione sus Tickets</h2>
                </div>
                <div class="main-panel-detail">
                    <div class="detail-left">

                        <div class="ticket-item">
                            <div class="ticket-icon">
                                <img src="assets/svg/ticket_buy.svg" alt="">
                            </div>
                            <div class="ticket-details">
                                <div class="ticket-name">Adulto</div>
                                <div class="ticket-price">$60</div>
                                <div class="ticket-selector">
                                    <div class="minus-button">-</div>
                                    <div class="selector-value">0</div>
                                    <div class="plus-button">+</div>
                                </div>    
                            </div>
                        </div>

                        <div class="ticket-item">
                            <div class="ticket-icon">
                                <img src="assets/svg/ticket_buy.svg" alt="">
                            </div>
                            <div class="ticket-details">
                                <div class="ticket-name">Niño</div>
                                <div class="ticket-price">$30</div>
                                <div class="ticket-selector">
                                    <div class="minus-button">-</div>
                                    <div class="selector-value">0</div>
                                    <div class="plus-button">+</div>
                                </div>    
                            </div>
                        </div>

                        <div class="ticket-item">
                            <div class="ticket-icon">
                                <img src="assets/svg/ticket_buy.svg" alt="">
                            </div>
                            <div class="ticket-details">
                                <div class="ticket-name">3ra Edad</div>
                                <div class="ticket-price">$30</div>
                                <div class="ticket-selector">
                                    <div class="minus-button">-</div>
                                    <div class="selector-value">0</div>
                                    <div class="plus-button">+</div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="detail-right">
                        <div class="ticket-title">Promoción</div>

                        <div class="ticket-item">
                            <div class="ticket-icon">
                                <img src="assets/svg/ticket_buy.svg" alt="">
                            </div>
                            <div class="ticket-details">
                                <div class="ticket-name">3ra Edad</div>
                                <div class="ticket-price">$30</div>
                                <div class="ticket-promo-name">+1 Dona glaseada</div>    
                                <div class="ticket-selector">
                                    <div class="minus-button">-</div>
                                    <div class="selector-value">0</div>
                                    <div class="plus-button">+</div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-panel-footer">
                    <div class="footer-text">Total de entradas: 8</div>
                    <div class="buttons">
                        <button id="continuar-tickets">Continuar</button>
                    </div>
                </div>
            </div>
            <div class="cart-panel">
                <div class="panel-header">
                    <img src="assets/svg/cart.svg">
                </div>
                <div class="panel-content">
                    <div class="movie-summary">
                        <img src="assets/movies/huerfanas.jpg">
                        <div id="selected-title" class="summary-title"></div>
                        <div class="summary-details">60 min ESP</div>
                        <div id="selected-time" class="summary-date"></div>
                    </div>
                    <div class="table">
                        <div class="table-title">Tickets</div>
                        <div class="line"></div>
                        <table>
                            <tr>
                                <td>Adulto</td>
                                <td>x4</td>
                                <td class="table-price">$240</td>
                            </tr>
                            <tr>
                                <td>Niño</td>
                                <td>x3</td>
                                <td class="table-price">$90</td>
                            </tr>
                            <tr>
                                <td>3ra Edad</td>
                                <td>x1</td>
                                <td class="table-price">$30</td>
                            </tr>
                            <tr>
                                <td class="subtotal">Subtotal</td>
                                <td></td>
                                <td class="table-price">$360</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="footer-text sub">
                        Impuestos: $54
                    </div>
                    <div class="footer-text">
                        Total: $360
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