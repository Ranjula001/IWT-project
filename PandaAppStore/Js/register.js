function onRegister(e) {
  let password = e.target.elements.password.value;
  let cPassword = e.target.elements.cpassword.value;
  if (password != cPassword) {
    e.preventDefault();
    alert("Passwords do not match!");
  }
}
