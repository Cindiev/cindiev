    <link rel="stylesheet" href="css/asientos.css">
    <link rel="stylesheet" href="css/cartPanel.css">
    <script src="js/asientos.js"></script>

    <main onload="init()">
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="main-panel">
                <div class="main-panel-title">
                    <div class="return">
                        <img src="assets/svg/return.svg">
                    </div>
                    <h2>Seleccione sus Asientos</h2>
                </div>
                <div class="main-panel-detail">
                    <div class="screen">
                        Pantalla
                    </div>
                    <div class="seats-panel">
                        <div class="seat-box">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                        </div>

                        <div class="seat-box">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                        </div>
                        <div class="seat-box">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                        </div>

                        <div class="seat-box">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                            <img src="assets/svg/seats.svg">
                        </div>

                    </div>
                </div>
                <div class="main-panel-footer">
                    <div class="footer-elements">
                        <div class="colors-container">
                            <div class="color">
                                <svg height="19" width="30"><circle r="7" cx="12" cy="12" fill="white"/></svg>Asientos Disponibles
                            </div>
                            <div class="color">
                                <svg height="19" width="30"><circle r="7" cx="12" cy="12" fill="gray"/></svg>Asientos Ocupados
                            </div>
                            <div class="color">
                                <svg height="19" width="30"><circle r="7" cx="12" cy="12" fill="red"/></svg>Asientos Seleccionados
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button id="continuar-asientos">Continuar</button>
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
                        <div class="summary-title">Orphans of the Storm</div>
                        <div class="summary-details">60 min ESP</div>
                        <div class="summary-date">16:50 PM</div>
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
                        </table>
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