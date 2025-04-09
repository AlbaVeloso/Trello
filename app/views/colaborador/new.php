<?php include("app/views/partials/menu.php") ?>

<h3>New Customer</h3>
<form action="" method="post">
    <div class="form-row">
        <div class="form-group col-12">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Customer name">
        </div>
        <div class="form-group col-12">
            <label for="street">Address</label>
            <input name="street" type="text" class="form-control" id="street" placeholder="1234 Main St">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Zip Code</label>
        <input name="zip_code" type="number" class="form-control" id="zipcode" placeholder="Zip Code">
    </div>
    <div class="row">
        <div class="form-group col-md-6 col-sm-12">
            <label for="inputCity">City</label>
            <input name="city" type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="inputState">Country</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option value="Andorra">Andorra</option>
                <option value="Albania">Albania</option>
                <option value="Austria">Austria</option>
                <option value="Bielorrusia">Bielorrusia</option>
                <option value="Bélgica">Bélgica</option>
                <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Croacia">Croacia</option>
                <option value="Chipre">Chipre</option>
                <option value="República Checa">República Checa</option>
                <option value="Dinamarca">Dinamarca</option>
                <option value="Estonia">Estonia</option>
                <option value="Finlandia">Finlandia</option>
                <option value="Francia">Francia</option>
                <option value="Alemania">Alemania</option>
                <option value="Grecia">Grecia</option>
                <option value="Hungría">Hungría</option>
                <option value="Islandia">Islandia</option>
                <option value="Irlanda">Irlanda</option>
                <option value="Italia">Italia</option>
                <option value="Letonia">Letonia</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lituania">Lituania</option>
                <option value="Luxemburgo">Luxemburgo</option>
                <option value="Malta">Malta</option>
                <option value="Moldavia">Moldavia</option>
                <option value="Mónaco">Mónaco</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Países Bajos">Países Bajos</option>
                <option value="Macedonia del Norte">Macedonia del Norte</option>
                <option value="Noruega">Noruega</option>
                <option value="Polonia">Polonia</option>
                <option value="Portugal">Portugal</option>
                <option value="Rumania">Rumania</option>
                <option value="Rusia">Rusia</option>
                <option value="San Marino">San Marino</option>
                <option value="Serbia">Serbia</option>
                <option value="Eslovaquia">Eslovaquia</option>
                <option value="Eslovenia">Eslovenia</option>
                <option value="España">España</option>
                <option value="Suecia">Suecia</option>
                <option value="Suiza">Suiza</option>
                <option value="Turquía">Turquía</option>
                <option value="Ucrania">Ucrania</option>
                <option value="Reino Unido">Reino Unido</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="phonenumber">Phone number</label>
        <input name="phonenumber" type="number" class="form-control" id="phonenumber" placeholder="Phone Number">
    </div>

    <button type="submit" class="btn col-12 btn-primary">Save</button>
</form>
<?php include("app/views/partials/footer.php") ?>