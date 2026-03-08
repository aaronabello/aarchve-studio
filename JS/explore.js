// Data goes here
const data = 
[
  {
    name: "Boracay",
    description:
      "Boracay’s magic unfolds where its turquoise sea meets powdery white sand under vast, ever-changing skies—from pastel sunrises to fiery sunsets. Each wave, cloud, and sunbeam paints a new scene, blending serenity with vibrant energy. This island doesn’t just dazzle the eye; it invites you to capture nature’s perfect harmony in every frame.",
    imageWide:
      "./Images/boracay1.PNG",
    imageTall:
      "./Images/boracay2.PNG",
    image1:
      "./Images/boracay3.PNG",
    image2:
      "./Images/boracay4.PNG",
    facts: 
    [
      "The ultra-fine white sand acts like a natural reflector, giving portraits a dreamy glow during golden hour.",
      "Sunset clouds often mirror the colors of tropical drinks (think mango-orange to piña colada-pink), creating unreal backdrops.",
      "Cute stray dogs and bold seagulls frequently photobomb beach shots, adding unexpected charm.",
      "Low tide reveals hidden sandbars perfect for (walking on water) illusion photos—just time it right!",
    ],
  },
  
  {
    name: "Random",
    description:
      "Embrace spontaneity—point your lens at anything that catches your eye, from a ray of light hitting a forgotten coffee cup to a stranger’s fleeting smile in a crowded street. The beauty of random shots lies in their raw, unfiltered magic, turning ordinary moments into unexpected treasures.",
    imageWide:
      "./Images/random1.PNG",
    imageTall:
      "./Images/random2.PNG",
    image1:
      "./Images/random3.PNG",
    image2:
      "./Images/random4.PNG",
    facts: 
    [
      "Blurry or off-center shots often create the most uniquely artistic results.",
      "Random shadows can transform boring scenes into abstract masterpieces.",
      "A single bright object (like a red balloon) in a dull setting steals the frame.",
      "Close-ups of unclear objects (What is that?) spark curiosity and conversation.",
    ],
  },

  {
    name: "Intramuros",
    description:
      "Photographing Intramuros is like capturing time itself—golden hour bathes its centuries-old walls in warm light, while horse-drawn kalesas add motion to its cobblestone charm. Every corner holds a story, from the intricate details of Manila Cathedral to the quiet drama of Fort Santiago’s ruins. Whether in sunlight or rain, this historic gem turns every shot into a vintage postcard.",
    imageWide:
      "./Images/intramuros1.jpeg",
    imageTall:
      "./Images/intramuros2.jpeg",
    image1:
      "./Images/intramuros3.jpeg",
    image2:
      "./Images/intramuros4.jpeg",
    facts: 
    [
      "The golden light at sunset makes the 400-year-old walls look like they’ve stepped out of a Spanish colonial painting.",
      "Horse carriages (kalesas) constantly crisscross the streets, adding dynamic movement and pops of color to historic backdrops.",
      "Manila Cathedral’s stained-glass windows cast rainbow reflections on the floor—perfect for ethereal interior shots.",
      "Some photographers swear their zoom lenses occasionally capture (orbs) near Fort Santiago’s dungeons… spooky lens flare or something more? ",
    ],
  },

  {
    name: "Sunset",
    description:
      "The sky ignites in fiery hues as the sun dips below the horizon, painting clouds in gold, pink, and purple—perfect for silhouettes or reflective shots over water. Whether you capture it over an urban skyline, a tranquil beach, or rugged mountains, a sunset transforms ordinary scenes into breathtaking moments of fleeting beauty.",
    imageWide:
      "./Images/sunset1.jpeg",
    imageTall:
      "./Images/sunset2.jpeg",
    image1:
      "./Images/sunset3.PNG",
    image2:
      "./Images/sunset4.jpeg",
    facts: 
    [
      "If you’re lucky, the split second the sun disappears might reveal a fleeting emerald-green glow (best seen over oceans).",
      "Overcast skies often explode with more vibrant colors than clear ones, as clouds scatter and amplify the light.",
      " Sunsets turn ordinary objects (palm trees, people, birds) into dramatic black cutouts—no fancy editing needed!",
      "Stay 20 extra minutes: the rising moon often glows amber, pairing perfectly with twilight hues.",
    ],
  },

  {
    name: "Pet",
    description:
      "Capture your furry friend’s personality by shooting at their eye level—whether it’s a curious head tilt, a mid-zoomies blur, or a sleepy paw-over-nose pose. Natural light near a window or during golden hour highlights their fur’s texture, while treats and squeaky toys guarantee authentic, ear-perked expressions.",
    imageWide:
      "./Images/pet1.PNG",
    imageTall:
      "./Images/pet2.jpeg",
    image1:
      "./Images/pet3.jpeg",
    image2:
      "./Images/pet4.jpeg",
    facts: 
    [
      "The second you pick up your camera, your pet suddenly develops selective hearing—until you shake the treat bag.",
      "Pets often mirror your energy; if you act silly, you’ll get the perfect derp-faced shot.",
      "The best candid shots happen when they’re asleep—toe beans, twitching whiskers, and all.",
      "Cats have a perfectly timed ability to close their eyes exactly as you click the shutter.",
    ],
  },

  {
    name: "Nature",
    description:
      "Capture the raw beauty of nature by embracing golden hour’s soft glow or the dramatic contrasts of stormy skies—whether it’s a dew-kissed spiderweb, a towering mountain range, or a single leaf floating on a stream. Patience is your lens; the best shots come when you let the wilderness reveal its magic on its own terms.",
    imageWide:
      "./Images/nature1.jpeg",
    imageTall:
      "./Images/nature2.PNG",
    image1:
      "./Images/nature3.JPG",
    image2:
      "./Images/nature4.jpeg",
    facts: 
    [
      "Lying flat on the ground can turn ordinary wildflowers into towering, alien landscapes (watch out for ants!).",
      "Stormy skies, fog, or even rain often create more dramatic shots than clear blue days.",
      "That (perfect) butterfly shot? You’ll take 237 blurry ones first—burst mode is your frenemy.",
      "Bark patterns make natural fingerprint close-ups; no two are alike!",
    ],
  },

  {
    name: "Street",
    description:
      "Capture the rhythm of the road—whether it's the blur of passing headlights at dusk, a lone cyclist cutting through fog, or weathered street signs layered with graffiti. Every puddle, crack, or crosswalk holds a story when framed with intention.",
    imageWide:
      "./Images/street1.jpeg",
    imageTall:
      "./Images/street2.jpeg",
    image1:
      "./Images/street3.jpeg",
    image2:
      "./Images/street4.jpeg",
    facts: [
      "Roads naturally guide the eye; shoot downhill curves to fake dramatic depth (even on flat ground)",	
      "Slow shutter turns traffic into river of light—just prop your camera on a railing.",
      "Mismatched street signs (like Stop + Skyline) create accidental humor shots.",
      "Angling your shot over a puddle can flip the whole scene into a surreal reflection.",
    ],
  },
];

