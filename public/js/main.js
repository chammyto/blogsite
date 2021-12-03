"use strict";

function openNav() {
    document.getElementById("reychamNav").style.height = "100%";
  }
  
  function closeNav() {
    document.getElementById("reychamNav").style.height = "0%";
  }

function removeLocationHash(){
    var noHashURL = window.location.href.replace(/#.*$/, '');
    window.history.replaceState('', document.title, noHashURL) 
  }
  window.addEventListener("popstate", function(event){
      removeLocationHash();
  });
  window.addEventListener("hashchange", function(event){
      event.preventDefault();
      removeLocationHash();
  });
  window.addEventListener("load", function(){
      removeLocationHash();
  });

  function downloadConfirm(){
    alert("Thank you for downloading my resume.")
}
function onfocusFunction(a) {
a.style.background = "#18191a"; //black
}
function onfocusoutFunction(x) {
x.style.background = "#343a40"; //grey
}

function oninvalidFunction(){
  alert('You must fill out the form!');
};
//inig submit sa form nga validated na
function onsubmitFunction() {
  alert("Thanks for sending me an email. I'll get back to you as soon as possbile.");
};
