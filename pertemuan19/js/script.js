// ambil dlu elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tombolCari.addEventListener('click', function(){
//     alert('berhasil');
// })

// tambahkan event ketika keyword diketik
keyword.addEventListener('keyup',function(){
    // console.log(keyword.value);

    var xhr = new XMLHttpRequest();
    // mengecek kesiapan ajax
    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200){
            // console.log(xhr.responseText);
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
})