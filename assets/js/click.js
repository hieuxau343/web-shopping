import { dogs, cats, foods_pet, benefits } from "./product.js";

let index = 0;
let totalQuantity = 0;

// Bắt sự kiện khi người dùng thực hiện cuộn trang
window.addEventListener("scroll", function () {
  var header = this.document.getElementById("header");
  var scrollPosition = this.window.scrollY;

  if (scrollPosition > 900) {
    header.classList.add("open");
  } else {
    header.classList.remove("open");
  }
});
// SLIDER AUTO
const sliderContents = document.querySelectorAll(".slider .slider-content");
function slideAuto() {
  index = index + 1;
  if (index > sliderContents.length - 1) {
    index = 0;
  }
  sliderContents.forEach((content, i) => {
    if (i === index) {
      content.style.transform = `translateX(0)`;
    } else {
      content.style.transform = `translateX(-100%)`;
    }
  });
}
setInterval(slideAuto, 5000);

// ============================= list-dog ==================================
const dogsElement = document.querySelector(".list_dog");

let dogsHtml = dogs.map((element) => {
  return `<li>
  <div class="card-pet" data-id="${element.id}">
    <div class="imagine">
      <img src="${element.image}" alt="" />
      <div class="card-icon">
        <strong class="click-button">+</strong>
      </div>
    </div>
    <div class="info_pet">
      <div class="title_pet">
        <p>${element.type}</p>
        <p class="name">${element.name}</p>
      </div>
      <span class="price">${element.price}</span>
    </div>
  </div>
</li>
`;
});

dogsElement.innerHTML = dogsHtml.join("");

// ============================= list-cat ==================================
const catsElement = document.querySelector(".list_cat");

let catsHtml = cats.map((element) => {
  return `<li>
    <div class="card-pet" data-id="${element.id}">
      <div class="imagine">
        <img src="${element.image}" alt="" />
        <div class="card-icon">
          <strong class="click-button">+</strong>
        </div>
      </div>
      <div class="info_pet">
        <div class="title_pet">
          <p>${element.type}</p>
          <p class="name">${element.name}</p>
        </div>
        <span class="price">${element.price}</span>
      </div>
    </div>
  </li>
`;
});

catsElement.innerHTML = catsHtml.join("");

// ==================list-food_pet=============================
const food_petsElement = document.querySelector(".list_food_pet");

let food_petsHtml = foods_pet.map((element) => {
  return `<li>
    <div class="card-pet" data-id="${element.id}">
      <div class="imagine">
        <img src="${element.image}" alt="" />
        <div class="card-icon">
          <strong class="click-button">+</strong>
        </div>
      </div>
      <div class="info_pet">
        <div class="title_pet">
          <p>${element.type}</p>
          <p class="name">${element.name}</p>
        </div>
        <span class="price">${element.price}</span>
      </div>
    </div>
  </li>
`;
});
food_petsElement.innerHTML = food_petsHtml.join("");

//BENEFITS-LIST=========================================================
const benefitsElement = document.querySelector(".benefit-lists");

let benefitsHtml = benefits.map((element) => {
  return ` <li class="boxs">
    <div class="box">
      <div class="box-img">
        <img src="${element.image}" alt="" />
      </div>
      <div class="box-title">
        <h5>
        ${element.title}
        </h5>
        <p>
        ${element.description}
        </p>
        <button>Xem thêm</button>
      </div>
    </div>
  </li>`;
});

benefitsElement.innerHTML = benefitsHtml.join("");

//========================LIST-BENEFITS- FUNCTION=======================
const btnNext = document.querySelector(".next");
const btnPrev = document.querySelector(".prev");
const benefit_list = document.querySelector(".benefit-lists");
// Số lượng ảnh hiện thị trên mỗi slide
const numItemsPerPage = 3;

// Số lượng ảnh trong danh sách
const numItems = benefit_list.children.length;

// Kích thước của mỗi ảnh (giả sử ảnh có cùng kích thước)
const itemWidth = benefit_list.children[0].offsetWidth;
// Số lượng slide
const numSlides = Math.ceil(numItems / numItemsPerPage);

let currentIndex = 0; // Vị trí hiện tại của slide

// Hàm di chuyển slide sang phải
function slideRight() {
  if (currentIndex < numSlides - 1) {
    currentIndex++;
  } else {
    currentIndex = 0; // Quay lại slide đầu tiên nếu đã đạt tới slide cuối cùng
  }
  if (numItems - currentIndex <= 3) {
    currentIndex = 0; // Quay lại ảnh ban đầu
  }
  updateSlidePosition();
}

