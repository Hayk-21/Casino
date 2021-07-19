$(document).ready(function () {
  if ($('#banner').length) {
    $('#banner').owlCarousel({
      stagePadding: 175,
      loop: true,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        320: {
          items: 1,
          stagePadding: 0,
        },
        1024: {
          items: 1,
          stagePadding: 100,
        },
        1200: {
          items: 1,
          stagePadding: 175
        }
      }
    })
  }
  if ($('#leaderboard__mobile').length) {
    $('#leaderboard__mobile').owlCarousel({
      loop: false,
      items: 1,
      stagePadding: 0,
      margin: 20,
      dots: false,
    })
  }
  if ($('#leaderboard').length) {
    $('#leaderboard').DataTable({
      ordering: false,
      language: {
        paginate: {
          next: '&rsaquo;',
          previous: '&lsaquo;'
        }
      }
    });
  }
  if ($('#wins__mobile').length) {
    $('#wins__mobile').owlCarousel({
      loop: false,
      items: 1,
      stagePadding: 0,
      margin: -50,
      dots: false,
      responsive: {
        320: {
          items: 1,
          stagePadding: 20,
        },
        480: {
          items: 2,
          // stagePadding:100
        }
      }
    })
  }
});
$(function () {
  $('img').lazy();
});
$('.hamburger').on('click', function () {
  $(this).hide();
  $('.close').show();
  $('.content').addClass('no-overflow');
  $('.main__wrapper').addClass('no-overflow');
  $('.header__mobile').show();
})
$('.close').on('click', function () {
  $(this).hide();
  $('.hamburger').show();
  $('.content').removeClass('no-overflow');
  $('.main__wrapper').removeClass('no-overflow');
  $('.header__mobile').hide();
})
$('.anchordropdown').on('click', function (e) {
  e.preventDefault();
  $(this).next().toggle(300);
})

$('.payment-navbar button').click(function () {
  $("button").removeClass('btn-active-green');
  $(this).addClass('btn-active-green');
});


$('.payment-deposit button').click(function () {
  $("button").removeClass('deposit-btn-active-white');
  $(this).addClass('deposit-btn-active-white');
});


// account page negative numbers check code 
$(document).ready(function () {
  $('.amount_negative_number_check').each(function () {
    console.log($(this).text())
    let number = Math.sign(Number($(this).text()))
    if (number < 0) {
      $(this).css("color", "#FF2929");
    } else {
      $(this).css("color", "#6BA939");
    }
  })
})

// copy button function


var copyText = $("#myInput");



function myFunction() {
  var copyText = $("#myInput");

  copyText.select();
  console.log(copyText.select())
  // var c = copyText.setSelectionRange(0, 99999); /* For mobile devices */

  document.execCommand("copy");
}
if ($(".deposit-amount-input").length) {
  document.querySelector(".deposit-amount-input").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
      evt.preventDefault();
    }
  })
}



function getValue(input) {
  const value = document.getElementById(input);
  value.select();
  document.execCommand("copy");
}


function openCompleteDeposit() {
  const paymentAmount = document.getElementById("payment-amount").value;
  const selectedValue = document.getElementsByClassName("custom-select")[0].value;
  document.getElementsByClassName("payment-deposit-block")[0].style.display = "none";
  document.getElementsByClassName("deposit-complete")[0].style.display = "block";
  document.getElementById("deposit-amount-input").value = paymentAmount;
  document.getElementsByClassName("select-button")[0].innerText = selectedValue;
}


function metamaskButton(button) {
  const option = document.getElementById('custom-select').getElementsByTagName('option');
  if (button === 'metamask' && !document.getElementById('custom-select').disabled) {
    document.getElementById('custom-select').style.backgroundImage = 'none';
    document.getElementById('custom-select').style.textAlignLast = 'center';
    document.getElementById('custom-select').disabled = true;
    for (let i = option.length - 1; i >= 0; i--) {
      option[i].style.display = 'none';
    }
    option[0].innerText = "ETH";
  } else if (button !== 'metamask' && document.getElementById('custom-select').disabled) {
    document.getElementById('custom-select').style.backgroundImage = `url("data:image/svg+xml;utf8,<svg fill='%23538c31' viewBox='0 0 24 24' width='40' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>")`;
    document.getElementById('custom-select').style.textAlignLast = 'unset';
    document.getElementById('custom-select').disabled = false;
    for (let i = option.length - 1; i >= 0; i--) {
      option[i].style.display = 'block';
    }
    option[0].innerText = "BCH"
  }
}

$('.acc-dropdown').on('click', function () {
  console.log('aa')
  $('.acc-dropdown .dropdown').toggleClass('flex')
})
$('.no-flex button').on('click', function () {
  $(this).next().toggleClass('flex')
  $(this).toggleClass('no-border')
})
if ($('#range').length) {
  document.getElementById("range").oninput = function () {
    var value = (this.value - this.min) / (this.max - this.min) * 100
    this.style.background = 'linear-gradient(to right, #7C9722 ' + value + '%, #141414 ' + value + '%)'
  };
}
window.onclick = function (e) {
  if (e.target.id !== 'usernamedrop') {
    $('.acc-dropdown .dropdown').removeClass('flex')
  }
}