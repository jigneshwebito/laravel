let isFirstClickForRotation = true;
let isFirstClickForTweenMax = true;
let isFirstClickForTetris = true;
let abcd = false;

// // first Circle
let a = 2;
$(document).ready(function () {
  var radius = 200;
  var fields = $(".item_Dot");
  // var container = $(".firstCircle"); // Don't remove this line
  var width = 200;
  radius = width / 1.1;
  var height = 200;
  var angle = 0,
    step = (2 * Math.PI) / fields.length;
  fields.each(function () {
    var x = Math.round(
      width / 2 + radius * Math.cos(angle) - $(this).width() / 2
    );
    var y = Math.round(
      height / 2 + radius * Math.sin(angle) - $(this).height() / 2
    );
    $(this).css({
      left: x + "px",
      top: y + "px",
    });
    angle += step;
  });
});

// Second Circle
let i = 2;
$(document).ready(function () {
  var radius = 200;
  var fields = $(".itemDot");
  // var container = $(".dotCircle"); // Don't remove this line
  var width = 300;
  radius = width / 1.09;
  var height = 300;
  var angle = 0,
    step = (2 * Math.PI) / fields.length;
  fields.each(function () {
    var x = Math.round(
      width / 2 + radius * Math.cos(angle) - $(this).width() / 2
    );
    var y = Math.round(
      height / 2 + radius * Math.sin(angle) - $(this).height() / 2
    );
    $(this).css({
      left: x + "px",
      top: y + "px",
    });
    angle += step;
  });
});

// // Third Circle
let j = 2;
$(document).ready(function () {
  var radius = 200;
  var fields = $(".itemsEMP");
  // var container = $(".thirdCircle"); // Don't remove this line
  var width = 200;
  radius = width / 0.53;
  var height = 200;
  var angle = 0,
    step = (2 * Math.PI) / fields.length;
  fields.each(function () {
    var x = Math.round(
      width / 2 + radius * Math.cos(angle) - $(this).width() / 2
    );
    var y = Math.round(
      height / 2 + radius * Math.sin(angle) - $(this).height() / 2
    );
    $(this).css({
      left: x + "px",
      top: y + "px",
    });
    angle += step;
  });
});



// Fourth Circle
let c = 2;
$(document).ready(function () {
  var radius = 200;
  var fields = $(".itemEMP");
  // var container = $(".thirdCircle"); // Don't remove this line
  var width = 200;
  radius = width / 0.42;
  var height = 200;
  var angle = 0,
    step = (2 * Math.PI) / fields.length;
  fields.each(function () {
    var x = Math.round(
      width / 2 + radius * Math.cos(angle) - $(this).width() / 2
    );
    var y = Math.round(
      height / 2 + radius * Math.sin(angle) - $(this).height() / 2
    );
    $(this).css({
      left: x + "px",
      top: y + "px",
    });
    angle += step;
  });
});


