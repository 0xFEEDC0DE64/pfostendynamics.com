<?php

define('PAGE_TITLE', 'Bobbybob');
define('ACTIVE_MENUITEM', 'bobbybob');

require('includes/header.php');
?>

<div class="container-fluid" style="max-width: 700px">
    <div class="row">
        <div class="col-sm">
            <div class="container-fluid disable-select">
                <div id="carousel" class="carousel slide disable-select" data-ride="carousel" data-interval="3500" style="border: 2px; border-style: ridge; border-color: gray; max-height: 300px">
                    <ol class="carousel-indicators disable-select">
                        <li data-target="#carousel" data-slide-to="0" class="active disable-select" draggable="false" ondragstart="return false;"></li>
                        <li class="disable-select" data-target="#carousel" data-slide-to="1" draggable="false" ondragstart="return false;"></li>
                        <li class="disable-select" data-target="#carousel" data-slide-to="2" draggable="false" ondragstart="return false;"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="max-height: 500px" class="d-block w-100 disable-select" src="/img/bobbybob/bob1.jpg" alt="First slide" draggable="false" ondragstart="return false;" />
                        </div>
                        <div class="carousel-item">
                            <img style="max-height: 500px" class="d-block w-100 disable-select" src="/img/bobbybob/bob2.jpg" alt="First slide" draggable="false" ondragstart="return false;" />
                        </div>
                        <div class="carousel-item">
                            <img style="max-height: 500px" class="d-block w-100 disable-select" src="/img/bobbybob/bob3.jpg" alt="First slide" draggable="false" ondragstart="return false;" />
                        </div>
                    </div>
                    <a class="carousel-control-prev disable-select" href="#carousel" role="button" data-slide="prev" draggable="false" ondragstart="return false;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next disable-select" href="#carousel" role="button" data-slide="next" draggable="false" ondragstart="return false;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm">Subtitle to pictures</div>
    </div>
</div>

<?php require('includes/footer.php'); ?>