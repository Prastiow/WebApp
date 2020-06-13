function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function showLetter(item, selectedIndex) {
  var selectedIndex = selectedIndex ? selectedIndex : 0
  var demo_input = document.getElementById('placetextheader');

  if (selectedIndex <= item.length) {
    var currentIndex = selectedIndex++;
    demo_input.textContent = item.substr(0, currentIndex);
    await sleep(50);
    showLetter(item, selectedIndex);
  }
};

async function typeLetter() {
  // var demo_input = document.getElementById('placetextheader')[0];

  var items = [
    "Dibuat oleh Gusrifaris Yuda Alhafis",
    "Teknik Informatika UIN SUSKA RIAU",
    "Selamat Datang di Sistem Informasi Provinsi Riau"
  ];

  for (var i = 0; i < items.length; i++) {
    var selectedItem = items[i];

    await sleep(2000);
    showLetter(selectedItem)
  }
}

typeLetter();

$(document).ready(function () {
  $('.btn-hide-show').click(function () {
    let typeInputSaatIni = $('.inputPassword').attr('type');
    if (typeInputSaatIni == "password") {
      $('.inputPassword').attr('type', 'text');
      $(this).removeClass('fa-eye-slash');
      $(this).addClass('fa-eye');
      $(this).attr('title', 'Hide Password');
    } else if (typeInputSaatIni == "text") {
      $('.inputPassword').attr('type', 'password');
      $(this).removeClass('fa-eye');
      $(this).addClass('fa-eye-slash');
      $(this).attr('title', 'Show Password');
    }
  })
})
