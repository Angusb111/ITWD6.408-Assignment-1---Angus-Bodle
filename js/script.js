function checkcolor() {
  const r = document.querySelector(':root');
  const colour = localStorage.getItem('color');
  var x = document.getElementById("acc-button-blue");
  var y = document.getElementById("acc-button-green");
  var z = document.getElementById("acc-button-orange");
  if (x != null) {
    x.style.border = 'none';
  }
  if (y != null) {
    y.style.border = 'none';
  }
  if (z != null) {
    z.style.border = 'none';
  }
  switch (colour) {
    case 'blue':
      r.style.setProperty('--accent-color', '#34a6eb');
      if (x != null) {
        x.style.border = '2px solid black';
      }
      break;
    case 'green':
      r.style.setProperty('--accent-color', '#50C878');
      if (y != null) {
        y.style.border = '2px solid black';
      }
      break;
    case 'orange':
      r.style.setProperty('--accent-color', '#FF5733 ');
      if (z != null) {
        z.style.border = '2px solid black';
      }
      break;
  }
  var value = localStorage.getItem('backtheme');
  switch (value) {
    case 'light':
      r.style.setProperty('--back-color', '#ffffff');
      r.style.setProperty('--def-text', 'black');
      break;
    case 'inbetween':
      r.style.setProperty('--back-color', '#444444');
      r.style.setProperty('--def-text', 'white');
      break;
    case 'dark':
      r.style.setProperty('--back-color', '#181818');
      r.style.setProperty('--def-text', 'white');
      break;
  }

  if (localStorage.getItem('text') != null) {
    const valuet = localStorage.getItem('text');



    console.log(valuet);

    var arr = document.getElementsByTagName('p');
    var pArray = Array.prototype.slice.call(arr)
    for (let i = 0; i < pArray.length; i++) {
      switch (valuet) {
        case '1':
          pArray[i].style.fontSize = '1em';
          break;
        case '2':
          pArray[i].style.fontSize = '1.33em';
          break;
        case '3':
          pArray[i].style.fontSize = '1.66em';
          break;
        case '4':
          pArray[i].style.fontSize = '2em';
          break;
      }
    }
    var arr = document.getElementsByTagName('Li');
    var pArray = Array.prototype.slice.call( arr )
    for (let i = 0; i < pArray.length; i++) {
      switch (valuet) {
        case '1':
          pArray[i].style.fontSize = '1em';
          break;
        case '2':
          pArray[i].style.fontSize = '1.33em';
          break;
        case '3':
          pArray[i].style.fontSize = '1.66em';
          break;
        case '4':
          pArray[i].style.fontSize = '2em';
          break;
      }
    }
    var arr = document.getElementsByTagName('h3');
    var pArray = Array.prototype.slice.call( arr )
    for (let i = 0; i < pArray.length; i++) {
      switch (valuet) {
        case '1':
          pArray[i].style.fontSize = '1.17em';
          break;
        case '2':
          pArray[i].style.fontSize = '1.521em';
          break;
        case '3':
          pArray[i].style.fontSize = '1.872em';
          break;
        case '4':
          pArray[i].style.fontSize = '2.223em';
          break;
      }
    }
    var arr = document.getElementsByTagName('h2');
    var pArray = Array.prototype.slice.call( arr )
    for (let i = 0; i < pArray.length; i++) {
      switch (valuet) {
        case '1':
          pArray[i].style.fontSize = '1.5em';
          break;
        case '2':
          pArray[i].style.fontSize = '1.95em';
          break;
        case '3':
          pArray[i].style.fontSize = '2.4em';
          break;
        case '4':
          pArray[i].style.fontSize = '2.85em';
          break;
      }
    }
  }
}

function openMenu() {
  var x = document.getElementById("dropmenu");
  if (x.style.maxHeight === "0px") {
    x.style.maxHeight = "1000px";

  } else {
    x.style.maxHeight = "0px";

  }

}

