var alat = ["Buku Tulis", "Pensil", "Spidol"];

for (var i = 0; i < alat.length; i++) {
  document.write("<li>" + alat[i] + "</li>");
}

function getNama() {
  alat.push(document.getElementById("barang").value);
}
