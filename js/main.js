window.onload = function() {
  Particles.init({ options });
};

// e.g.
window.onload = function() {
  Particles.init({
    selector: '#myCanvas',
    color: '#0f9976',
    connectParticles: true
  });
};

$("#zero").modal('show').css({
    'margin-left': function () { //Horizontal centering
        return -($(this).width() / 3.5);
    }
});