// Mobile Screen Sidebar
function openNav() {
  document.getElementById("mySidenav").style.width = "110px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// Rotation Images in Mobile screen
const myList = document.querySelector(".myList");
const listItems = document.querySelectorAll(".item");
myList.addEventListener("click", function (event) {
  document.getElementById("mySidenav").style.width = "0";

  event.preventDefault(); // Prevent the default link behavior
  if (isFirstClickForTweenMax && isFirstClickForTetris) {
    if (isFirstClickForRotation) {
      listItems.forEach(function (item) {
        item.classList.toggle("animationClass");
      });
      isFirstClickForRotation = false;
    } else {
      isFirstClickForRotation = true; // Reset to first click state
      setTimeout(() => {
        window.location.reload(); // Reload the page after a short delay
      }, 100);
    }
  }
});

// TweenMax Effect in Mobile screen
const my_List = document.querySelector(".tween_max");
my_List.addEventListener("click", function (event) {
  document.getElementById("mySidenav").style.width = "0";
  event.preventDefault(); // Prevent the default link behavior
  if (isFirstClickForRotation && isFirstClickForTetris) {
    if (isFirstClickForTweenMax) {
      const list_Items = document.querySelectorAll(".item");

      list_Items.forEach(function (item) {
        item.classList.toggle("cell");
      });
      TweenMax.staggerFromTo(
        ".cell",
        0.5,
        { scale: 0, rotation: 90, autoAlpha: 0, transformOrigin: "50% 50%" },
        { scale: 1, rotation: 0, autoAlpha: 1, transformOrigin: "50% 50%" },
        0.8
      );
      isFirstClickForTweenMax = false;
      setTimeout(() => {
        window.scrollTo({
          left: 0,
          top: document.body.scrollHeight,
          behavior: "smooth",
        }); // Reload the page after a short delay
      }, 17000);
    } else {
      isFirstClickForTweenMax = true; // Reset to first click state
      setTimeout(() => {
        window.location.reload(); // Reload the page after a short delay
      }, 100);
    }
  }
});

// Tetris Effects

const timeline = gsap.timeline();

console.log("timeline", timeline);

const drop = (elem, steps, initialY = 160, delay = 0.1) =>
  gsap.fromTo(
    elem,
    {
      y: initialY,
      opacity: 0,
    },
    {
      y: "0",
      opacity: 1,
      ease: SteppedEase.config(steps),
      ease: "power4.out",
      delay,
      duration: 1,
    }
  );

// Click events
const tetrisEffect = document.querySelector(".tetris_effect");
const liElements = document.querySelectorAll(".item");
// Add event listener to the button
tetrisEffect.addEventListener("click", addCssClassToLiElements);
// Function to add CSS class to the <li> elements
function addCssClassToLiElements() {
  // Loop through each <li> element
  if (isFirstClickForRotation && isFirstClickForTweenMax) {
    if (isFirstClickForTetris) {
    document.getElementById("mySidenav").style.width = "0";

      liElements.forEach((liElement, index) => {
        // Create the class name based on the pattern 'image_{index + 1}'
        const className = `bounce${index + 1}`;
        // Add the CSS class to the <li> element
        liElement.classList.add(className);
      });

      const bounce_1 = drop(".bounce1", 10, 350);
      const bounce_2 = drop(".bounce2", 10, 350);
      const bounce_3 = drop(".bounce3", 10, 350);
      const bounce_4 = drop(".bounce4", 10, 350);
      const bounce_5 = drop(".bounce5", 10);
      const bounce_6 = drop(".bounce6", 10);
      const bounce_7 = drop(".bounce7", 10);
      const bounce_8 = drop(".bounce8", 10);
      const bounce_9 = drop(".bounce9", 10);
      const bounce_10 = drop(".bounce10", 10);
      const bounce_11 = drop(".bounce11", 10);
      const bounce_12 = drop(".bounce12", 10);
      const bounce_13 = drop(".bounce13", 10);
      const bounce_14 = drop(".bounce14", 10);
      const bounce_15 = drop(".bounce15", 10);
      const bounce_16 = drop(".bounce16", 10);
      const bounce_17 = drop(".bounce17", 10);
      const bounce_18 = drop(".bounce18", 10);
      const bounce_19 = drop(".bounce19", 10);
      const bounce_20 = drop(".bounce20", 10);
      const bounce_21 = drop(".bounce21", 10);
      const bounce_22 = drop(".bounce22", 10);
      const bounce_23 = drop(".bounce23", 10);
      const bounce_24 = drop(".bounce24", 10);
      const bounce_25 = drop(".bounce25", 10);
      const bounce_26 = drop(".bounce26", 10);
      const bounce_27 = drop(".bounce27", 10);
      const bounce_28 = drop(".bounce28", 10);
      const bounce_29 = drop(".bounce29", 10);
      const bounce_30 = drop(".bounce30", 10);
      const bounce_31 = drop(".bounce31", 10);
      const bounce_32 = drop(".bounce32", 10);
      const bounce_33 = drop(".bounce33", 10);
      const bounce_34 = drop(".bounce34", 10);
      const bounce_35 = drop(".bounce35", 10);
      const bounce_36 = drop(".bounce36", 10);
      const bounce_37 = drop(".bounce37", 10);
      const bounce_38 = drop(".bounce38", 10);
      const bounce_39 = drop(".bounce39", 10);

      timeline
        .add(bounce_1)
        .add(bounce_2)
        .add(bounce_3)
        .add(bounce_4)
        .add(bounce_5)
        .add(bounce_6)
        .add(bounce_7)
        .add(bounce_8)
        .add(bounce_9)
        .add(bounce_10)
        .add(bounce_11)
        .add(bounce_12)
        .add(bounce_13)
        .add(bounce_14)
        .add(bounce_15)
        .add(bounce_16)
        .add(bounce_17)
        .add(bounce_18)
        .add(bounce_19)
        .add(bounce_20)
        .add(bounce_21)
        .add(bounce_22)
        .add(bounce_23)
        .add(bounce_24)
        .add(bounce_25)
        .add(bounce_26)
        .add(bounce_27)
        .add(bounce_28)
        .add(bounce_29)
        .add(bounce_30)
        .add(bounce_31)
        .add(bounce_32)
        .add(bounce_33)
        .add(bounce_34)
        .add(bounce_35)
        .add(bounce_36)
        .add(bounce_37)
        .add(bounce_38)
        .add(bounce_39);
      // .repeat(-1);
      isFirstClickForTetris = false;
      setTimeout(() => {
        window.scrollTo({
          left: 0,
          top: document.body.scrollHeight,
          behavior: "smooth",
        }); // Reload the page after a short delay
      }, 25000);
    } else {
      isFirstClickForTetris = true; // Reset to first click state
      setTimeout(() => {
        window.location.reload(); // Reload the page after a short delay
      }, 100);
    }
  }
}

function func() {
  // console.log("1111111111111111111111111");
  abcd = true;
}
function func2() {
  // console.log("1111111111111111111112222222222222222222222222222222222");
  // an alert will pop-up when onmouseover gets triggered
  abcd = false;
}


// First Circle Hover Effect  start/stop

function turnOnAnimation(element){
  element.style.animationPlayState = null
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = null

  })
}

