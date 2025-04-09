<?php include("app/views/partials/menu.php") ?>
<br>
<div class="container">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <?= $data->name ?>
            </h2>

        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Direcciones
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Street</th>
                                <th scope="col">City</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->addresses as $key => $address) { ?>
                                <tr>
                                    <th scope="row"><?= $address->address_id ?></th>
                                    <td><?= $address->street ?></td>
                                    <td><?= $address->city ?></td>
                                    <td><?= $address->zip_code ?></td>
                                    <td><?= $address->country ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Telefonos
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->phones as $key => $phone) { ?>
                                <tr>
                                    <th scope="row"><?= $phone->phone_id ?></th>
                                    <td><?= $phone->number ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("app/views/partials/footer.php") ?>