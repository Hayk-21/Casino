$(document).ready(function(){$("#banner").length&&$("#banner").owlCarousel({stagePadding:175,loop:!0,margin:20,autoplay:!0,autoplayTimeout:3e3,responsive:{320:{items:1,stagePadding:0},1024:{items:1,stagePadding:100},1200:{items:1,stagePadding:175}}}),$("#leaderboard__mobile").length&&$("#leaderboard__mobile").owlCarousel({loop:!1,items:1,stagePadding:0,margin:20,dots:!1}),$("#leaderboard").length&&$("#leaderboard").DataTable({ordering:!1,language:{paginate:{next:"&rsaquo;",previous:"&lsaquo;"}}}),$("#wins__mobile").length&&$("#wins__mobile").owlCarousel({loop:!1,items:1,stagePadding:0,margin:-50,dots:!1,responsive:{320:{items:1,stagePadding:20},480:{items:2}}})}),$(function(){$("img").lazy()}),$(".hamburger").on("click",function(){$(this).hide(),$(".close").show(),$(".content").addClass("no-overflow"),$(".main__wrapper").addClass("no-overflow"),$(".header__mobile").show()}),$(".close").on("click",function(){$(this).hide(),$(".hamburger").show(),$(".content").removeClass("no-overflow"),$(".main__wrapper").removeClass("no-overflow"),$(".header__mobile").hide()}),$(".anchordropdown").on("click",function(e){e.preventDefault(),$(this).next().toggle(300)}),$(".payment-navbar button").click(function(){$("button").removeClass("btn-active-green"),$(this).addClass("btn-active-green")}),$(".payment-deposit button").click(function(){$("button").removeClass("deposit-btn-active-white"),$(this).addClass("deposit-btn-active-white")}),$(document).ready(function(){$(".amount_negative_number_check").each(function(){console.log($(this).text()),Math.sign(Number($(this).text()))<0?$(this).css("color","#FF2929"):$(this).css("color","#6BA939")})});var copyText=$("#myInput");function myFunction(){var e=$("#myInput");e.select(),console.log(e.select()),document.execCommand("copy")}function getValue(e){const t=document.getElementById(e);t.select(),document.execCommand("copy")}function openCompleteDeposit(){var e=document.getElementById("payment-amount").value,t=document.getElementsByClassName("custom-select")[0].value;document.getElementsByClassName("payment-deposit-block")[0].style.display="none",document.getElementsByClassName("deposit-complete")[0].style.display="block",document.getElementById("deposit-amount-input").value=e,document.getElementsByClassName("select-button")[0].innerText=t}function metamaskButton(e){const t=document.getElementById("custom-select").getElementsByTagName("option");if("metamask"!==e||document.getElementById("custom-select").disabled){if("metamask"!==e&&document.getElementById("custom-select").disabled){document.getElementById("custom-select").style.backgroundImage=`url("data:image/svg+xml;utf8,<svg fill='%23538c31' viewBox='0 0 24 24' width='40' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>")`,document.getElementById("custom-select").style.textAlignLast="unset",document.getElementById("custom-select").disabled=!1;for(let e=t.length-1;0<=e;e--)t[e].style.display="block";t[0].innerText="BCH"}}else{document.getElementById("custom-select").style.backgroundImage="none",document.getElementById("custom-select").style.textAlignLast="center",document.getElementById("custom-select").disabled=!0;for(let e=t.length-1;0<=e;e--)t[e].style.display="none";t[0].innerText="ETH"}}$(".deposit-amount-input").length&&document.querySelector(".deposit-amount-input").addEventListener("keypress",function(e){(8!=e.which&&0!=e.which&&e.which<48||57<e.which)&&e.preventDefault()}),$(".acc-dropdown").on("click",function(){console.log("aa"),$(".acc-dropdown .dropdown").toggleClass("flex")}),$(".no-flex button").on("click",function(){$(this).next().toggleClass("flex"),$(this).toggleClass("no-border")}),$("#range").length&&(document.getElementById("range").oninput=function(){var e=(this.value-this.min)/(this.max-this.min)*100;this.style.background="linear-gradient(to right, #7C9722 "+e+"%, #141414 "+e+"%)"}),window.onclick=function(e){"usernamedrop"!==e.target.id&&$(".acc-dropdown .dropdown").removeClass("flex")};