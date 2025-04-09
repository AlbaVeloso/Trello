<?php include("app/views/partials/menu.php") ?>
<br>
<div class="container">
    <h1>Customers list</h1>
    <a href="<?= base_url() ?>provider/new"><i class="fa-solid fa-plus"></i>New customer</a>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="text-end">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $customer) { ?>
                    <tr>
                        <th scope="row"><?= $customer->customer_id ?></th>
                        <td><?= $customer->name ?></td>
                        <td class="text-end">
                            <i class="fa-solid fa-user-pen"></i>
                            <a href="<?= base_url() ?>customer/delete/<?= $customer->customer_id ?>"><i
                                    class="fa-solid fa-trash"></i></a>
                            <a href="<?= base_url() ?>customer/show/<?= $customer->customer_id ?>"><i
                                    class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
        </table>
    </div>
</div>
<?php include("app/views/partials/footer.php") ?>