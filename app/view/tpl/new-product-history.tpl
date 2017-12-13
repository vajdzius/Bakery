<div style="text-align: center;">
<form method="POST" action="?view=product-history&action=create">

    <div>Data :</div>
    <input type="date" name="date"> <br>

    <div>Prekė :</div>
    <select name="product_id">
    [@productOptions]
    </select>

    <div>Vakarikštis likutis :</div>
    <input type="number" name="initial"> <br>

    <div>Pagaminta :</div>
    <input type="number" name="produced"> <br>

    <div>Parduota :</div>
    <input type="number" name="damaged"> <br>

    <div>Sugadinta :</div>
    <input type="number" name="sold"> <br>

    <div>Galutinis likutis :</div>
    <input type="number" name="closed"> <br>

    <input type="submit" value="Išsaugoti duomenis">

</form>
</div>