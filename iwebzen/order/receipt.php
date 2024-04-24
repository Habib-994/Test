<?php include __DIR__ . '/include/header.php'?>

<section class="page-title">
    <div class="container">
        <h1>Thank You</h1>      
    </div>
</section>

<section class="content-seq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row" style="display: flex;flex-wrap: wrap;">
                    <div class="col-md-12 form-pay pt ">
                        <div class="row col-xs-offset-2">
                            <div class="col-md-6">
                                <h4>Customer ID:</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?= getSessionValue('id', 'user_detail') ?></h4>
                            </div>
                        </div>
                        <div class="row col-xs-offset-2">
                            <div class="col-md-6">
                                <h4>Name:</h4>
                            </div>
                            <div class="col-md-6">
                                <h4> <?= getSessionValue('name', 'user_detail') ?></h4>
                            </div>
                        </div>
                        <div class="row col-xs-offset-2">
                            <div class="col-md-6">
                                <h4>Price:</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?= getSessionValue('priceText', 'package_detail') ?></h4>
                            </div>
                        </div>
                        <div class="row col-xs-offset-2">
                            <div class="col-md-6">
                                <h4>Package Name:</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?= getSessionValue('title', 'package_detail') ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/include/footer.php'?>

<?php
session_destroy();
?>