// Hàm di chuyển slide sang trái
function slideLeft() {
  if (currentIndex > 0) {
    currentIndex--;
  }
  updateSlidePosition();
}

// Hàm cập nhật vị trí của slide
function updateSlidePosition() {
  benefit_list.style.transform = `translateX(${
    -3 * currentIndex * itemWidth
  }px)`;
}

// Gán sự kiện click cho nút arrow
btnNext.addEventListener("click", slideRight);
btnPrev.addEventListener("click", slideRight);
// =============================================================================================================

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

//Making function
function ready() {
  // Remove Item From cart
  var removeCartButtons = document.querySelectorAll(".cart-remov");
  for (var i = 0; i < removeCartButtons.length; i++) {
    var button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }

  //Quantity changes
  var quantityInput = document.getElementsByClassName("cart-quantity");
  for (var i = 0; i < quantityInput.length; i++) {
    var input = quantityInput[i];
    input.addEventListener("change", quantityChanged);
  }

  //Add To Cart
  var addCart = document.querySelectorAll(".click-button");
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener("click", addCartClicked);
  }
}
//Remove item from cart
function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.closest("li").remove();
  updateTotal();
  numberCart();
}
// Quantity change
function quantityChanged(event) {
  var input = event.target;

  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateTotal();
}

// AddCart
function addCartClicked(event) {
  var button = event.target;
  var shopProducts = button.closest(".card-pet");
  var nameProduct = shopProducts.querySelector(".name").innerHTML;
  var priceProduct = shopProducts.querySelector(".price").innerHTML;
  var imgProduct = shopProducts.querySelector(".imagine img").src;
  addCartToHtml(nameProduct, priceProduct, imgProduct);
}

function addCartToHtml(name, price, img) {
  var item = document.createElement("li");
  item.classList.add("item");

  var cartItems = document.getElementsByClassName("list-buy")[0];
  var cartItemsNames = cartItems.getElementsByClassName("name");
  for (var i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerHTML == name) return;
  }
  var itemContent = `<div class="image-item">
              <img src="${img}" alt="" />
              </div>
              <div class="detail-item">
              <div class="name">${name}</div>
              <div class="price">${price}</div>
              <input type="number" value="1" class="cart-quantity" />
              </div>
              <i class="bx bxs-trash-alt cart-remov"></i>`;
  item.innerHTML = itemContent;
  cartItems.appendChild(item);
  item.querySelector(".cart-remov").addEventListener("click", removeCartItem);
  item
    .querySelector(".cart-quantity")
    .addEventListener("change", quantityChanged);
  updateTotal();
}
function numberCart() {
  var numBlockCart = document.querySelector(".number-buy");
  var price = document.querySelector(".total-price");
  if (totalQuantity > 0) {
    numBlockCart.textContent = totalQuantity;
    numBlockCart.style.visibility = "visible";
  } else numBlockCart.style.visibility = "hidden";
}

function updateTotal() {
  var listBuy = document.getElementsByClassName("list-buy")[0];
  var cartBoxes = listBuy.getElementsByClassName("item");
  var total = 0;
  totalQuantity = 0;

  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.querySelector(".price");
    var quantityElement = cartBox.querySelector(".cart-quantity");
    var price = parseFloat(priceElement.innerHTML.replace("$", ""));
    var quantity = quantityElement.value;
    total = total + price * quantity;
    total = Math.round(total * 100) / 100;

    totalQuantity += parseInt(quantity);
    document.querySelector(".total-price").innerHTML = "$" + total;
  }
  if (total == 0) {
    document.querySelector(".total-price").innerHTML = "$" + 0;
  }
  numberCart();
}

// LOGIN
const iconInf = document.querySelector(".loginInf");
const formInput = document.querySelector(".form");
const buttonSignIn = document.getElementById("signInButton");
const buttonSignUp = document.getElementById("signUpButton");
const signInForm = document.getElementById("signIn");
const signUpForm = document.getElementById("signUp");
function toggleForm(e) {
  formInput.classList.toggle("active");
}
formInput.addEventListener("click", (e) => {
  if (e.target == e.currentTarget) {
    toggleForm();
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
  }
  e.stopPropagation();
});
iconInf.addEventListener("click", toggleForm);

// button

buttonSignUp.addEventListener("click", () => {
  signInForm.style.display = "none";
  signUpForm.style.display = "block";
});

buttonSignIn.addEventListener("click", () => {
  signInForm.style.display = "block";
  signUpForm.style.display = "none";
});
