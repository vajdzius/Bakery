<div style="text-align: center;">
    <form method="POST" action="?view=product&action=update&id=[@id]" enctype="multipart/form-data">

        <div>EAN :</div>
        <input type="number" name="ean" value="[@ean]"> <br>

        <div>Mato vienetas:</div>
        <select name="unit">
            <option value="KG" [@unit_KG]>KG</option>
            <option value="PCS" [@unit_PCS]>VNT</option>
        </select> <br>

        <div>Pavadinimas:</div>
        <input type="text" name="name" value="[@name]"> <br>

        <div>Svoris:</div>
        <input type="number" step="0.001" name="weight" value="[@weight]"> <br>

        <div>Savikaina:</div>
        <input type="number" step="0.001" name="prime_cost" value="[@prime_cost]"> <br>

        <div>Pardavimo kaina:</div>
        <input type="number" step="0.001" name="sales_price" value="[@sales_price]"><br>

        <div>Nuotrauka:</div>
        <input type="text" disabled name="picture" value="[@picture]"><br>

        <input type="submit" class="btn ro" value="Atnaujinti duomenis">
    </form>
</div>/