function toggleDemo(selected) {
  var w = document.getElementById("demo1");
  var x = document.getElementById("demo2");
  var y = document.getElementById("demo3");
  var z = document.getElementById("demo4");
  var w1 = document.getElementById("demo1-button");
  var x1 = document.getElementById("demo2-button");
  var y1 = document.getElementById("demo3-button");
  var z1 = document.getElementById("demo4-button");
  w.style.display = "none";
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  w1.style.background = "";
  x1.style.background = "";
  y1.style.background = "";
  z1.style.background = "";
  w1.style.color = "var(--accent-color)";
  x1.style.color = "var(--accent-color)";
  y1.style.color = "var(--accent-color)";
  z1.style.color = "var(--accent-color)";

  switch (selected) {
    case 1:
      w.style.display = "flex";
      w1.style.background = "var(--accent-color)";
      w1.style.color = "white";
      break;
    case 2:
      x.style.display = "flex";
      x1.style.background = "var(--accent-color)";
      x1.style.color = "white";
      break;
    case 3:
      y.style.display = "flex";
      y1.style.background = "var(--accent-color)";
      y1.style.color = "white";
      break;
    case 4:
      z.style.display = "flex";
      z1.style.background = "var(--accent-color)";
      z1.style.color = "white";
      break;
  }
}

