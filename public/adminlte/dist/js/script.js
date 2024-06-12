let phoneInput = document.querySelector(".input-phone");


const phoneMask = new IMask(phoneInput, {
  mask: "+{7}(000)000-00-00",
});
