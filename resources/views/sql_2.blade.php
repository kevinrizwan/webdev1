<!DOCTYPE html>
<html>

<body>

    <h2>Filter Bulan</h2>

    <p>Filter bulan dan customer</p>

    <form action="{{ route('sql.filter') }}" method="GET" class="form-group" id="formFilter">
        @csrf
        <label for="month">Pilih bulan</label>
        <select id="month" name="month">
            <option value="0" selected disabled> Pilih Bulan</option>
            <option value="01"> Januari</option>
            <option value="02"> Februari</option>
            <option value="03"> Maret</option>
            <option value="04"> April</option>
            <option value="05"> Mei</option>
            <option value="06"> Juni</option>
            <option value="07"> Juli</option>
            <option value="08"> Agustus</option>
            <option value="09"> September</option>
            <option value="10"> Oktober</option>
            <option value="11"> November</option>
            <option value="12"> Desember</option>
        </select>
        <input type="submit">
    </form>

</body>

</html>