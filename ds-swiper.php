<?php include '_header.php'; ?>


<div class="page default-layout page-name">

    <div class="ds-section">

        <div class="ds-title">
            <h1 class="text-center"> Swiper </h1>
        </div>

        <div class="container">

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> test 2 swiper ( id = test2 )</h3>

                <div class="swiper-slider-wrapper arrows-sides pagination-bottom card" style="border: 1px solid #ff000022">

                    <div class="swiper-container swiper-custom"
                        data-per-view="4"
                        data-per-view-md="3"
                        data-per-view-sm="2"
                        data-per-view-xs="1"
                        data-space-between="40"
                        data-next-button="test2-button-next"
                        data-prev-button="test2-button-prev"
                        data-pagination="test2-pagination">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 20) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="swiper-button-prev" id="test2-button-prev">
                        <i class="icon icon-arrow-circle-left"></i>
                    </div>

                    <div class="swiper-button-next" id="test2-button-next">
                        <i class="icon icon-arrow-circle-right"></i>
                    </div>

                    <div class="pagination-wrapper">
                        <div class="swiper-pagination" id="test2-pagination"></div>
                    </div>

                </div> <!-- swiper-slider-wrapper -->

            </div> <!-- ds-sub-section -->

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Default Values 1 swiper </h3>

                <div class="swiper-slider-wrapper arrows-sides card" style="border: 1px solid #ff000022">

                    <div class="swiper-container swiper-custom">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 20) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="swiper-button-prev">
                        <i class="icon icon-arrow-circle-left"></i>
                    </div>

                    <div class="swiper-button-next">
                        <i class="icon icon-arrow-circle-right"></i>
                    </div>

                </div> <!-- swiper-slider-wrapper -->

            </div> <!-- ds-sub-section -->

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Default Values 2 swiper </h3>

                <div class="swiper-slider-wrapper arrows-sides card" style="border: 1px solid #ff000022">

                    <div class="swiper-container swiper-custom">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 20) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="swiper-button-prev">
                        <i class="icon icon-arrow-circle-left"></i>
                    </div>

                    <div class="swiper-button-next">
                        <i class="icon icon-arrow-circle-right"></i>
                    </div>

                </div> <!-- swiper-slider-wrapper -->

            </div> <!-- ds-sub-section -->


 




        </div> <!-- container -->

    </div> <!-- ds-section -->



    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</div> <!-- page -->

<?php include '_footer.php'; ?>