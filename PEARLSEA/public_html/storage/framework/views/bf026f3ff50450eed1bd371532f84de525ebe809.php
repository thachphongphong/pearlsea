<table class="table table-hover table-bordered table-condensed">
    <thead>
    <tr class="success">
        <th>Booking id</th>
        <th>Phòng</th>
        <th>Người đặt</th>
        <th>Email</th>
        <th>Điện thoại</th>
        <th>Check in</th>
        <th>Check out</th>
        <th>Chỉnh sửa</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0; ?>

    <?php foreach($booking_rooms as $booking_room): ?>
        <?php $i++;?>
        <?php if($i%2==1): ?>
            <tr class="info">
        <?php else: ?>
            <tr>
                <?php endif; ?>
                <td><b><?php echo e($booking_room->booking_id); ?></b></td>
                <td><?php echo e($booking_room->room->name); ?></td>
                <td><?php echo e($booking_room->full_name); ?></td>
                <td><?php echo e($booking_room->email); ?></td>
                <td><?php echo e($booking_room->phone); ?></td>
                <td><?php echo e(date('d-m-Y', strtotime($booking_room->check_in))); ?></td>
                <td><?php echo e(date('d-m-Y', strtotime($booking_room->check_out))); ?></td>

                <td><input type="button" class="btn btn-danger" value="Xóa" onclick="delete_bookings(<?php echo e($booking_room->id); ?>);"/></td>
            </tr>
            <?php endforeach; ?>

    </tbody>
</table>
<div>
    <div style="text-align:center;" class="booking"><?php echo e($booking_rooms->links()); ?></div>
</div>
