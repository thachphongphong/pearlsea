<h1 style="font-weight: 300">Có một khách hàng vừa gởi email liên hệ:</h1>
<form>
    <div>
        <label for="name">Họ tên</label>
        <label for="name"><?php echo e($data->name); ?></label>
    </div>
    <div>
        <label for="email">Email</label>
        <label for="email"><?php echo e($data->email); ?></label>
    </div>
    <div>
        <label for="title">Tiêu đề</label>
        <label for="title"><?php echo e($data->title); ?></label>
    </div>
    <div>
        <label for="content">Nội dung</label>
        <p><?php echo e($data->content); ?></p>
    </div>
</form>