const mobileNav = document.querySelector(".links");
const hamburger = document.querySelector(".hamburger");
const button = document.querySelectorAll(".moreInfo");
const model = document.querySelector(".model");
const modelContent = document.querySelector(".modelContent");
const closeModel = document.querySelector(".closeButton");
const title = document.querySelector(".modelContent h1");
const imageContainer = document.querySelector(".images");
const factTitle = document.querySelector(".factTitle");
const navbar = document.querySelector("nav");

const details = document.querySelector(".details");

const factContainer = document.querySelector(".factContainer");
let place;

const renderPlace = (item) => {
  factTitle.innerHTML += " " + place;
  console.log(factTitle);
  // Render the details in the container
  let placeName = document.createElement("h1");
  let placeDescription = document.createElement("p");
  let imageTall = document.createElement("div");
  let imageWide = document.createElement("div");
  let image1 = document.createElement("div");
  let image2 = document.createElement("div");

  for (let i = 0; i < 4; i++) {
    let fact = document.createElement("li");
    fact.textContent = item.facts[i];
    factContainer.appendChild(fact);
  }

  placeName.setAttribute("class", "placeTitle");
  placeDescription.setAttribute("class", "placeDescription");

  imageTall.setAttribute("class", "image tall");
  imageTall.setAttribute(
    "style",
    "background-image: url(" + item.imageTall + ")"
  );

  imageWide.setAttribute("class", "image wide");
  imageWide.setAttribute(
    "style",
    "background-image: url(" + item.imageWide + ")"
  );

  image1.setAttribute("class", "image");
  image1.setAttribute("style", "background-image: url(" + item.image1 + ")");

  image2.setAttribute("class", "image");
  image2.setAttribute("style", "background-image: url(" + item.image2 + ")");

  placeName.innerText = item.name;
  placeDescription.innerText = item.description;

  details.appendChild(placeName);
  details.appendChild(placeDescription);
  imageContainer.appendChild(imageTall);
  imageContainer.appendChild(imageWide);
  imageContainer.appendChild(image1);
  imageContainer.appendChild(image2);
  imageContainer.appendChild(image2);
};

button.forEach((link) => {
  link.addEventListener("click", function () {
    modelContent.classList.add("active");
    model.classList.add("active");

    place = link.getAttribute("data");

    data.filter(function (item) {
      if (item.name === place) {
        renderPlace(item);
      }
    });
  });
});

//Event listeners

hamburger.addEventListener("click", function () {
  mobileNav.classList.toggle("active");
  hamburger.classList.toggle("is-active");
  details.innerHTML = "";
  imageContainer.innerHTML = "";
  factContainer.innerHTML = "";
});

model.addEventListener("click", function () {
  model.classList.remove("active");
  modelContent.classList.remove("active");

  details.innerHTML = "";
  imageContainer.innerHTML = "";
  factContainer.innerHTML = "";
  factTitle.innerHTML =
    'Here are some <span class="factHighlight">fun facts</span> about';
});

closeModel.addEventListener("click", function () {
  model.classList.remove("active");
  modelContent.classList.remove("active");
  details.innerHTML = "";
  imageContainer.innerHTML = "";
  factContainer.innerHTML = "";
  factTitle.innerHTML =
    'Here are some <span class="factHighlight">fun facts</span> about';
});

window.onscroll = function () {
  if (scrollY > 50) {
    navbar.classList.add("active");
  } else {
    navbar.classList.remove("active");
  }
};