function turnOffAnimation(element){
  element.style.animationPlayState = 'paused'
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = 'paused'

  })
}
document.querySelectorAll('.ceo_Circle img').forEach((e)=>{
  e.addEventListener('mouseover',()=>{
    turnOffAnimation(document.querySelector('.ceo_Circle'))
  })
  e.addEventListener('mouseout',()=>{
    turnOnAnimation(document.querySelector('.ceo_Circle'))
  })
});

// Seacond Circle Hover Effect  start/stop

function turnOnAnimation(element){
  element.style.animationPlayState = null
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = null

  })
}

function turnOffAnimation(element){
  element.style.animationPlayState = 'paused'
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = 'paused'

  })
}
document.querySelectorAll('.holderCircle img').forEach((e)=>{
  e.addEventListener('mouseover',()=>{
    turnOffAnimation(document.querySelector('.holderCircle'))
  })
  e.addEventListener('mouseout',()=>{
    turnOnAnimation(document.querySelector('.holderCircle'))
  })
});

// Third Circle Hover Effect  start/stop

function turnOnAnimation(element){
  element.style.animationPlayState = null
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = null

  })
}

function turnOffAnimation(element){
  element.style.animationPlayState = 'paused'
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = 'paused'

  })
}
document.querySelectorAll('.juniorCircle img').forEach((e)=>{
  e.addEventListener('mouseover',()=>{
    turnOffAnimation(document.querySelector('.juniorCircle'))
  })
  e.addEventListener('mouseout',()=>{
    turnOnAnimation(document.querySelector('.juniorCircle'))
  })
});

// Fourth Circle Hover Effect  start/stop

function turnOnAnimation(element){
  element.style.animationPlayState = null
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = null

  })
}

function turnOffAnimation(element){
  element.style.animationPlayState = 'paused'
  element.querySelectorAll('img').forEach((e)=>{
    e.style.animationPlayState = 'paused'

  })
}
document.querySelectorAll('.employeeCircle img').forEach((e)=>{
  e.addEventListener('mouseover',()=>{
    turnOffAnimation(document.querySelector('.employeeCircle'))
  })
  e.addEventListener('mouseout',()=>{
    turnOnAnimation(document.querySelector('.employeeCircle'))
  })
});