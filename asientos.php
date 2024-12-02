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

                    <div class="seats-panel">
                        <div class="seat-box">
                            <!-- A1-A4 -->
                            <img id="A1" src="assets/svg/seats.svg" class="seat" data-id="A1">
                            <img id="A2" src="assets/svg/seats.svg" class="seat" data-id="A2">
                            <img id="A3" src="assets/svg/seats.svg" class="seat" data-id="A3">
                            <img id="A4" src="assets/svg/seats.svg" class="seat" data-id="A4">
                            <!-- B1-B4 -->
                            <img id="B1" src="assets/svg/seats.svg" class="seat" data-id="B1">
                            <img id="B2" src="assets/svg/seats.svg" class="seat" data-id="B2">
                            <img id="B3" src="assets/svg/seats.svg" class="seat" data-id="B3">
                            <img id="B4" src="assets/svg/seats.svg" class="seat" data-id="B4">
                            <!-- C1-C4 -->
                            <img id="C1" src="assets/svg/seats.svg" class="seat" data-id="C1">
                            <img id="C2" src="assets/svg/seats.svg" class="seat" data-id="C2">
                            <img id="C3" src="assets/svg/seats.svg" class="seat" data-id="C3">
                            <img id="C4" src="assets/svg/seats.svg" class="seat" data-id="C4">
                            <!-- D1-D4 -->
                            <img id="D1" src="assets/svg/seats.svg" class="seat" data-id="D1">
                            <img id="D2" src="assets/svg/seats.svg" class="seat" data-id="D2">
                            <img id="D3" src="assets/svg/seats.svg" class="seat" data-id="D3">
                            <img id="D4" src="assets/svg/seats.svg" class="seat" data-id="D4">
                            <!-- E1-E4 -->
                            <img id="E1" src="assets/svg/seats.svg" class="seat" data-id="E1">
                            <img id="E2" src="assets/svg/seats.svg" class="seat" data-id="E2">
                            <img id="E3" src="assets/svg/seats.svg" class="seat" data-id="E3">
                            <img id="E4" src="assets/svg/seats.svg" class="seat" data-id="E4">
                        </div>

                        <div class="seat-box">
                            <!--A5-A8-->
                            <img id="A5" src="assets/svg/seats.svg" class="seat" data-id="A5">
                            <img id="A6" src="assets/svg/seats.svg" class="seat" data-id="A6">
                            <img id="A7" src="assets/svg/seats.svg" class="seat" data-id="A7">
                            <img id="A8" src="assets/svg/seats.svg" class="seat" data-id="A8">
                            <!--B5-B8-->
                            <img id="B5" src="assets/svg/seats.svg" class="seat" data-id="B5">
                            <img id="B6" src="assets/svg/seats.svg" class="seat" data-id="B6">
                            <img id="B7" src="assets/svg/seats.svg" class="seat" data-id="B7">
                            <img id="B8" src="assets/svg/seats.svg" class="seat" data-id="B8">
                            <!--C5-C8-->
                            <img id="C5" src="assets/svg/seats.svg" class="seat" data-id="C5">
                            <img id="C6" src="assets/svg/seats.svg" class="seat" data-id="C6">
                            <img id="C7" src="assets/svg/seats.svg" class="seat" data-id="C7">
                            <img id="C8" src="assets/svg/seats.svg" class="seat" data-id="C8">
                            <!--D5-D8-->
                            <img id="D5" src="assets/svg/seats.svg" class="seat" data-id="D5">
                            <img id="D6" src="assets/svg/seats.svg" class="seat" data-id="D6">
                            <img id="D7" src="assets/svg/seats.svg" class="seat" data-id="D7">
                            <img id="D8" src="assets/svg/seats.svg" class="seat" data-id="D8">
                            <!--E5-E8-->
                            <img id="E5" src="assets/svg/seats.svg" class="seat" data-id="E5">
                            <img id="E6" src="assets/svg/seats.svg" class="seat" data-id="E6">
                            <img id="E7" src="assets/svg/seats.svg" class="seat" data-id="E7">
                            <img id="E8" src="assets/svg/seats.svg" class="seat" data-id="E8">
                        </div>
                        <div class="seat-box">
                            <!--A9-A12-->
                            <img id="A9" src="assets/svg/seats.svg" class="seat" data-id="A9">
                            <img id="A10" src="assets/svg/seats.svg" class="seat" data-id="A10">
                            <img id="A11" src="assets/svg/seats.svg" class="seat" data-id="A11">
                            <img id="A12" src="assets/svg/seats.svg" class="seat" data-id="A12">
                            <!--B9-B12-->
                            <img id="B9" src="assets/svg/seats.svg" class="seat" data-id="B9">
                            <img id="B10" src="assets/svg/seats.svg" class="seat" data-id="B10">
                            <img id="B11" src="assets/svg/seats.svg" class="seat" data-id="B11">
                            <img id="B12" src="assets/svg/seats.svg" class="seat" data-id="B12">
                            <!--C9-C12-->
                            <img id="C9" src="assets/svg/seats.svg" class="seat" data-id="C9">
                            <img id="C10" src="assets/svg/seats.svg" class="seat" data-id="C10">
                            <img id="C11" src="assets/svg/seats.svg" class="seat" data-id="C11">
                            <img id="C12" src="assets/svg/seats.svg" class="seat" data-id="C12">
                            <!--D9- 12-->
                            <img id="D9" src="assets/svg/seats.svg" class="seat" data-id="D9">
                            <img id="D10" src="assets/svg/seats.svg" class="seat" data-id="D10">
                            <img id="D11" src="assets/svg/seats.svg" class="seat" data-id="D11">
                            <img id="D12" src="assets/svg/seats.svg" class="seat" data-id="D12">
                            <!--E9-E12-->
                            <img id="E9" src="assets/svg/seats.svg" class="seat" data-id="E9">
                            <img id="E10" src="assets/svg/seats.svg" class="seat" data-id="E10">
                            <img id="E11" src="assets/svg/seats.svg" class="seat" data-id="E11">
                            <img id="E12" src="assets/svg/seats.svg" class="seat" data-id="E12">
                        </div>

                        <div class="seat-box">
                            <!--A13-A16-->
                            <img id="A13" src="assets/svg/seats.svg" class="seat" data-id="A13">
                            <img id="A14" src="assets/svg/seats.svg" class="seat" data-id="A14">
                            <img id="A15" src="assets/svg/seats.svg" class="seat" data-id="A15">
                            <img id="A16" src="assets/svg/seats.svg" class="seat" data-id="A16">
                            <!--B13-B16-->
                            <img id="B13" src="assets/svg/seats.svg" class="seat" data-id="B13">
                            <img id="B14" src="assets/svg/seats.svg" class="seat" data-id="B14">
                            <img id="B15" src="assets/svg/seats.svg" class="seat" data-id="B15">
                            <img id="B16" src="assets/svg/seats.svg" class="seat" data-id="B16">
                            <!--C13-C16-->
                            <img id="C13" src="assets/svg/seats.svg" class="seat" data-id="C13">
                            <img id="C14" src="assets/svg/seats.svg" class="seat" data-id="C14">
                            <img id="C15" src="assets/svg/seats.svg" class="seat" data-id="C15">
                            <img id="C16" src="assets/svg/seats.svg" class="seat" data-id="C16">
                            <!--D13-D16-->
                            <img id="D13" src="assets/svg/seats.svg" class="seat" data-id="D13">
                            <img id="D14" src="assets/svg/seats.svg" class="seat" data-id="D14">
                            <img id="D15" src="assets/svg/seats.svg" class="seat" data-id="D15">
                            <img id="D16" src="assets/svg/seats.svg" class="seat" data-id="D16">
                            <!--E13-E16-->
                            <img id="E13" src="assets/svg/seats.svg" class="seat" data-id="E13">
                            <img id="E14" src="assets/svg/seats.svg" class="seat" data-id="E14">
                            <img id="E15" src="assets/svg/seats.svg" class="seat" data-id="E15">
                            <img id="E16" src="assets/svg/seats.svg" class="seat" data-id="E16">
                        </div>
                    </div>
                    <div class="screen">
                        Pantalla
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
                        <div id="selected-title" class="summary-title"></div>
                        <div class="summary-details">60 min ESP</div>
                        <div id="selected-time" class="summary-date"></div>
                    </div>
                    <div class="table">
                        <div class="table-title">Tickets</div>
                        <div class="line"></div>
                        <table id="tickets-table">
                            <tbody>
                                <!-- Las filas se generarán dinámicamente desde tickets.js -->
                            </tbody>
                        </table>
                    </div>
                    <div class="table">
                        <div class="table-title">Asientos</div>
                        <div class="line"></div>
                        <table id="seats-table">
                            <tbody id="seats-table-tbody">
                                <!-- Las filas se generarán dinámicamente desde asientos.js -->
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