var c=document.getElementById('canvas'),
$ = c.getContext('2d'),
w = c.width = window.innerWidth,
h = c.height = window.innerHeight,
t = 0, num = 500, u=0, _u,
s, a, b, 
x, y, _x, _y,
_t = 1 / 60;

var anim = function() {
$.globalCompositeOperation = 'source-over';
$.fillStyle = 'hsla(0, 0%, 0%, .6)';
$.fillRect(0, 0, w, h);
$.globalCompositeOperation = 'lighter';

for (var i = 0; i < 1; i++) {
  x = 0; _u = (u/2) +i;
  $.beginPath();
  for (var j = 0; j < num; j++) {
    x += .55 * Math.sin(11);
    y = x * Math.sin(i + 3.5 * t + x /40) / 2;
    _x = x * Math.cos(b) - y * Math.sin(b);
    _y = x * Math.sin(b) + y * Math.cos(b);
    b = (j+1) * Math.PI / 2;
    $.lineWidth = .12;
    $.lineTo(w / 2- _x, h / 2 -_y);
  }
  var g = $.createLinearGradient(w  + _x, h  + _y,1, w  + _x, h  + _y);
  g.addColorStop(0.1, 'hsla('+u+',100%,50%,1)');
  g.addColorStop(0.5, 'hsla('+_u+',95%,50%,1)');
  g.addColorStop(1, 'hsla(0,0%,25%,1)'); 
  $.strokeStyle = g;
  $.stroke();
}

t += _t;
u-=.2;
window.requestAnimationFrame(anim);
};
anim();

window.addEventListener('resize', function() {
c.width = w = window.innerWidth;
c.height = h = window.innerHeight;
}, false);



const elts = {
  text1: document.getElementById("text1"),
  text2: document.getElementById("text2")
};

const texts = [
  "À propos",
  "Source D'art It Service"
  
];

const morphTime = 1;
const cooldownTime = 1.5;

let textIndex = texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.innerHTML = texts[textIndex % texts.length];
elts.text2.innerHTML = texts[(textIndex + 1) % texts.length];

function doMorph() {
  morph -= cooldown;
  cooldown = 0;

  let fraction = morph / morphTime;

  if (fraction > 1) {
      cooldown = cooldownTime;
      fraction = 1;
  }

  setMorph(fraction);
}

function setMorph(fraction) {
  elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  fraction = 1 - fraction;
  elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  elts.text1.innerHTML = texts[textIndex % texts.length];
  elts.text2.innerHTML = texts[(textIndex + 1) % texts.length];
}

function doCooldown() {
  morph = 0;

  elts.text2.style.filter = "";
  elts.text2.style.opacity = "100%";

  elts.text1.style.filter = "";
  elts.text1.style.opacity = "0%";
}

function animate() {
  requestAnimationFrame(animate);

  let newTime = new Date();
  let shouldIncrementIndex = cooldown > 0;
  let dt = (newTime - time) / 1000;
  time = newTime;

  cooldown -= dt;

  if (cooldown <= 0) {
      if (shouldIncrementIndex) {
          textIndex++;
      }

      doMorph();
  } else {
      doCooldown();
  }
}

animate();



