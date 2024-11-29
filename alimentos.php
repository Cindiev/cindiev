    <link rel="stylesheet" href="css/alimentos.css">
    <link rel="stylesheet" href="css/cartPanel.css">

    <main>
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
                            <div class="square">
                                <div class="square-icon">
                                    <img src="assets/svg/popcorns.svg">
                                </div>
                                <div class="square-title">Palomitas</div>
                            </div>
                            <div class="square">
                                <div class="square-icon">
                                    <img src="assets/svg/drink.svg">
                                </div>
                                <div class="square-title">Bebidas</div>
                            </div>
                            <div class="square-mid">
                                <div class="square-mid-icon">
                                    <img src="assets/svg/candy.svg">
                                </div>
                                <div class="square-title">Dulces</div>
                            </div>
                            <div class="square-mid">
                                <div class="square-mid-icon">
                                    <img src="assets/svg/snack.svg">
                                </div>
                                <div class="square-title">Snacks</div>
                            </div>   
                        </div>     
                    </div>
                </div>
                <div class="main-panel-footer">
                    <div class="footer-elements">
                    </div>
                    <div class="buttons">
                        <button class="btn register">Continuar</button>
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
                        <div class="table-title">Asientos</div>
                        <div class="line"></div>
                        <table>
                            <tr>
                                <td>A1, A2, A3</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table">
                        <div class="table-title">Alimentos</div>
                        <div class="line"></div>
                        <table>
                            <tr>
                                <td>x1 Palomitas grandes</td>
                                <td>Mantequilla</td>
                                <td class="table-price">$70</td>
                            </tr>
                            <tr>
                                <td>x2 Soda</td>
                                <td>Mediana</td>
                                <td class="table-price">$25</td>
                            </tr>
                            <tr>
                                <td>x1 Nachos con queso</td>
                                <td>Jalapeños</td>
                                <td class="table-price">$25</td>
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