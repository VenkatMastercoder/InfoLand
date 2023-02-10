const auth = firebase.auth();

const signInSection = document.getElementById("signInsection");
const signoutSection = document.getElementById("signOutSection");
const HeadingChange = document.getElementById("changehead");


const btncreate = document.getElementById("btn_create");
const btnsignIn = document.getElementById("btn_sign");
const btnsignOut = document.getElementById("btn_signOut");

const emailEle = document.getElementById("txt_userEmail");
const passEle = document.getElementById("txt_userPassword");
const messageEle = document.getElementById("message");



function g() {
  document.getElementById("z").textContent = "Welcome";
}


btncreate.onclick = () => {
  console.log("running");
  var email = emailEle.value;
  var password = passEle.value;
  HeadingChange.textContent = "Sign in";
  auth.createUserWithEmailAndPassword(email, password)
  .then(() => {
    
    messageEle.innerHTML = "Sucessfully Created Account";
    messageEle.hidden = false;

  }).catch((error) => {
    messageEle.innerHTML = error.message;
    messageEle.hidden = false;
  });


}

btnsignIn.onclick = () => {
  var email = emailEle.value;
  var password = passEle.value;
  auth.signInWithEmailAndPassword(email, password)
  .then(() => {
    // Signed in
    signInSection.hidden = true;
    signoutSection.hidden = false;
    messageEle.hidden = false;
    // ...
  })
  .catch((error) => {
    messageEle.hidden = false;
    messageEle.innerHTML = error.message;
  });
}

btnsignOut.onclick = () => {
    auth.signOut();

    btnsignOut.href="./index1.html";

}