function toggleForm() {
  var x = document.getElementById("htmlform");
  var y = document.getElementById("googleform");

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";

  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

const titleArray = ['Everything Everywhere All At Once',
                    'Interstellar',
                    'For All Mankind',
                    'Better Call Saul',
                    'Breaking Bad',
                    'Spaceballs'];

const posterArray = ['everything',
                    'interstellar',
                    'mankind',
                    'saul',
                    'waltuh',
                    'spaceballs'];
console.log(posterArray);
console.log(titleArray);

var manualIndex = 0;
function nextMovie() {
  if (manualIndex == 5) {
    manualIndex = 0;
  } else {
    manualIndex++;
  }
  let filepath = 'media/images/movies/'.concat( posterArray[manualIndex] , '.jpg');
  console.log(filepath);
  document.getElementById('manual-slide-title').innerHTML = titleArray[manualIndex];
  document.getElementById('movie-poster-two').src = filepath;
}

const stockList = ['Asus 15.6" Laptop','Acer Aspire 3 15.6"',
'Microsoft Surface Laptop 2','Microsoft Surface Laptop 3',
'Lenovo Yoga 9','Lenovo Yoga 13'];
const priceList = [699,999,1499,2999,1000,1500];

function loadCart() {
  var shoppingCart = JSON.parse(localStorage.getItem('cart'));
  var total = 0;
  while (document.getElementById('listcontent').firstChild) {
        document.getElementById('listcontent').removeChild(document.getElementById('listcontent').firstChild);
    }
  for (var i = 0; i < shoppingCart.length; i++) {
    // Create li element
    var li = document.createElement('li');
    // Set text of element
    var key = shoppingCart[i];
    li.textContent = stockList[key].concat('\nPrice: $',priceList[key]);
    // Append this element to its parent
    document.getElementById('listcontent').appendChild(li);
    var newtotal = total + priceList[key];
    total = newtotal;
  }
  var p = document.createElement('p');
  // Set text of element
  p.textContent = 'Total: $'.concat(total);
  // Append this element to its parent
  document.getElementById('listcontent').appendChild(p);
}

function addToCart(item) {
  if (localStorage.getItem('cart') == null) {
    var shoppingCart = [];
    localStorage.setItem('cart', JSON.stringify(shoppingCart));
  }
  var shoppingCart = JSON.parse(localStorage.getItem('cart'));
  shoppingCart.push(item);
  localStorage.setItem('cart', JSON.stringify(shoppingCart));
  loadCart();
}

function clearCart() {
  var shoppingCart = [];
  localStorage.setItem('cart', JSON.stringify(shoppingCart));
  loadCart();
}

function loadDemo4Data(i) {
  var targetTitle = document.getElementById('target').getElementsByTagName('h3')[0];
  var targetImage = document.getElementById('target').getElementsByTagName('img')[0];
  var targetDesc = document.getElementById('target').getElementsByTagName('p')[0];
  const titleArray = JSON.parse(localStorage.getItem('titleArray'));
  const imageArray = JSON.parse(localStorage.getItem('imageArray'));
  const descArray = JSON.parse(localStorage.getItem('descArray'));
  targetTitle.innerHTML = titleArray[i];
  targetImage.src = 'media/images/gallery/'.concat(imageArray[i], '.jpg');
  targetDesc.innerHTML = descArray[i];
}

function updateGallery() {
  var title = document.getElementById('title').value;
  var image = document.getElementById('image').value;
  var desc = document.getElementById('desc').value;
  const titleArray = JSON.parse(localStorage.getItem('titleArray'));
  const imageArray = JSON.parse(localStorage.getItem('imageArray'));
  const descArray = JSON.parse(localStorage.getItem('descArray'));
  titleArray.push(title);
  imageArray.push(image);
  descArray.push(desc);
  localStorage.setItem('titleArray', JSON.stringify(titleArray));
  localStorage.setItem('imageArray', JSON.stringify(imageArray));
  localStorage.setItem('descArray', JSON.stringify(descArray));
  populateDemo4();
}

function prevMovie() {
  console.log(manualIndex);
  if (manualIndex == 0) {
    manualIndex = 5;
  } else {
    manualIndex--;
  }
  let filepath = 'media/images/movies/'.concat( posterArray[manualIndex] , '.jpg');
  console.log(filepath);
  document.getElementById('manual-slide-title').innerHTML = titleArray[manualIndex];
  document.getElementById('movie-poster-two').src = filepath;
}

function accent(colour) {
  const r = document.querySelector(':root');
  var x = document.getElementById("acc-button-blue");
  var y = document.getElementById("acc-button-green");
  var z = document.getElementById("acc-button-orange");
  x.style.border = 'none';
  y.style.border = 'none';
  z.style.border = 'none';
  switch (colour) {
    case 'blue':
      r.style.setProperty('--accent-color', '#34a6eb');
      x.style.border = '2px solid black';
      localStorage.setItem('color', 'blue');
      break;
    case 'green':
      r.style.setProperty('--accent-color', '#50ef78');
      y.style.border = '2px solid black';
      localStorage.setItem('color', 'green');
      break;
    case 'orange':
      r.style.setProperty('--accent-color', '#FF5733 ');
      z.style.border = '2px solid black';
      localStorage.setItem('color', 'orange');
      break;
  }
}

function background() {
  var value = document.getElementById('selectbackground').value;
  const r = document.querySelector(':root');
  switch (value) {
    case 'light':
      r.style.setProperty('--back-color', '#ffffff');
      r.style.setProperty('--def-text', 'black');
      localStorage.setItem('backtheme', 'light');
      break;
    case 'inbetween':
      r.style.setProperty('--back-color', '#444444');
      r.style.setProperty('--def-text', 'white');
      localStorage.setItem('backtheme', 'inbetween');
      break;
    case 'dark':
      r.style.setProperty('--back-color', '#181818');
      r.style.setProperty('--def-text', 'white');
      localStorage.setItem('backtheme', 'dark');
      break;
  }
}



function changeText (value) {
  localStorage.setItem('text', value);
  var arr = document.getElementsByTagName('p');
  var pArray = Array.prototype.slice.call( arr )
  for (let i = 0; i < pArray.length; i++) {
    switch (value) {
      case '1':
        pArray[i].style.fontSize = '1em';
        break;
      case '2':
        pArray[i].style.fontSize = '1.33em';
        break;
      case '3':
        pArray[i].style.fontSize = '1.66em';
        break;
      case '4':
        pArray[i].style.fontSize = '2em';
        break;
    }
  }
  var arr = document.getElementsByTagName('Li');
  var pArray = Array.prototype.slice.call( arr )
  for (let i = 0; i < pArray.length; i++) {
    switch (value) {
      case '1':
        pArray[i].style.fontSize = '1em';
        break;
      case '2':
        pArray[i].style.fontSize = '1.33em';
        break;
      case '3':
        pArray[i].style.fontSize = '1.66em';
        break;
      case '4':
        pArray[i].style.fontSize = '2em';
        break;
    }
  }
  var arr = document.getElementsByTagName('h3');
  var pArray = Array.prototype.slice.call( arr )
  for (let i = 0; i < pArray.length; i++) {
    switch (value) {
      case '1':
        pArray[i].style.fontSize = '1.17em';
        break;
      case '2':
        pArray[i].style.fontSize = '1.521em';
        break;
      case '3':
        pArray[i].style.fontSize = '1.872em';
        break;
      case '4':
        pArray[i].style.fontSize = '2.223em';
        break;
    }
  }
  var arr = document.getElementsByTagName('h2');
  var pArray = Array.prototype.slice.call( arr )
  for (let i = 0; i < pArray.length; i++) {
    switch (value) {
      case '1':
        pArray[i].style.fontSize = '1.5em';
        break;
      case '2':
        pArray[i].style.fontSize = '1.95em';
        break;
      case '3':
        pArray[i].style.fontSize = '2.4em';
        break;
      case '4':
        pArray[i].style.fontSize = '2.85em';
        break;
    }
  }
}
