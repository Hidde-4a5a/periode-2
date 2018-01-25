  window.addEventListener('keydown',  function playSound(e) {

    const audio = document.querySelector ('audio[data-key="'+e.keyCode+'"]');

    if (!audio) return;

    audio.currentTime = 0;
    audio.play();
  });


// for (i = 0; i < key.length; i++) {
// window.addEventListener('keyup', function (document.querySelector('audio[data-key="'i'"]')) {
//   var audio = new Audio(document.querySelector('audio[src="'i'"]'));
//   audio.play();
//   }, false);
// };


//a
// window.addEventListener('keyup', function (e) {
//   if (e.keyCode === 65) {
//         var audio = new Audio('clap.wav');
//         audio.play();
//     } else if (e.keyCode === 83) {
//         var audio = new Audio('hihat.wav');
//         audio.play();
//     } else if (e.keyCode === 68) {
//         var audio = new Audio('kick.wav');
//         audio.play();
//     } else if (e.keyCode === 70) {
//         var audio = new Audio('openhat.wav');
//         audio.play();
//     } else if (e.keyCode === 71) {
//         var audio = new Audio('boom.wav');
//         audio.play();
//     } else if (e.keyCode === 72) {
//         var audio = new Audio('ride.wav');
//         audio.play();
//     } else if (e.keyCode === 74) {
//         var audio = new Audio('snare.wav');
//         audio.play();
//     } else if (e.keyCode === 75) {
//         var audio = new Audio('tom.wav');
//         audio.play();
//     } else if (e.keyCode === 76) {
//         var audio = new Audio('tink.wav');
//         audio.play();
//     }
//
//   }, false);
