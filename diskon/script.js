function Cek_Diskon() { 
    var harga = document.Diskon.harga.value; 
    var persen = document.Diskon.persen.value; 
    harga = parseInt(harga); 
    persen = parseInt(persen); 
    var hasil = harga * (persen/100); 
    hasil = harga - parseInt(hasil); 
    document.Diskon.hasil.value = hasil; 
}
