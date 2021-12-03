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
