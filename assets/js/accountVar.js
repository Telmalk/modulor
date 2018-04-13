var account = document.querySelector('.userImg');
var loginOverlay = document.querySelector('.loginOverlay');

// login

account.addEventListener('click', function(){
  loginOverlay.classList.toggle('visible');
});
