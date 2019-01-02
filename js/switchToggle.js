'use strict'; console.clear();

const toggle = document.querySelector('.toggle');
const toggleCheckbox = document.querySelector('.toggle__checkbox');
const output = document.querySelector('output');

output.textContent = 0;

let touch = {
  start: { x: 0, y: 0 },
  end: { x: 0, y: 0 },
  moved: false,
};

toggleCheckbox.addEventListener('touchstart', e => {
  e.stopImmediatePropagation(); // Resolves error: [Intervention] Ignored attempt to cancel a touchend event with cancelable=false, for example because scrolling is in progress and cannot be interrupted.
  touch.start.x = e.touches[0].pageX;
  touch.start.y = e.touches[0].pageY;
});

toggleCheckbox.addEventListener('touchmove', e => {
  touch.end.x = e.touches[0].pageX;
  touch.end.y = e.touches[0].pageY;
  touch.moved = true;
});

toggleCheckbox.addEventListener('touchend', function(e) {
  e.preventDefault(); // Prevent click event since e.stopImmediatePropagation() doesn't affect it
  const x = touch.start.x - touch.end.x;
  const y = touch.start.y - touch.end.y;
  if (
    touch.end.x &&
    (Math.abs(x) > this.offsetWidth / 2) &&
    (Math.abs(x) / 2 > Math.abs(y))
  ) {
    // Angle is no more than 45 degrees off of swipe left/right
    this.checked = !!(x < 0);
  } else if (!touch.moved || document.elementFromPoint(touch.end.x, touch.end.y) === this) {
    // Simulate "click" with a "tap"
    this.checked = !this.checked;
  }
  // Reset
  touch = {
    start: { x: 0, y: 0 },
    end: { x: 0, y: 0 },
    moved: false,
  };
  output.textContent = ~~this.checked;
});

// Click listener after touch to ensure touch and click aren't being fired;
// hence the `e.preventDefault` (should have been e.stopImmediatePropagation()) on the touchend listener
toggleCheckbox.addEventListener('click', e => {
  output.textContent = ~~e.target.checked;
});
