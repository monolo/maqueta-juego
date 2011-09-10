<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

        <link rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap-1.2.0.min.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
        <script>
            $(function(){
                
                $(".previous").click(function(){
                    
                    $("#slider").animate({'margin-left' : '0px'});
                });
                
                $(".next").click(function(){
                    
                    $("#slider").animate({'margin-left' : '-700px'});
                });
                
            })
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="cointainer">
            <div id="slider-wrapper">
                <ul id="slider">
                    <!-- Diapositiva 1 -->
                    <li class="slide">Diapositiva 1
                        <ul class="niveles">
                            <?php for ($i = 1; $i < 16; $i++): ?>
                                <li><button class="punch"><?= $i; ?></button></li>
                                <?php if ($i % 5 == 0): ?><div style="clear:both"></div><?php endif; ?>
                            <?php endfor; ?>    
                            <div style="clear:both"></div>

                        </ul>
                    </li>
                    <!-- Diapositiva 2 -->
                    <li class="slide">Diapositiva 2</li>
                    <!-- Diapositiva 3 -->
                    <li class="slide">Diapositiva 3</li>

                </ul>
                <a class="btn primary previous" href="#">Anterior</a>
                <a class="btn primary next" href="#">Siguiente</a>
            </div>


        </div>
    </body>
</html>
