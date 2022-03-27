$('#konversi').on('click', function(){
    var suhu = $('#nilai_suhu').val();
    const satuan_ke = $('#satuan_ke').val();

    var hasil = 0;

    if (suhu != "") {
        suhu = parseFloat(suhu);

        if (satuan_ke == "kelvin") {
            hasil = suhu + 273.15;
        } else if (satuan_ke == "fahrenheit") {
            hasil = (9/5*suhu) + 32;
        } else if (satuan_ke == "reamur") {
            hasil = (4/5*suhu);
        }

        $('#hasil').val(hasil);