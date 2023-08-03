
/*====================================
    Mobile thanos Effect       
======================================*/

const DEBUGS = false;
const REPETITION_COUNTS = 2; // number of times each pixel is assigned to a canvas
const NUMS_FRAMES = 40;

/**
 * Generates the individual subsets of pixels that are animated to create the effect
 * @param {HTMLCanvasElement} ctx
 * @param {number} count The higher the frame count, the less grouped the pixels will look - Google use 32, but for our elms we use 128 since we have images near the edges
 * @return {HTMLCanvasElement[]} Each canvas contains a subset of the original pixels
 */
function generateFrames($canvas, count = 32) {
  const { width, height } = $canvas;
  const ctx = $canvas.getContext("2d");
  ctx.canvas.willReadFrequently = true;
  const originalData = ctx.getImageData(0, 0, width, height);
  const imageDatas = [...Array(count)].map((_, i) =>
    ctx.createImageData(width, height)
  );

  // assign the pixels to a canvas
  // each pixel is assigned to 2 canvas', based on its x-position
  for (let x = 0; x < width; ++x) {
    for (let y = 0; y < height; ++y) {
      for (let i = 0; i < REPETITION_COUNTS; ++i) {
        const dataIndex = Math.floor(
          (count * (Math.random() + (2 * x) / width)) / 3
        );
        const pixelIndex = (y * width + x) * 4;
        // copy the pixel over from the original image
        for (let offset = 0; offset < 4; ++offset) {
          imageDatas[dataIndex].data[pixelIndex + offset] =
            originalData.data[pixelIndex + offset];
        }
      }
    }
  }

  // turn image datas into canvas'
  return imageDatas.map((data) => {
    const $c = $canvas.cloneNode(true);
    $c.getContext("2d").putImageData(data, 0, 0);
    return $c;
  });
}

/**
 * Inserts a new element over an old one, hiding the old one
 */
function replaceElementVisually($old, $new) {
  const $parent = $old.offsetParent;
  $new.style.top = `${$old.offsetTop}px`;
  $new.style.left = `${$old.offsetLeft}px`;
  $new.style.width = `${$old.offsetWidth}px`;
  $new.style.height = `${$old.offsetHeight}px`;
  $parent.appendChild($new);
  $old.style.visibility = "hidden";
}

/**
 * Disintegrates an element
 * @param {HTMLElement} $elm
 */
function disintegrates($elm) {
  html2canvas($elm).then(($canvas) => {
    // create the container we'll use to replace the element with
    const $container = document.createElement("div");
    $container.classList.add("disintegration-container");

    // setup the frames for animation
    const $frames = generateFrames($canvas, NUMS_FRAMES);
    $frames.forEach(($frame, i) => {
      $frame.style.transitionDelay = `${(1.35 * i) / $frames.length}s`;
      $container.appendChild($frame);
    });
    replaceElementVisually($elm, $container);
    $container.offsetLeft; // forces reflow, so CSS we apply below does transition
    if (!DEBUGS) {
      $frames.forEach(($frame) => {
        const randomRadian = 2 * Math.PI * (Math.random() - 0.5);
        $frame.style.transform = `rotate(${
          15 * (Math.random() - 0.5)
        }deg) translate(${60 * Math.cos(randomRadian)}px, ${
          30 * Math.sin(randomRadian)
        }px)
rotate(${15 * (Math.random() - 0.5)}deg)`;
        $frame.style.opacity = 0;
      });
    } else {
      $frames.forEach(($frame) => {
        $frame.style.animation = `debug-pulse .1s ease ${$frame.style.transitionDelay} infinite alternate`;
        $frame.style.display = `none`;
      });
    }
  });
}

var click2 = document.querySelector(".click_link");
var isFirstClick2 = true; // Track whether it's the first click

click2.addEventListener("click", () => {
  if (isFirstClick2) {
    document.getElementById("mySidenav").style.width = "0";
    const $elms = document.querySelectorAll(".disintegration_target");
    if ($elms.length === 0) {
      return; // No elements to disintegrate
    }

    const sampleSize = Math.min($elms.length, 10); // Set the desired sample size here
    const sampledIndices = [];
    const sampledElements = [];

    while (sampledIndices.length < sampleSize) {
      const randomIndex = Math.floor(Math.random() * $elms.length);
      if (!sampledIndices.includes(randomIndex)) {
        sampledIndices.push(randomIndex);
        sampledElements.push($elms[randomIndex]);
      }
    }

    sampledElements.forEach(($elm) => {
      disintegrates($elm);
    });

    isFirstClick2 = false;
  } else {
    isFirstClick2 = true; // Reset to first click state
    console.log(window.location.href);
    setTimeout(() => {
      window.location.reload(); // Reload the page after a short delay
    }, 100);
  }
});
