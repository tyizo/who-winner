var countDownDate = new Date("May 30, 2021 18:30:20").getTime();
var x = setInterval(function() {
  let counter = document.querySelector("#countdown");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  counter.innerHTML = days + " يوم " + hours + " ساعة "
  + minutes + " دقيقة " + seconds + " ثانية ";
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متأخرا !";
  }
}, 1000);

// winner

const win = document.querySelector('#winner')
const cards = document.querySelector('#cards')
var modal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard: false
})

win.addEventListener('click', () => {
    setTimeout( () => {
        modal.show();
    }, 1000)
//    myModal.show();
//    alert('test')
});


