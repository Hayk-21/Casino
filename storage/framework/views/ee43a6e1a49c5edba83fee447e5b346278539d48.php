<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/rafflehistory.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="content" style="align-items: unset;" id="desktop_table">
    <h1 class="account_heading">Raffles History</h1>

    <table class="raffles_history_table_data">
        <thead>
            <tr>
                <th colspan="5">
                    <div style="display: flex; justify-content: space-around; align-items: center;">
                        <span style="width: 5%;">ID</span>
                        <span style="width: 25%; ">Winner</span>
                        <span style="width: 26%; display: flex; justify-content: center; align-items: center;">Win
                            amount <img src="<?php echo e(asset("assets/img/rafflehistory/green_oval (1).png")); ?>" alt=""
                                style="margin: 0 12px 0 12px"></span>
                        <span style="width: 23%;">Tickets purchased</span>
                        <span style="width: 21%; display: flex; justify-content: center; align-items: center;">Completed
                            <img src="<?php echo e(asset("assets/img/topwins/Sort_arrow.png")); ?>" alt="" style="margin: 0 12px "></span>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1786</td>
                <td>Bacarat</td>
                <td>1.00</td>
                <td>1786</td>
                <td><span style="margin: 0 0 0 14px">2 days ago</span><img src="<?php echo e(asset("assets/img/topwins/green_oval (2).png")); ?>"
                        alt="" style="margin: 0 0 0 5vw"></td>

            </tr>
        </tbody>
    </table>

    <div class="container_pagination">

        <ul class="pagination">
            <li><a href="<?php echo e(route("frontend.raffle.index")); ?>" style="display: inline; text-align: left;">
                    <img src="<?php echo e(asset("assets/img/rafflehistory/Green_arrow_left_button.png")); ?>" alt=""></a></li>
            <li><a href="#">
                    <</li> <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">></a></li>
        </ul>
    </div>
</div>

<!-- table for mobile  -->
<!-- table mobile -->
<div class="content" style="align-items: unset;" id="mobile_table">
    <h1 class="account_heading">Raffle History</h1>

    <!-- table mobile -->
    <div class="cube_for_mobile" id="main_table_mobile">
        <div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
                <div>ID</div>
                <div>Winner</div>
                <div style="display: flex; justify-content: center; align-items: center;">Win amount<img
                        src="<?php echo e(asset("assets/img/rafflehistory/green_oval (1).png")); ?>" alt="" style="margin: 0 12px 0 12px"></div>
                <div>Tickets purchased</div>
                <div>Completed</div>
            </div>
            <div style="display: flex; justify-content: end; flex-direction: column; text-align: right;"
                id="info_right">
                <div style=" color: #6BA939;">1786</div>
                <div style="color: #FFD400;">Bacarat</div>
                <div>1.00</div>
                <div>1786</div>
                <div style="display: flex; justify-content: right; align-items: center;"><span>2 days ago</span>
                    <img src="<?php echo e(asset("assets/img/account/green_oval (2).png")); ?>" alt="" style="margin: 0 0 0 4vw">
                </div>
            </div>
        </div>

    </div>
    <div class="cube_for_mobile" id="main_table_mobile">
        <div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
                <div>ID</div>
                <div>Winner</div>
                <div style="display: flex; justify-content: center; align-items: center;">Win amount<img
                        src="<?php echo e(asset("assets/img/rafflehistory/green_oval (1).png")); ?>" alt="" style="margin: 0 12px 0 12px"></div>
                <div>Tickets purchased</div>
                <div>Completed</div>
            </div>
            <div style="display: flex; justify-content: end; flex-direction: column; text-align: right;"
                id="info_right">
                <div style=" color: #6BA939;">1786</div>
                <div style="color: #FFD400;">Bacarat</div>
                <div>1.00</div>
                <div>1786</div>
                <div style="display: flex; justify-content: right; align-items: center;"><span>2 days ago</span>
                    <img src="<?php echo e(asset("assets/img/account/green_oval (2).png")); ?>" alt="" style="margin: 0 0 0 4vw">
                </div>
            </div>
        </div>


    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>